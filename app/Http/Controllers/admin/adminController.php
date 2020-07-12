<?php

    namespace App\Http\Controllers\admin;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\User;
    use Auth;
	use Hash;

    class adminController extends Controller {
        public function admin() {
            return view('pages.admin.index');
        }

        //danh sách dữ liệu
		public function list_ad(){
			$User=User::all();
        	return view('pages.admin.admin.list', [
        		'admin' => $User
        	]);
		}


		// thêm dữ liệu
		public function create(){
			return view('pages.admin.admin.add');
		}
		public function store(Request $request,User $User){
            $roles = [];
            if ($request->product) {
                array_push($roles, 5);
            }
            if ($request->category) {
                array_push($roles, 4);
            }
            if ($request->customer) {
                array_push($roles, 3);
            }
            if ($request->user) {
                array_push($roles, 2);
            }
            if ($request->full) {
                array_push($roles, 1);
            }
            $request->role = implode(",",$roles);;
            $model = $User->add();
	        if ($User) {
	            return redirect()->route('list-admin') -> with('success','Thêm mới thành công');
	        }else{
	            return redirect()->back()->with('error','Add admin fail' );
	        }
		}
		// sửa dữ liệu
		public function edit($id){
			$User = User::where('id', $id)->first();
        	return view('pages.admin.admin.edit',[
        		'admin' => $User
        	]);
		}
		public function update(request $request,User $id){
			$updated = $id->update_data($id);
	       	if ($id) {
	        	return redirect()->route('list-admin') -> with('success','Sửa thành công');
	    	} else {
	     		return redirect()->back()->with('error','Update category fail');
	    	}
		}

		// xóa dữ liệu
		public function delete(User $id)
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
		public function postLogin_admin(Request $request,User $user){
			if($user->login()) {
	            return redirect()->route('admin') -> with('success','Thêm mới thành công');
	        } else {
	            return redirect()->back()->with('error','Add products ' .request()->cate_name. ' fail' );
	        }
		}
		public function logout_admin(){
			Auth::logout();
			return redirect()->route('login');
		}
    }

 ?>
