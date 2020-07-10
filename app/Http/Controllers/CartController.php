<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart() {
        return view('pages.client.cart');
    }

    public function checkout() {
        return view('pages.client.checkout');
    }
}
