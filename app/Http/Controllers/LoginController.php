<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\categories;
use App\Models\products;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware(function($request,$next){
            view()->share([
                'categories' => Categories::where('status',1) -> get(),
                'products' => products::where('status',1)->paginate(4),

                // 'cart' => new cart()
            ]);
            return $next($request);
        });
    }
    public function register() {
        return view('pages.client.register');
    }
    public function postRegister(Request $request,User $user) {
        $user->register();
        if ($user) {
            return redirect()->route('login') -> with('success','Thêm mới thành công');
        }else{
            return redirect()->back()->with('error','Add products ' .request()->cate_name. ' fail' );
        }
    }

    public function login() {
        return view('pages.client.login');
    }
    public function postLogin(Request $request,User $user) {
        if($user->login()) {
            $user->login();
            return redirect()->route('product') -> with('success','Thêm mới thành công');
        } else {
            return redirect()->back()->with('error','Add products ' .request()->cate_name. ' fail' );
        }

    }
    public function postLogOut(Request $request,User $user){
        $user->logout();
        return redirect()->route('login_user') -> with('success','Dang xuat thanh cong');
    }
}
