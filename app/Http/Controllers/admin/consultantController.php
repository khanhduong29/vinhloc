<?php
	namespace App\Http\Controllers\admin;

	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\Models\consultant;
	use File;

	class consultantController extends Controller {

    	public function __construct(){
	        $this->middleware(function($request,$next){
	            view()->share([
	                'count_consul' => count(Consultant::where('status',0)->get()),
	            ]);
	            return $next($request);
	        });
	    }
		//danh sách dữ liệu
		public function list_con(){
			$consultant = consultant::all();
        	return view('pages.admin.consultant.list', [
        		'consultant' => $consultant
        	]);
		}


		// thêm dữ liệu
		// public function create(){
		// 	return view('pages.admin.consultant.list');
		// }
		public function store(Request $request,consultant $consultant){
			dd('gg');
			$model = $consultant->add();
	        if ($consultant) {
	            return redirect()->route('list-consultant') -> with('message','Thêm mới thành công');
	        }else{
	            return redirect()->back()->with('message','Thêm thất bại' );
	        }
		}
		// sửa dữ liệu
		// public function edit($id){
		// 	$consultant = consultant::where('id', $id)->first();
  //       	return view('pages.admin.consultant.edit',[
  //       		'consultant' => $consultant,
  //       	]);
		// }
		public function update(request $request,consultant $id){
			dd('fff');
			$updated = $id->update_data();
	       	if ($id) {
	        	return redirect()->route('list-consultant') -> with('message','Sửa thành công');
	    	} else {
	     		return redirect()->back()->with('message','Sửa thất bại');
	    	}
		}
	}



 ?>
