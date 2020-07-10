<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register() {
        return view('pages.client.register');
    }
    public function postRegister(Request $request,Users $users) {
        $users->add();
        if ($users) {
            return redirect()->route('login') -> with('success','Thêm mới thành công');
        }else{
            return redirect()->back()->with('error','Add products ' .request()->cate_name. ' fail' );
        }
    }

    public function login() {
        return view('pages.client.login');
    }
}
