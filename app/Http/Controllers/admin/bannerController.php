<?php
	namespace App\Http\Controllers\admin;

	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\Models\banner;
	use File;

	class bannerController extends Controller {

		//danh sách dữ liệu
		public function list_ban(){
			$banner = banner::all();
        	return view('pages.admin.banner.list', [
        		'banner' => $banner
        	]);
		}
		// thêm dữ liệu
		public function create(){
			return view('pages.admin.banner.add');
		}
		public function store(Request $request,banner $banner){
			$model = $banner->add();
	        if ($banner) {
	            return redirect()->route('list-banner') -> with('success','Thêm mới thành công');
	        }else{
	            return redirect()->back()->with('error','Add banner fail' );
	        }
		}
		// sửa dữ liệu
		public function edit($id){
			$banner = banner::where('id', $id)->first();
        	return view('pages.admin.banner.edit',[
        		'banner' => $banner,
        	]);
		}
		public function update(request $request,banner $id){
			$updated = $id->update_data($id);
	       	if ($id) {
	        	return redirect()->route('list-banner') -> with('success','Sửa thành công');
	    	} else {
	     		return redirect()->back()->with('error','Update category fail');
	    	}
		}

		// xóa dữ liệu
		public function delete(banner $id)
	    {
	        $delete = $id->delete();
	        if ($id) {
	           return redirect()->route('list-banner') -> with('success','Xóa thành công');
	       } else {
	        return redirect()->back()->with('error','Delete category fail');
	       }
	    }
	}



 ?>
