<?php

namespace App\Http\Controllers;

use App\Models\AdminCategories;
use App\Models\AdminProducts;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function index()
    {
        return view('pages.usercp.dashboard');
    }

    public function Logout()
    {
        Auth::logout();
        return Redirect()->route('login');
    }

    // Category Functions

    public function ViewCategory()
    {
        $data['allData'] = AdminCategories::paginate(8);
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
}
