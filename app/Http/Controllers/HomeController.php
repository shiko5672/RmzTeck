<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Events\AddToCart;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('logout','index','home','shop','blog','contact','about','details');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        return view('layout/index');
    }
    public function logout(){
        return view('layout/index');
    }
    public function home(){

        return view('layout/index');
    }
    public function shop(){
        $latestproducts=Product::all();
        return view('layout/shop',compact('latestproducts'));
    }
    public function blog(){

        return view('layout/blog');
    }
    public function contact(){

        return view('layout/contact');
    }
    public function about(){

        return view('layout/about');
    }
    public function checkout(){

        return view('layout/checkout');
    }
    public function details (){

        return view('layout/shop-details');
    }
    public function cart (){

        return view('layout/shopping-cart');
    }


}
