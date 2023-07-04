<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $collection = Product::where('featured', 1)->get();
        return view('pages.home', compact('collection'));
    }

    public function shop()
    {
        $products = Product::all();
        return view('pages.shop', compact('products'));
    }

    public function cart()
    {
        return view('pages.cart');
    }
    public function checkout()
    {
        return view('pages.checkout');

    }

    public function about()
    {
        return view('pages.about');
    }

    public function productdetails($id)
    {
        $product = Product::findOrFail($id);
        // return $product;
        return view('pages.product-details', compact('product'));
    }

    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function contact()
    {
        return view('pages.contacts');
    }




}
