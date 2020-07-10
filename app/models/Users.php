<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','phone', 'password',
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

    function add() {
        $validate = request()->validate(
			[
				'name' => 'required',
				'email' => 'required|unique:User,email',
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
            'password' => Hash::make(request()['password'])
        ]);
        return $models;
    }
}
