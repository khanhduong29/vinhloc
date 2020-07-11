<?php

namespace App\Models;
use Auth;
use Hash;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'customer';

    protected $fillable = ['name','email','image','password'];

    // lấy dữ liệu
    public function list_cat(){
    	return admin::orderBy('id','DESC')->get();
    }
    // thêm dữ liệu
    public function add(){
    	$validate = request()->validate(
			[
				'useradmin' => 'required|unique:admin',
				'email' => 'required|unique:admin',
				'file'=>'required|max:10000|mimes:jpg,jpeg,png,gif',
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
                 'useradmin' => 'Username',
                 'email' => 'Email',
                 'password' => 'Mật khẩu',
                 'confirm_password' => 'Mật khẩu xác nhận ',
                 'file' =>'Ảnh'
			]
		);
		$image = '';
		if(request() -> has('file')){
			$file = request() -> file;
			$file -> move(base_path('public/Uploads'),$file -> getClientOriginalName());
			$image = $file -> getClientOriginalName();
		}
		$models = $this->create([
			'useradmin' => request()->useradmin,
			'email' => request()->email,
			'image' => $image,
			'password' => Hash::make(request()->password),
		]);
		return $models;

	}
	// cập nhật dữ liệu
	public function update_data($user){
		$validate = request()->validate(
			[
				'useradmin' => 'required',
				'email' => 'required',
				'file'=>'max:10000|mimes:jpg,jpeg,png,gif',
				'password'=>'required|min:6|max:100'
			],
			[
				'required' => ':attribute đang bỏ trống.',
				'min' => ':attribute ít nhất 6 kí tự',
				'max' => ':attribute quá lớn',
				'mimes' => 'Không đúng định dạng ảnh'
			],
			[
                 'email' => 'Email',
                 'password' => 'Mật khẩu',
                 'file' =>'Ảnh'
			]
		);
		if(request()->useradmin != $user->useradmin){
			$validate = request()->validate(
				[
					'useradmin' => 'unique:admin',
				],
				[
					'unique' => ':attribute đã tồn tại',
				],
				[
                 	'useradmin' => 'Username',
				]
			);
		}
		if(request()->email != $user->email){
			$validate = request()->validate(
				[
					'email' => 'unique:admin',
				],
				[
					'unique' => ':attribute đã tồn tại',
				],
				[
                 	'email' => 'Email',
				]
			);
		}
		$image = '';
		if(request() -> has('file')){
			$file = request() -> file;
			$file -> move(base_path('public/Uploads'),$file -> getClientOriginalName());
			$image = $file -> getClientOriginalName();
		}else{
			$image = $user->image;
		}
		$updated = $this->update([
			'useradmin' => request()->useradmin,
			'email' => request()->email,
			'image' => $image,
			'password' => Hash::make(request()->password),
		]);
    }

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
