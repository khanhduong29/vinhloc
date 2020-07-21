<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\categories;
use App\Models\products;
use App\Models\Cart;
use App\Models\Config;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware(function($request,$next){
            view()->share([
                'categories' => Categories::all(),
                'config' => Config::all(),
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

    public function forget_pass() {
        return view('pages.client.forget-password');
    }
    public function sendCodeReset(Request $request) {
        $email = $request->email;

        $checkUser = Customer::where('email',$email)->first();

        if(!$checkUser) {
            Session::flash('message', "Email không tồn tại");
            return redirect()->back();
        }

        $code = bcrypt(md5(time().$email));

        $checkUser->code = $code;
        $checkUser->time_code = Carbon::now();
        $checkUser->save();

        return redirect()->back()->with('success','Link đã được gửi vào email của bạn');
    }

    public function resetPassword() {
        return view('pages.client.reset-password');
    }
}
