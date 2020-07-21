<?php

    namespace App\Http\Controllers\admin;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\User;
    use App\Models\Customer;
    use App\Models\Orders;
    use Illuminate\Support\Facades\Session;
    use Auth;
	use Hash;

    class adminController extends Controller {
        public function admin(Customer $cus, Orders $ord) {
        	$countCus = $cus->countAll();
        	$countOrd = $ord->countAll();
        	$countOrdSuc = $ord->countSuc();
        	$countOrdNew = $ord->countNew();
            return view('pages.admin.index',compact('countCus','countOrd','countOrdSuc','countOrdNew'));
        }

        //danh sách dữ liệu
		public function list_ad(){
			$User=User::all();
        	return view('pages.admin.admin.list', [
        		'admin' => $User
        	]);
		}

		public function ad_detail(){
        	return view('pages.admin.admin.admin-detail');
		}
		// thêm dữ liệu
		public function create(){
			return view('pages.admin.admin.add');
		}
		public function store(Request $request,User $User){
            $model = $User->add();
	        if ($User) {
	            return redirect()->route('list-admin') -> with('message','Thêm mới thành công');
	        }else{
	            return redirect()->back()->with('message','Thêm mới thất bại' );
	        }
		}
		// sửa dữ liệu
		public function edit($id){
			$User = User::where('id', $id)->first();
			$roles = $User->role;
			$arr_role = explode(",",$roles);
        	return view('pages.admin.admin.edit',[
        		'admin' => $User,
        		'arr_role' => $arr_role,
        	]);
		}
		public function update(request $request,User $id){
			$updated = $id->update_data($id);
	       	if ($id) {
	        	return redirect()->route('list-admin')->with('message','Sửa thành công');
	    	} else {
                Session::flash('message', "Sửa không thành công");
	     		return redirect()->back()->withInput();
	    	}
		}

		// xóa dữ liệu
		public function delete(User $id)
	    {
	        $delete = $id->delete();
	        if ($id) {
	           return redirect()->route('list-admin') -> with('message','Xóa thành công');
	       } else {
	        return redirect()->back()->with('message','Xóa thất bại');
	       }
	    }
	    function login_admin(){
			return view('pages.admin.login',[
			]);
		}
		public function postLogin_admin(Request $request,User $user){
			if($user->login()) {
	            return redirect()->route('admin') -> with('message','Đăng nhập thành công');
	        } else {
	            return redirect()->back()->with('message','Đăng nhập thất bại' );
	        }
		}
		public function logout_admin(){
			Auth::logout();
			return redirect()->route('login');
		}
		// public function edit($id)
		// {
		// 	if (Auth::user()->level_id == 0 && Auth::user()->id != $id) {
		// 		$user = User::find($id);
		// 		if ($user->username != 'administrator') {
		// 			$level = LevelAdmin::All();
		// 			return view('admin.administrator.edit',[
		// 				'user' => $user,
		// 				'level' => $level
		// 			]);
		// 		} else {
		// 			return redirect()->route('administrator');
		// 		}
				
		// 	} else {
		// 		return redirect()->route('administrator');
		// 	}
		// }
		// public function update($id,Request $req)
		// {
		// 	User::find($id)->update([
		// 		'level_id' => $req->level
		// 	]);
		// 	return redirect()->route('administrator');
		// }
		public function edit_profile($id){	
			return view('pages.admin.admin.admin-detail');
		}
		public function update_profile($id, Request $req){
			$this->validate($req,[
				'name'=>'required',
				'email'=>'required|email|unique:users,email,'.$id,
				'password'=>'required|min:8',
				'conf_password'=>'required|same:password',
			],[
				'name.required'=>'Họ tên không được để trống',
				'email.required'=>'Email không được để trống',
				'email.email'=>'Email không đúng định dạng',
				'email.unique'=>'Email đã tồn tại',
				'password.required'=>'Yêu cầu nhập mật khẩu',
				'password.min'=>'Mật khẩu ít nhất 8	ký tự',
				'conf_password.required'=>'Yêu cầu xác nhận mật khẩu',
				'conf_password.same'=>'Mật khẩu không khớp'
			]);
			$password = bcrypt($req->password);
			$file_name = Auth::user()->avatar;
			if ($req->hasFile('upload_file')) {
				$file = $req->file('upload_file');
				$file_name = time().$file->getClientOriginalName();
				$file->move(public_path('uploads/avatar'),$file_name);
			}
			$req->merge(['avatar'=>$file_name]);
			User::find($id)->update([
				'name' => $req->name,
				'email' => $req->email,
				'avatar' => $file_name,
				'password' => $password,
			]);
			return redirect()->route('admin');
		}
    }

 ?>
