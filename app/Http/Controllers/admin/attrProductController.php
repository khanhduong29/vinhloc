<?php
	namespace App\Http\Controllers\admin;

	use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\productAttribute;
	use File;

	class attrProductController extends Controller {
		//danh sách dữ liệu
		public function list_attrProduct(){
            $attrProduct = productAttribute::all();
        	return view('pages.admin.attribute.attr_product.list', [
                'attrProduct' => $attrProduct
        	]);
		}
	}
 ?>
