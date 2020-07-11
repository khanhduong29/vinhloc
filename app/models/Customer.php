<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Client\Request;

use Illuminate\Database\Eloquent\Model;

class Customer extends Authenticatable
{
    use Notifiable;

    protected $table = 'customer';

    protected $fillable = ['name','email','password','token'];

    protected $guard = 'customer';


    public function register() {
        $validate = request()->validate(
			[
				'name' => 'required',
				'email' => 'required|unique:customer,email',
				'password' => 'required|min:6',
				'confirm_password' => 'required|same:password',
			],
			[
				'required' => ':attribute Đang bỏ trống.',
				'unique' => ':attribute đã tồn tại',
				'min' => ':attribute phai tren 6 ky tu',
			],
			[
                 'name' => 'Ten san pham',
                 'email' => 'Email',
                 'phone' => 'So dien thoai',
                 'password' => 'Mat khau',
			]
        );
        $models = $this->create([
            'name' => request()->name,
            'email' => request()->email,
            'phone' => request()->phone,
            'password' => Hash::make(request()['password']),
            'token' => Str::random(60)
        ]);
        return $models;
    }

    public function login() {
        $validate = request()->validate(
			[
				'email' => 'required',
				'password' => 'required',
			],
			[
				'required' => ':attribute Đang bỏ trống.',
			],
			[
                 'email' => 'Email',
                 'password' => 'Mat khau',
			]
        );
        if (Auth::guard('customer')->attempt(request()->only('email','password'))){
            return true;
         } else {
            return false;
         }
    }

    public function logout() {
        Auth::guard('customer')->logout();
    }
}
