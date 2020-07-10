<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\model\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register() {
        return view('pages.client.register');
    }

    public function login() {
        return view('pages.client.login');
    }
}
