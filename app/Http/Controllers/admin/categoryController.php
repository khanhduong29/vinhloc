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

	class categoryController extends Controller {

		//danh sách người dùng
		public function list_cat(){
			$categories = Categories::orderBy('created_at','desc')->get();
        	return view('pages.admin.category.list', [
        		'category' => $category
        	]);
		}


		// thêm người dùng
		public function create(){
			return view('pages.admin.category.add');
		}
		public function store(Request $request){
			$request->validate([
			    'name_cat' => 'required|unique:Categories|max:255',
			]);
			if($request->status == null){
	    		$status = 0;
	    	}else{
	    		$status = 1;
	    	}
			Categories::create([
				'name_cat' => $request ->name_cat,
				'status' => $status,
			]);
			return redirect() -> route('list-categories') -> with('success','Thêm mới thành công');
		}


		// sửa người dùng

		public function edit($id_cat){
			$models = Categories::where('id_cat', $id_cat)->first();
			return view('admin.Categories.edit',[
				'models' => $models
			]);			
		}
		public function update($id_cat,Request $request){

			$models = Categories::where('id_cat',$id_cat);
			if($request->status == null){
	    		$status = 0;
	    	}else{
	    		$status = 1;
	    	}
			$models->update([
				'id_cat' => $request ->id_cat,
				'name_cat' => $request ->name_cat,
				'status' => $status,
			]);

			return redirect()->route('list-categories');
		}

		//xóa người dùng
		public function deleteCat(Request $request){
	        $id_cat = $request->id_cat;
	        Categories::where('id_cat', $id_cat)->delete();
	        return redirect() -> route('list-categories') -> with('success','xóa thành công');
	    }
	}

		

 ?>