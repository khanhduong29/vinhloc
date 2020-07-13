<?php

    namespace App\Http\Controllers\admin;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\User;
    use App\Models\Customer;
    use Auth;
	use Hash;

    class customerController extends Controller {

        //danh sách dữ liệu
		public function list_ad(){
			$customer = Customer::all();
        	return view('pages.admin.customer.list',compact('customer'));
		}


		// thêm dữ liệu
    }

 ?>
