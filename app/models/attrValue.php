<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class attrValue extends Model
{
    protected $table = 'attr_values';

    protected $fillable = ['attr_name','value'];

    // thêm dữ liệu
    public function add(){
		$models = $this->create([
            'attr_name' => request()->attr_name,
            'value' => request()->value,
		]);
		return $models;
	}
	// cập nhật dữ liệu
	public function update_data(){
		if(request()->attr_name && request()->value){
            $attr_name = request()->attr_name;
            $value = request()->value;
		}else{
            $attr_name = $id->attr_name;
            $value = $id->value;
		}
		$updated = $this->update([
            'attr_name' => $attr_name,
            'value' => $value
		]);
	}
}
