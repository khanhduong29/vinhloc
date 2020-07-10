<?php 
	namespace App\Http\Controllers\admin;
	
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	use App\Models\Categories;
	use Auth;
	use Hash;
	use Mail;
	use File;

	class categoriesController extends Controller {

		//danh sách dữ liệu
		public function list_cat(){
			$categories=categories::all();
        	return view('pages.admin.categories.list', [
        		'categories' => $categories
        	]);
		}


		// thêm dữ liệu
		public function create(){
			return view('pages.admin.categories.add');
		}
		public function store(Request $request,Categories $categories){
			$request->validate([
			    'name' => 'required|unique:categories|max:255',
			]);
    
			$model = $categories->add();
	        if ($categories) {
	            return redirect()->route('list-categories') -> with('success','Thêm mới thành công');
	        }else{
	            return redirect()->back()->with('error','Add categories ' .request()->cate_name. ' fail' );
	        }
		}
		// sửa dữ liệu
		public function edit($id){
			$categories = Categories::where('id', $id)->first();
        	return view('pages.admin.categories.edit',[
        		'categories' => $categories
        	]);
		}
		public function update(request $request,categories $id){
			$updated = $id->update_data();
	       	if ($id) {
	        	return redirect()->route('list-categories') -> with('success','Sửa thành công');
	    	} else {
	     		return redirect()->back()->with('error','Update category'.request()->cate_name.' fail');
	    	}
		}

		// xóa dữ liệu
		public function delete(Categories $id)
	    {
	        $delete = $id->delete();
	        if ($id) {
	           return redirect()->route('list-categories') -> with('success','Xóa thành công');
	       } else {
	        return redirect()->back()->with('error','Delete category '.request()->cate_name.' fail');
	       }
	    }
	}

		

 ?>