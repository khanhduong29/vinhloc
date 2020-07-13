<?php
	namespace App\Http\Controllers\admin;

	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\Models\brand;
	use File;

	class brandController extends Controller {

		//danh sách dữ liệu
		public function list_blg(){
			$brand = brand::all();
        	return view('pages.admin.brand.list', [
        		'brand' => $brand
        	]);
		}


		// thêm dữ liệu
		public function create(){
			return view('pages.admin.brand.add');
		}
		public function store(Request $request,brand $brand){
			$model = $brand->add();
	        if ($brand) {
	            return redirect()->route('list-brand') -> with('success','Thêm mới thành công');
	        }else{
	            return redirect()->back()->with('error','Add brand fail' );
	        }
		}
		// sửa dữ liệu
		public function edit($id){
			$brand = brand::where('id', $id)->first();
        	return view('pages.admin.brand.edit',[
        		'brand' => $brand,
        	]);
		}
		public function update(request $request,brand $id){
			$updated = $id->update_data($id);
	       	if ($id) {
	        	return redirect()->route('list-brand') -> with('success','Sửa thành công');
	    	} else {
	     		return redirect()->back()->with('error','Update category fail');
	    	}
		}

		// xóa dữ liệu
		public function delete(brand $id)
	    {
	        $delete = $id->delete();
	        if ($id) {
	           return redirect()->route('list-brand') -> with('success','Xóa thành công');
	       } else {
	        return redirect()->back()->with('error','Delete category fail');
	       }
	    }
	}



 ?>
