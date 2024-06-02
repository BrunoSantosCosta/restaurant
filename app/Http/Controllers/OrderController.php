<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\CartProductAddon;
use App\Models\Order;
use App\Models\ProductAddon;
use App\Http\Controllers\DB;
use App\Models\Product;
use App\Models\Schedules;
use App\Models\Style;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout($user)
    {
        $cartsCheckout = Cart::where('user_id', $user)
        ->join('products', 'carts.menu_id', '=', 'products.id')
        ->select('carts.*', 'products.*')
        ->get();

        $subtotalCheckout = 0;
        $totalCheckout = 0;
        foreach ($cartsCheckout as $cart) {
            $price = floatval(str_replace(',', '.', $cart->order_price));
            $subtotalCheckout += $price;
            $totalCheckout += $price;
        }

        $schedules = Schedules::all();
        $currentDay = date('N');
        $currentHour = date('H:i');
        $carts = Cart::where('user_id', $user)->get();
        $subtotal = 0;
        $total = 0;

        foreach ($carts as $cart) {
            $price = floatval(str_replace(',', '.', $cart->order_price));
            $quantity = floatval(str_replace(',', '.', $cart->quantity));
            $subtotal += $price;
            $total += $price;
        }
       $cartProductAddon = CartProductAddon::all();
       $addons = ProductAddon::all();
       $styles = Style::all();
       foreach ($styles as $item) {
           $general_color = $item->general_color;
       }
        foreach ($schedules as $schedule) {
        $today = $schedule['id'];
        if ($currentDay == $today) {
            if ($schedule['is_open'] == 0) {
               return back()->with('toast_error', 'O estabelecimento está fechado no momento!');
            } elseif ($currentHour >= $schedule['open'] && $currentHour <= $schedule['close']) {
                return view('frontend.checkout', compact('cartsCheckout', 'subtotalCheckout', 'totalCheckout', 'general_color'));
            } else {
                return back()->with('toast_error', 'O estabelecimento está fechado no momento!');
            }
            break;
        }
    }

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
                Cart::where('user_id', $user)
                ->whereNotExists(function ($query) use ($menuId) {
                    $query->select('id')
                          ->from('carts_product_addons')
                          ->whereRaw('carts_product_addons.id_order = carts.id')
                          ->where('carts_product_addons.id_product', $menuId);
                })
                ->delete();
            }
        } catch (\Throwable $th) {
            return back()->with('toast_error', 'Preencha Todos os Campos Para Prosseguir!');
        }
        return redirect(route('home'))->with('success', "Pedido Feito com Sucesso!");
    }

}
