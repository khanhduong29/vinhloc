<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\categories;
use App\Models\products;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware(function($request,$next){
            view()->share([
                'categories' => Categories::all(),
                'cart' => new cart()
            ]);
            return $next($request);
        });
    }
    public function register() {
        return view('pages.client.register');
    }
    public function postRegister(Request $request,Customer $user) {
        $user->register();
        if ($user) {
            return redirect()->route('login_user') -> with('success','Đăng ký thành công');
        }else{
            return redirect()->back()->withInput();
        }
    }

    protected function login() {
        return view('pages.client.login');
    }
    public function postLogin(Request $request,Customer $user) {
        if($user->login()) {
            $user->login();
            return redirect()->route('product')->with('success','Đăng nhập thành công');
        } else {
            Session::flash('message', "Email hoặc mật khẩu không đúng");
            return Redirect::back()->withInput();
        }

    }
    public function postLogOut(Request $request,Customer $user){
        $user->logout();
        return redirect()->route('login_user') -> with('success','Dang xuat thanh cong');
    }
}
