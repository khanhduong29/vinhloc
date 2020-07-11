<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $table = 'categories';

    protected $fillable = ['slug','name','image'];
    // lấy dữ liệu
    public function list_cat(){
    	return categories::orderBy('id','DESC')->get();
    }
    // thêm dữ liệu
    public function add(){
    	$image = '';
		if(request() -> has('file')){
			$file = request() -> file;
			$file -> move(base_path('public/Uploads'),$file -> getClientOriginalName());
			$image = $file -> getClientOriginalName();
		}
		$models = $this->create([
			'name' => request()->name,
			'slug' => Str::slug(request()->name),
		]);
		return $models;

	}
	// cập nhật dữ liệu
	public function update_data(){
		$image = '';
		if(request() -> has('file')){
			$file = request() -> file;
			$file -> move(base_path('public/Uploads'),$file -> getClientOriginalName());
			$image = $file -> getClientOriginalName();
		}else{
			$image = $pro->image;
		}
		$updated = $this->update([
			'name' => request()->name,
			'slug' => Str::slug(request()->name),
		]);
	}
}
