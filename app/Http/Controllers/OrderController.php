<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\CartProductAddon;
use App\Models\Order;
use App\Models\OrderMeta;
use App\Http\Controllers\DB;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout($user)
    {
        $carts = Cart::where('user_id', $user)
        ->join('products', 'carts.menu_id', '=', 'products.id')
        ->select('carts.*', 'products.*')
        ->get();
        return view('frontend.checkout', compact('carts'));

    }

    public function order(Request $request, $user)
    {
        try {
            // dd($request);
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'city' => 'required',
                'postal_code' => 'required',
                'total' => 'required'
            ]);

            Order::create([
                'user_id' => $user,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'city' => $request->city,
                'postal_code' => $request->postal_code,
                'payment_method' => $request->payment_method,
                'payment_status' => 0,
                'order_status' => 0,
                'total' => $request->total
            ]);
            foreach ($request->menu_id as $menuId) {
                // dump($menuId);
                Cart::where('user_id', $user)
                ->whereNotExists(function ($query) use ($menuId) {
                    $query->select('id')
                          ->from('carts_product_addons')
                          ->whereRaw('carts_product_addons.id_order = carts.id')
                          ->where('carts_product_addons.id_product', $menuId);
                })
                ->delete();
            }
            // die();
        } catch (\Throwable $th) {
            dd($th);
            return back()->with('toast_error', 'Preencha Todos os Campos Para Prosseguir!');
        }
        // Cart::where('user_id', $user)->delete();

        // CartProductAddon::where('id_product', $request->menu_id)->delete();
        return redirect(route('home'))->with('success', "Pedido Feito com Sucesso!");
    }

}
