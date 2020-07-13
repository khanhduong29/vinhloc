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
		public function list_cus(){
			$customer = Customer::all();
        	return view('pages.admin.customer.list',[
        		'customer' => $customer
        	]);
		}


		// thêm dữ liệu
    }

 ?>
