<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class attrName extends Model
{
    protected $table = 'attribute';

    protected $fillable = ['name'];

    // thêm dữ liệu
    public function add(){
		$models = $this->create([
			'name' => request()->name,
		]);
		return $models;
	}
	// cập nhật dữ liệu
	public function update_data(){
		if(request()->name){
			$name = request()->name;
		}else{
			$name = $id->name;
		}
		$updated = $this->update([
			'name' => $name
		]);
	}
}
