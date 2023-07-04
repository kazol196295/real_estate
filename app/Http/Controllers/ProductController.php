<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //

    public function index()
    {

        $products = Product::all();
        $featured=Product::where('featured',1)->get();
        return view('admin.product.index', compact('products','featured'));

    }
    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->location = $request->input('location');
        $product->area = $request->input('home_area');
        $product->rooms = $request->input('rooms');
        $product->beds = $request->input('beds');
        $product->bath = $request->input('bath');
        $product->featured = $request->has('featured');
        $product->rent = $request->has('rent');
        $product->price = $request->input('price');
        $product->status = $request->input('property_status');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('includes/products/'), $imageName);
            $product->image = json_encode($imageName);
        }
        $product->save();

        return redirect()->route('product.index');
    }

    public function editProduct($id)
    {
        $edit_info = Product::findOrFail($id);
        return view("admin.product.edit", compact('edit_info'));
    }


    public function UpdateProduct(Request $request)
    {
        $product_id = $request->edit_id;
        $product = Product::findOrFail($product_id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->location = $request->input('location');
        $product->area = $request->input('home_area');
        $product->rooms = $request->input('rooms');
        $product->beds = $request->input('beds');
        $product->bath = $request->input('bath');
        $product->price = $request->input('price');
        $product->status = $request->input('property_status');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('includes/products/'), $imageName);
            $product->image = json_encode($imageName);
        }
        $product->save();

        return redirect()->route('product.index');
    }
    public function DeleteProduct($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('product.index');
    }
    public function productdetails($ID)
    {
        $product = Product::findOrFail($ID);
        return view('pages.productdetails', compact('product'));
    }


}
