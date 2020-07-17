<?php

namespace App\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class config extends Model
{
    protected $table = 'config';

    protected $fillable = ['name','value'];
    
    // thêm dữ liệu
    public function add(){
    	$validate = request()->validate(
			[
				'name' => 'required',
				'value' => 'required',
			],
			[
				'required' => ':attribute đang bỏ trống.',
			],
			[
                 'name' => 'Tên',
                 'value' => 'Giá trị',
			]
		);
		 $models = $this->create([
			'name' => request()->name,
			'value' => request()->value,
		]);
		return $models;

	}
	// cập nhật dữ liệu
	public function update_data($pro){
		$validate = request()->validate(
			[
				'value' => 'required',
			],
			[
				'required' => ':attribute đang bỏ trống.',
			],
			[
                 'value' => 'Giá trị',
			]
		);
		$updated = $this->update([
			'value' => request()->value,
		]);
	}
}
