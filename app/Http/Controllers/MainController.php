<?php

namespace App\Http\Controllers;

use App\Models\AdminCategories;
use App\Models\AdminProducts;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{

    public function Logout()
    {
        Auth::logout();
        return Redirect()->route('login');
    }

    public function index()
    {
        return view('pages.usercp.dashboard');
    }

    public function HomePage()
    {
        return view('pages.home');
    }

    public function CategoriesPage()
    {
        return view('pages.categories');
    }

    public function CategoryView($id)
    {
        $categoryRecord = AdminCategories::where('id', $id)->first();
        $data['product_records'] = AdminProducts::where('category', $categoryRecord->id)->get();
        return view('pages.category_view', $data, compact('categoryRecord'));
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
        $data['orderRecord'] = Orders::where('user_id', Auth::user()->id)->get()->sortByDesc('created_at')->groupBy('order_id');
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

    public function OrderDetail($orderid)
    {
        $ordernum = $orderid;
        $ordertotal = Orders::where('order_id', $orderid)->first();
        $data['orderRecord'] = Orders::where('order_id', $orderid)->get();
        return view('pages.usercp.view_order', $data, compact('ordernum', 'ordertotal'));
    }

    public function OrderConfirm($orderid)
    {
        $data['orderRecord'] = Orders::where('order_id', $orderid)->get();
        for ($i = 0; $i < count($data['orderRecord']); $i++) {
            $order = $data['orderRecord'][$i];
            $order->status = 4;
            $order->update();
        }
        return redirect()->back();
    }

    public function AccountDetail()
    {
        $data['allRecord'] = User::find(Auth()->user()->id);
        return view('pages.usercp.userAccount.view_account', $data);
    }

    public function UpdateAccount(Request $request, $id)
    {

        if ($request->old_password) {
            if (!Hash::check($request->old_password, auth()->user()->password)) {
                return back()->with("error", "Old Password Doesn't match!");
            }

            if ($request->new_password != $request->new_password_confirmation) {
                return back()->with("error", "Both Password Doesn't match!");
            }

            User::whereId($id)->update([
                'name' => $request->user_name,
                'password' => Hash::make($request->new_password)
            ]);
            return back()->with("status", "Password changed successfully!");
        }

        User::whereId($id)->update([
            'name' => $request->user_name,
        ]);

        return back()->with("status", "Account details changed successfully!");
    }
}
