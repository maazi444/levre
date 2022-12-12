<?php

namespace App\Http\Controllers;

use App\Models\AdminProducts;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    public function Logout()
    {
        Auth::logout();
        return Redirect()->route('login');
    }

    public function HomePage()
    {
        return view('pages.home');
    }

    public function CategoriesPage()
    {
        return view('pages.categories');
    }

    public function ShopPage()
    {
        $data['product_records'] = AdminProducts::paginate(15);
        return view('pages.shop', $data);
    }

    public function ProductPage($id)
    {
        $data['product'] = AdminProducts::where('prodid', $id)->first();
        $data['relatedproducts'] = AdminProducts::where('category', $data['product']->category)->get()->take(5);
        return view('pages.product', $data);
    }

    public function ContactPage()
    {
        return view('pages.contact');
    }

    public function AboutPage()
    {
        return view('pages.about');
    }

    public function CartPage()
    {
        $userAddress = User::find(Auth::user()->id);
        return view('pages.cart', compact('userAddress'));
    }

    public function UserOrderPage()
    {
        $data['orderRecord'] = Orders::where('user_id', Auth::user()->id)->get()->groupBy('order_id');
        // dd($data['orderRecord']);
        return view('pages.usercp.order', $data);
    }

    public function OrderSuccessPage()
    {
        return view('pages.order-success');
    }

    public function UserAddressPage()
    {
        // dd(Auth::user()->id);
        $address = User::find(Auth::user()->id);
        // dd($address);
        return view('pages.usercp.userAddress.user_address', compact('address'));
    }

    public function AddUserAddress()
    {
        return view('pages.usercp.userAddress.add_user_address');
    }

    public function StoreUserAddress(Request $request)
    {
        $data = User::find(Auth::user()->id);
        $data->address = $request->address;
        $data->zipcode = $request->zipcode;
        $data->city = $request->city;
        $data->country = $request->country;
        $data->update();
        return redirect()->route('user.address');
    }

    public function EditUserAddress()
    {
        $userAddress = User::find(Auth::user()->id);
        return view('pages.usercp.userAddress.edit_user_address', compact('userAddress'));
    }

    public function UpdateUserAddress(Request $request)
    {
        $userAddress = User::find(Auth::user()->id);
        $userAddress->address = $request->address;
        $userAddress->zipcode = $request->zipcode;
        $userAddress->city = $request->city;
        $userAddress->country = $request->country;
        $userAddress->update();
        return redirect()->route('user.address');
    }
}
