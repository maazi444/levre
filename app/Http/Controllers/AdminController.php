<?php

namespace App\Http\Controllers;

use App\Models\AdminCategories;
use App\Models\AdminProducts;
use App\Models\Orders;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function superAdminHome()
    {
        return view('pages.admincp.dashboard');
    }

    public function Logout()
    {
        Auth::logout();
        return Redirect()->route('login');
    }

    // Change Password

    public function ChangePassword()
    {
        $data['allRecord'] = User::find(Auth()->user()->id);
        return view('pages.admincp.change_password', $data);
    }

    public function UpdatePassword(Request $request, $id)
    {

        if ($request->old_password) {
            if (!Hash::check($request->old_password, auth()->user()->password)) {
                return back()->with("error", "Old Password doesn't match!");
            }

            if ($request->new_password != $request->new_password_confirmation) {
                return back()->with("error", "Both Password doesn't match!");
            }

            User::whereId($id)->update([
                'password' => Hash::make($request->new_password)
            ]);
            return back()->with("status", "Password changed successfully!");
        }

        return back()->with("status", "Account details changed successfully!");
    }

    // Category Functions

    public function ViewCategory()
    {
        $data['allData'] = AdminCategories::with('categoryProduct')->withCount('categoryProduct')->orderBy('category_product_count', 'desc')->get();
        return view('pages.admincp.categories.categories', $data);
    }

    public function CreateCategory()
    {
        return view('pages.admincp.categories.addCategory');
    }

    public function StoreCategory(Request $request)
    {
        $data = new AdminCategories();
        $data->name = $request->cat_name;
        $data->visibility = $request->category__visibilityOpt;
        $data->created_at = Carbon::now();
        $data->save();

        return redirect()->route('admin.categories');
    }

    public function EditCategory($id)
    {
        $data['editData'] = AdminCategories::where('id', $id)->first();
        return view('pages.admincp.categories.editCategory', $data);
    }

    public function UpdateCategory(Request $request, $id)
    {
        $data = AdminCategories::find($id);

        $data->name = $request->cat_name;
        $data->visibility = $request->category__visibilityOpt;
        $data->updated_at = Carbon::now();
        $data->save();

        return redirect()->route('admin.categories');
    }

    public function DeleteCategory($id)
    {
        $data = AdminCategories::find($id);
        $data->delete();
        return redirect()->back();
    }

    // Products Functions

    public function ViewProducts()
    {
        $data['allData'] = AdminProducts::orderBy('category', 'asc')->paginate(10);
        return view('pages.admincp.products.viewProducts', $data);
    }

    public function CreateProduct()
    {
        $data['categories'] = AdminCategories::all();
        return view('pages.admincp.products.addProduct', $data);
    }

    public function StoreProduct(Request $request)
    {
        $data = new AdminProducts();

        $data->name = $request->prod_name;
        $data->description = $request->prod_desc;
        $data->category = $request->prod_category;
        // Generate Unique Product ID
        $prodid = date('YmdHi') . $request->prod_category;
        $data->prodid = $prodid;
        $data->quantity = $request->prod_quantity;
        $data->price = $request->prod_price;
        $data->created_at = Carbon::now();


        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/images/' . $data->image));
            $filename = date('YmdHi') . "." . $file->getClientOriginalExtension();
            $file->move(public_path('upload/images'), $filename);
            $data['image'] = $filename;
        }
        $data->save();

        return redirect()->route('admin.products');
    }

    public function EditProduct($id)
    {
        $data['categories'] = AdminCategories::all();
        $data['editData'] = AdminProducts::where('id', $id)->first();
        return view('pages.admincp.products.editProduct', $data);
    }

    public function UpdateProduct(Request $request, $id)
    {
        $data = AdminProducts::find($id);
        $data->name = $request->prod_name;
        $data->description = $request->prod_desc;
        $data->category = $request->prod_category;
        $data->quantity = $request->prod_quantity;
        $data->price = $request->prod_price;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/images/' . $data->image));
            $filename = date('YmdHi') . "." . $file->getClientOriginalExtension();
            $file->move(public_path('upload/images'), $filename);
            $data['image'] = $filename;
        }
        $data->updated_at = Carbon::now();
        $data->save();
        return redirect()->route('admin.products');
    }

    public function DeleteProduct($id)
    {
        $data = AdminProducts::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function ViewCustomers()
    {
        $data['allData'] = User::all();
        return view('pages.admincp.customers.view_customer', $data);
    }

    public function BlockCustomer($email)
    {
        $data = User::where('email', $email)->first();
        if ($data->status == 0) {
            $data->status = 1;
        } else {
            $data->status = 0;
        }
        $data->update();
        return redirect()->route('admin.view.customers');
    }

    public function ChangeRole($email)
    {
        $data['allData'] = User::where('email', $email)->get();
        return view('pages.admincp.customers.change_role', $data);
    }

    public function UpdateRole(Request $request, $id)
    {
        $data = User::find($id);
        $data->type = $request->role;
        $data->update();
        return redirect()->route('admin.view.customers');
    }

    public function ViewOrders()
    {
        $data['orderRecord'] = Orders::all()->sortByDesc('created_at')->groupBy('order_id');
        return view('pages.admincp.orders.view_orders', $data);
    }

    public function DeleteOrder($orderid)
    {
        DB::table('orders')->where('order_id', $orderid)->delete();
        return redirect()->back()->with('message', 'Order has been successfully deleted!');
    }

    public function OrderDetail($orderid)
    {
        $ordernum = $orderid;
        $ordertotal = Orders::where('order_id', $orderid)->first();
        $data['orderRecord'] = Orders::where('order_id', $orderid)->get();
        return view('pages.admincp.orders.order_detail', $data, compact('ordernum', 'ordertotal'));
    }

    public function OrderProcess($orderid)
    {
        $data['orderRecord'] = Orders::where('order_id', $orderid)->get();
        for ($i = 0; $i < count($data['orderRecord']); $i++) {

            // Order status update
            $order = $data['orderRecord'][$i];
            $order->status = 2;
            $order->update();

            // Product Inventory Update

            $product_id = $data['orderRecord'][$i]->prod_id;
            $product_quantity = $data['orderRecord'][$i]->prod_quantity;
            $product = AdminProducts::where('prodid', $product_id)->first();
            $product->quantity = $product->quantity - $product_quantity;
            $product->update();
        }
        return redirect()->route('admin.view.orders');
    }

    public function OrderStatus($orderid)
    {
        $data['orderRecord'] = Orders::where('order_id', $orderid)->first();
        return view('pages.admincp.orders.change_status', $data);
    }

    public function ChangeStatus(Request $request, $orderid)
    {
        $data['orderRecord'] = Orders::where('order_id', $orderid)->get();
        for ($i = 0; $i < count($data['orderRecord']); $i++) {
            $order = $data['orderRecord'][$i];
            $order->status = $request->status;
            $order->update();
        }
        return redirect()->route("admin.view.orders");
    }
}
