<?php

namespace App\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\Models\consultant;

class consultant extends Model
{
    protected $table = 'consultant';

    protected $fillable = ['name','phone','email','status'];
    
    // thêm dữ liệu
    public function add(){
    	$validate = request()->validate(
			[
				'name' => 'required',
				'phone' => 'required',
			],
			[
				'required' => ':attribute Đang bỏ trống.',
			],
			[
                 'name' => 'Tên',
                 'phone' => 'Số điện thoại',
			]
		);
		 $models = $this->create([
			'name' => request()->name,
			'image' => $image,
			'status' => 0,
		]);
		return $models;

	}
	// cập nhật dữ liệu
	public function update_data(){
		$updated = $this->update([
			'status' => 1,
		]);
	}
}
