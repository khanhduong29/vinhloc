<?php

namespace App\Models;
use Auth;
use Hash;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    protected $fillable = ['useradmin','email','image','password'];

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
				'file'=>'required|max:10000|mimes:jpg,jpeg,png,gif',
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
}
