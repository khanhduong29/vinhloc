<?php
	namespace App\Http\Controllers\admin;

	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\Models\attrName;
	use File;

	class attrNameController extends Controller {
		//danh sách dữ liệu
		public function list_attrName(){
			$attrName=attrName::all();
        	return view('pages.admin.attribute.attr_name.list', [
        		'attrName' => $attrName
        	]);
		}
		// thêm dữ liệu
		public function create(){
			return view('pages.admin.attribute.attr_name.add');
		}
		public function store(Request $request,attrName $attrName){
			$request->validate([
			    'name' => 'required|unique:attribute|max:255',
			]);
			$attrName->add();
	        if ($attrName) {
	            return redirect()->route('list-attrName') -> with('success','Thêm mới thành công');
	        }else{
	            return redirect()->back()->with('error','Add categories ' .request()->cate_name. ' fail' );
	        }
		}
		// sửa dữ liệu
		public function edit($id){
			$attrName = attrName::where('id', $id)->first();
        	return view('pages.admin.attribute.attr_name.edit',[
        		'attrName' => $attrName
        	]);
		}
		public function update(request $request,attrName $id){
			$id->update_data();
	       	if ($id) {
	        	return redirect()->route('list-attrName') -> with('success','Sửa thành công');
	    	} else {
	     		return redirect()->back()->with('error','Update category'.request()->cate_name.' fail');
	    	}
		}
		// xóa dữ liệu
		public function delete(attrName $id)
	    {
	        $id->delete();
	        if ($id) {
	           return redirect()->route('list-attrName') -> with('success','Xóa thành công');
	       } else {
	        return redirect()->back()->with('error','Delete category '.request()->cate_name.' fail');
	       }
	    }
	}



 ?>
