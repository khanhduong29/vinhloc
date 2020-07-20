<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
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
        'name', 'email', 'avatar', 'password','remember_token','role'
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
    // thêm dữ liệu
    public function add(){
    	$validate = request()->validate(
			[
				'name' => 'required|unique:users',
				'email' => 'required|unique:users',
				'file'=>'max:10000|mimes:jpg,jpeg,png,gif',
                'password'=>'required|min:6|max:100',
				'confirm_password'=>'required|same:password',
			],
			[
				'required' => ':attribute đang bỏ trống.',
				'unique' => ':attribute đã tồn tại',
				'min' => ':attribute ít nhất 6 kí tự',
				'max' => ':attribute quá lớn',
				'mimes' => 'Không đúng định dạng ảnh',
				'same' => ':attribute chưa trùng khớp',
			],
			[
                 'name' => 'Name',
                 'email' => 'Email',
                 'password' => 'Mật khẩu',
                 'role' => 'Quyền',
                 'confirm_password' => 'Mật khẩu xác nhận ',
                 'file' =>'Ảnh'
			]
		);
		$roles = [];
        if (request()->full) {
            array_push($roles, 1);
        }
        if (request()->customer) {
            array_push($roles, 2);
        }
        if (request()->category) {
            array_push($roles, 3);
        }
        if (request()->product) {
            array_push($roles, 4);
        }
        if (request()->attr) {
            array_push($roles, 5);
        }
        if (request()->banner) {
            array_push($roles, 6);
        }
        if (request()->blog) {
            array_push($roles, 7);
        }
        if (request()->brand) {
            array_push($roles, 8);
        }
        if (request()->construction) {
            array_push($roles, 9);
        }
        if (request()->config) {
            array_push($roles, 10);
        }

        $role = implode(",",$roles);
		$avatar = 'user1.png';
		if(request() -> has('file')){
			$file = request() -> file;
			$file -> move(base_path('public/Uploads/Avatar'),$file -> getClientOriginalName());
			$avatar = $file -> getClientOriginalName();
		}
		$models = $this->create([
			'name' => request()->name,
            'email' => request()->email,
            'role' => $role,
			'avatar' => $avatar,
			'password' => Hash::make(request()->password),
		]);
		return $models;

	}
	// cập nhật dữ liệu
	public function update_data($user){
		$validate = request()->validate(
			[
				'name' => 'required',
				'email' => 'required',
				'file'=>'max:10000|mimes:jpg,jpeg,png,gif',
				'password'=>'required|min:6|max:100'
			],
			[
				'required' => ':attribute đang bỏ trống.',
				'min' => ':attribute ít nhất 6 kí tự',
				'max' => ':attribute quá lớn',
				'mimes' => 'không đúng định dạng ảnh'
			],
			[
                 'name' => 'Name',
                 'email' => 'Email',
                 'password' => 'Mật khẩu',
                 'file' =>'Ảnh'
			]
		);
		if(request()->email != $user->email){
			$validate = request()->validate(
				[
					'email' => 'unique:users',
				],
				[
					'unique' => ':attribute đã tồn tại',
				],
				[
                 	'email' => 'Email',
				]
			);
		}
        $roles = [];
        if (request()->full) {
            array_push($roles, 1);
        }
        if (request()->customer) {
            array_push($roles, 2);
        }
        if (request()->category) {
            array_push($roles, 3);
        }
        if (request()->product) {
            array_push($roles, 4);
        }
        if (request()->attr) {
            array_push($roles, 5);
        }
        if (request()->banner) {
            array_push($roles, 6);
        }
        if (request()->blog) {
            array_push($roles, 7);
        }
        if (request()->brand) {
            array_push($roles, 8);
        }
        if (request()->construction) {
            array_push($roles, 9);
        }
        if (request()->config) {
            array_push($roles, 10);
        }
        $role = implode(",",$roles);
		$avatar = '';
		if(request() -> has('file')){
			$file = request() -> file;
			$file -> move(base_path('public/Uploads/Avatar'),$file -> getClientOriginalName());
			$avatar = $file -> getClientOriginalName();
		}else{
			$avatar = $user->avatar;
		}
		$updated = $this->update([
			'name' => request()->name,
			'email' => request()->email,
            'avatar' => $avatar,
            'role' => $role,
			'password' => Hash::make(request()->password),
		]);
    }

    public function login() {
        $validate = request()->validate(
			[
				'email' => 'required',
				'password' => 'required',
			],
			[
				'required' => ':attribute đang bỏ trống.',
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
}
