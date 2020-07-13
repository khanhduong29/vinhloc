<?php
	namespace App\Http\Controllers\admin;

	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
    use App\Models\attrValue;
    use App\Models\attrName;
	use File;

	class attrValueController extends Controller {
		//danh sách dữ liệu
		public function list_attrValue(){
            $attrValue = attrValue::all();
        	return view('pages.admin.attribute.attr_value.list', [
                'attrValue' => $attrValue
        	]);
		}
		// thêm dữ liệu
		public function create(){
            $attrName = attrName::all();
			return view('pages.admin.attribute.attr_value.add',[
                'attrName' => $attrName
            ]);
		}
		public function store(Request $request,attrValue $attrValue){
			$request->validate([
                'attr_id' => 'required',
                'value' => 'required'
			]);
			$attrValue->add();
	        if ($attrValue) {
	            return redirect()->route('list-attrValue') -> with('success','Thêm mới thành công');
	        }else{
	            return redirect()->back()->with('error','Add categories ' .request()->cate_name. ' fail' );
	        }
		}
		// sửa dữ liệu
		public function edit($id){
            $attrName = attrName::all();
            $attrValue = attrValue::where('id', $id)->first();
        	return view('pages.admin.attribute.attr_value.edit',[
                'attrValue' => $attrValue,
                'attrName' => $attrName
            ]);
		}
		public function update(request $request,attrValue $id){
			$id->update_data();
	       	if ($id) {
	        	return redirect()->route('list-attrValue') -> with('success','Sửa thành công');
	    	} else {
	     		return redirect()->back()->with('error','Update category'.request()->cate_name.' fail');
	    	}
		}
		// xóa dữ liệu
		public function delete(attrValue $id)
	    {
	        $id->delete();
	        if ($id) {
	           return redirect()->route('list-attrValue') -> with('success','Xóa thành công');
	       } else {
	        return redirect()->back()->with('error','Delete category '.request()->cate_name.' fail');
	       }
	    }
	}



 ?>
