<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Logic to add the item to the cart
        // Retrieve the necessary data from the request and process it
        // Store the cart items in the session or database
        $cart = new cart();
        $cart->product_id = $request->input('product_id');
        //$cart->quantiy = $request->input(1);
        $cart->save();

        return redirect()->back()->with('success', 'Item added to cart');
    }

    public function buyNow(Request $request)
    {
        // Logic to handle the "Buy Now" functionality
        // Retrieve the necessary data from the request and process it
        // Perform any necessary payment processing or order placement

        return redirect()->route('checkout')->with('success', 'Order placed successfully');
    }
}
