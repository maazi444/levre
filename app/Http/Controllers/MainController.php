<?php

namespace App\Http\Controllers;

use App\Models\AdminProducts;
use Illuminate\Http\Request;

class MainController extends Controller
{
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
}
