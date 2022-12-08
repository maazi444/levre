<?php

namespace App\Http\Controllers;

use App\Models\AdminProducts;
use Illuminate\Http\Request;

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
}
