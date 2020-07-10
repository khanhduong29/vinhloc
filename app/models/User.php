<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','phone', 'password','remember_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function register() {
        $validate = request()->validate(
			[
				'name' => 'required',
				'email' => 'required|unique:Users,email',
				'phone' => 'required',
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
            'remember_token' => Str::random(60)
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
        if (Auth::attempt(request()->only('email','password'))){
            return true;
         } else {
            return false;
         }
    }

    public function logout() {
        Auth::logout();
    }
}
