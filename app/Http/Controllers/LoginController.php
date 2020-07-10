<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {
        return view('pages.client.login');
    }

    public function register() {
        return view('pages.client.register');
    }
}
