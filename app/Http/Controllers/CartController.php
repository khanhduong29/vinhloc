<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CartController extends Controller
{
     public function __construct(){
        $this->middleware(function($request,$next){
            view()->share([
                'categories' => Categories::all(),


                // 'cart' => new cart()
            ]);
            return $next($request);
        });
    }
    public function cart() {
        return view('pages.client.cart');
    }

    public function checkout() {
        return view('pages.client.checkout');
    }
}
