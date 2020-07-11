<?php

    namespace App\Http\Controllers\admin;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Admin;
    use Auth;
	use Hash;

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
	            return redirect()->back()->with('error','Add admin fail' );
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
	     		return redirect()->back()->with('error','Update category fail');
	    	}
		}

		// xóa dữ liệu
		public function delete(admin $id)
	    {
	        $delete = $id->delete();
	        if ($id) {
	           return redirect()->route('list-admin') -> with('success','Xóa thành công');
	       } else {
	        return redirect()->back()->with('error','Delete category fail');
	       }
	    }



	    function login_admin(){
			return view('pages.admin.login',[
			]);
		}
		public function postLogin_admin(Request $request){
			$info = $request->only('email', 'password');
	        if (Auth::guard('admin')->attempt($info)) {
	            return redirect()->route('admin') -> with('success','Đăng nhập thành công');
	        }
	        else{
	        	// echo 'đăng nhập thất bại';
	        	dd($info);
	            return back();
	        }
		}
		public function logout_admin(){
			Auth::guard('admin') -> logout();
			return redirect()->route('login');
		}
    }

 ?>
