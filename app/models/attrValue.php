<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class attrValue extends Model
{
    protected $table = 'attr_values';

    protected $fillable = ['attr_id','value'];

    // thêm dữ liệu
    public function add(){
		$models = $this->create([
            'attr_id' => request()->attr_id,
            'value' => request()->value,
		]);
		return $models;
	}
	// cập nhật dữ liệu
	public function update_data(){
		if(request()->attr_id && request()->value){
            $attr_id = request()->attr_id;
            $value = request()->value;
		}else{
            $attr_id = $id->attr_id;
            $value = $id->value;
		}
		$updated = $this->update([
            'attr_id' => $attr_id,
            'value' => $value
		]);
	}
}
