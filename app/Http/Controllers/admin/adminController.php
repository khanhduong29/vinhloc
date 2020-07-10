<?php

    namespace App\Http\Controllers\admin;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Admin;

    class adminController extends Controller {
        public function admin() {
            return view('pages.admin.index');
        }

        //danh sách dữ liệu
		public function list_ad(){
			$admin=admin::all();
        	return view('pages.admin.admin.list', [
        		'admin' => $admin
        	]);
		}


		// thêm dữ liệu
		public function create(){
			return view('pages.admin.admin.add');
		}
		public function store(Request $request,admin $admin){
			$model = $admin->add();
	        if ($admin) {
	            return redirect()->route('list-admin') -> with('success','Thêm mới thành công');
	        }else{
	            return redirect()->back()->with('error','Add admin ' .request()->cate_name. ' fail' );
	        }
		}
		// sửa dữ liệu
		public function edit($id){
			$admin = admin::where('id', $id)->first();
        	return view('pages.admin.admin.edit',[
        		'admin' => $admin
        	]);
		}
		public function update(request $request,admin $id){
			$updated = $id->update_data($id);
	       	if ($id) {
	        	return redirect()->route('list-admin') -> with('success','Sửa thành công');
	    	} else {
	     		return redirect()->back()->with('error','Update category'.request()->cate_name.' fail');
	    	}
		}

		// xóa dữ liệu
		public function delete(admin $id)
	    {
	        $delete = $id->delete();
	        if ($id) {
	           return redirect()->route('list-admin') -> with('success','Xóa thành công');
	       } else {
	        return redirect()->back()->with('error','Delete category '.request()->cate_name.' fail');
	       }
	    }



	    function login(){
			return view('pages.admin.login',[
			]);
		}
		public function postLogin(Request $request){
			$info = $request->only('email', 'password');
	        if (Auth::guard('admin')->attempt($info)) {
	            return redirect()->route('admin') -> with('success','Đăng nhập thành công');
	            
	        }
	        else{
	        	// echo 'đăng nhập thất bại';
	            return back();
	        }
		}
		public function logout(){
			Auth::guard('admin') -> logout();
			return redirect()->route('login');
		}
    }

 ?>
