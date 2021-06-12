<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use App\Models\Product;
use App\Models\Cart;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Products', [
            'product' => Product::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('ProductsCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $request->validate([
            'name' => ['required', 'min:5', 'max:50'],
            'slug' => ['required', 'max:50', 'unique:App\Models\Product,slug'],

            'product_bg_image' => ['required', 'max:150', 'url', 'unique:App\Models\Product,product_bg_image'],

            'product_hero_image' => ['required', 'max:150', 'url', 'unique:App\Models\Product,product_hero_image'],

            'product_title_image' => ['required', 'max:150', 'unique:App\Models\Product,product_title_image'],

            'description' => ['required', 'min:10', 'max:150'],
            'price' => ['required'],

        ]);
        Product::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'product_bg_image' => $request->product_bg_image,
            'product_hero_image' => $request->product_hero_image,
            'product_title_image' => $request->product_title_image,
            'description' => $request->description,
            'price' => $request->price * 100,
        ]);

        return Redirect::route('products.index');
    }

    public function addToCart(Request $request, $id, $qty)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id, $qty);
        $request->session()->put('cart', $cart);

        return  Redirect::route('products.index');
    }

    public function removeFromCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->remove($product->id);

        $request->session()->put('cart', $cart);

        return  Redirect::back();
    }

    public function destroyCart()
    {
        Session::forget('cart');
        return  Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return Inertia::render('Products.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return Inertia::render('EditProducts');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return  Redirect::route('products.index');
    }
}
