<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\Models\attributeValue;

class attribute extends Model
{
    protected $table = 'attributes';

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

    public function values()
    {
        return $this->hasMany('App\Models\attributeValue');
    }
}
