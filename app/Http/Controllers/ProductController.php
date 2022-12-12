<?php

namespace App\Http\Controllers;

use App\Models\AdminProducts;
use App\Models\Orders;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        // dd($request->prod_quantity);
        $product = AdminProducts::where('prodid', $id)->first();
        $cart = session()->get('cart', []);
        $cart[$id] = [
            "prodid" => $product->prodid,
            "name" => $product->name,
            "quantity" => $request->prod_quantity,
            "price" => $product->price,
            "image" => $product->image
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function removeCartProduct($id)
    {
        if ($id) {
            $cart = session()->get('cart');
            if (isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
            return redirect()->back();
        }
    }

    public function OrderCheckout(Request $request)
    {
        // Generate Order ID
        $order_id = random_int(10000, 99999);

        $carts = session('cart');

        foreach ($carts as $cart) {
            Orders::create([
                'order_id' => $order_id,
                'user_id' => Auth::user()->id,
                'prod_id' => $cart['prodid'],
                'prod_quantity' => $cart['quantity'],
                'created_at' => Carbon::now(),
            ]);
        }
        session()->forget('cart');
        return redirect()->route('order.success');
    }
}
