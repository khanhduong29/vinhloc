<?php
	namespace App\Http\Controllers\admin;

	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\Models\attributes;
	use File;

	class attrNameController extends Controller {
		//danh sách dữ liệu
		public function list_attrName(){
			$attrName=attributes::all();
        	return view('pages.admin.attribute.attr_name.list', [
        		'attrName' => $attrName
        	]);
		}
		// thêm dữ liệu
		public function create(){
			return view('pages.admin.attribute.attr_name.add');
		}
		public function store(Request $request,attributes $attrName){
			$request->validate([
			    'name' => 'required|unique:attributes|max:255',
			]);
			$attrName->add();
	        if ($attrName) {
	            return redirect()->route('list-attrName') -> with('message','Thêm mới thành công');
	        }else{
	            return redirect()->back()->with('message','Thêm mới thất bại' );
	        }
		}
		// sửa dữ liệu
		public function edit($id){
			$attrName = attributes::where('id', $id)->first();
        	return view('pages.admin.attribute.attr_name.edit',[
        		'attrName' => $attrName
        	]);
		}
		public function update(request $request,attributes $id){
			$id->update_data();
	       	if ($id) {
	        	return redirect()->route('list-attrName') -> with('message','Sửa thành công');
	    	} else {
	     		return redirect()->back()->with('message','Sửa thất bại');
	    	}
		}
		// xóa dữ liệu
		public function delete(attributes $id)
	    {
	        $id->delete();
	        if ($id) {
	           return redirect()->route('list-attrName') -> with('message','Xóa thành công');
	       } else {
	        return redirect()->back()->with('message','Xóa thất bại');
	       }
	    }
	}



 ?>
