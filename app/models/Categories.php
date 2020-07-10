<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $table = 'categories';

    protected $fillable = ['slug','name','status'];
    // lấy dữ liệu
    public function list_cat(){
    	return categories::where('status',1)->orderBy('id','DESC')->get();
    }
    // thêm dữ liệu
    public function add(){
    	$status = request()->status;
	    if($status){
	    	$status = 1;
	    }else{
	    	$status = 0;
	    }
		 $models = $this->create([
			'name' => request()->name,
			'slug' => Str::slug(request()->name),
			'status' => $status,
		]);
		return $models;
		
	}
	// cập nhật dữ liệu
	public function update_data(){
		$status = request()->status;
	    if($status){
	    	$status = 1;
	    }else{
	    	$status = 0;
	    }
		$updated = $this->update([
			'name' => request()->name,
			'slug' => Str::slug(request()->name),
			'status' => $status,
		]);
	}
}
