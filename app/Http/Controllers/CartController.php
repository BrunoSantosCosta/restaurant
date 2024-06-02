<?php

namespace App\Http\Controllers;
use App\Models\CartProductAddon;
use App\Models\Menu;
use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductAddon;
use App\Models\Style;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addCart(Request $request, Product $product, $user)
    {

        $cart =  Cart::create([
            'order_details' => $request->request->get('details') ?? '',
            'order_price' => $request->request->get('total_price'),
            'user_id' => $user,
            'menu_id' => $product->id,
            'quantity' => $request->request->get('quantity_product'),
        ]);

        foreach ($request->request as $key => $value) {
            if (strpos($key, 'quantity_') === 0 && $value > 0) {
                $productId = substr($key, strlen('quantity_'));
                $addon = ProductAddon::find($productId);

                if ($addon) {
                    CartProductAddon::create([
                        'id_order' => $cart->id,
                        'quantity' => $value,
                        'price' => $addon->price,
                        'id_product' => $product->id,
                        'id_addon' =>  $addon->id,
                    ]);
                }
            }
        }

        return back()->with('success', 'Produto Adicionado ao Carrinho!');
    }

    public function getCart($user)
    {
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
        return view('frontend.cart', compact('carts', 'subtotal', 'total' ,'cartProductAddon', 'addons', 'general_color'));
    }

    public function destroy(Cart $cart, $user)
    {
        $cart->delete();
        CartProductAddon::where('id_order', $cart->id)->delete();
        return redirect(route('getcart', $user));
    }
}
