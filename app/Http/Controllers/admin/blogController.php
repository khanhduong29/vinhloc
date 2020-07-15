<?php
	namespace App\Http\Controllers\admin;

	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\Models\blog;
	use File;

	class blogController extends Controller {

		//danh sách dữ liệu
		public function list_blg(){
			$blog = blog::all();
        	return view('pages.admin.blog.list', [
        		'blog' => $blog
        	]);
		}


		// thêm dữ liệu
		public function create(){
			return view('pages.admin.blog.add');
		}
		public function store(Request $request,blog $blog){
			$model = $blog->add();
	        if ($blog) {
	            return redirect()->route('list-blog') -> with('message','Thêm mới thành công');
	        }else{
	            return redirect()->back()->with('message','Thêm thất bại' );
	        }
		}
		// sửa dữ liệu
		public function edit($id){
			$blog = blog::where('id', $id)->first();
        	return view('pages.admin.blog.edit',[
        		'blog' => $blog,
        	]);
		}
		public function update(request $request,blog $id){
			$updated = $id->update_data($id);
	       	if ($id) {
	        	return redirect()->route('list-blog') -> with('message','Sửa thành công');
	    	} else {
	     		return redirect()->back()->with('message','Sửa thất bại');
	    	}
		}

		// xóa dữ liệu
		public function delete(blog $id)
	    {
	        $delete = $id->delete();
	        if ($id) {
	           return redirect()->route('list-blog') -> with('message','Xóa thành công');
	       } else {
	        return redirect()->back()->with('message','Xóa thất bại');
	       }
	    }
	}



 ?>
