<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;

use Session;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('shops.index', ['products' => $products]);
    }

    public function getAddToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        $request->session()->save();
        //dd($request->session()->get('cart'));
        return redirect()->route('product.index');
    }
}
