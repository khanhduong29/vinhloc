<?php
	namespace App\Http\Controllers\admin;

	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\Models\products;
    use App\Models\categories;
    use App\Models\attribute;
    use App\Models\attributeValue;
	use File;

	class productsController extends Controller {

		//danh sách dữ liệu
		public function list_pro(){
            $products = products::all();
        	return view('pages.admin.products.list', [
                'products' => $products
        	]);
		}


		// thêm dữ liệu
		public function create(){
            $categories = categories::all();
            $attributes = attribute::all();
			return view('pages.admin.products.add',[
				'categories' => $categories,
                'attributes' => $attributes
			]);
		}
		public function store(Request $request,products $products){
			$model = $products->add();
	        if ($products) {
	            return redirect()->route('list-products') -> with('success','Thêm mới thành công');
	        }else{
	            return redirect()->back()->with('error','Add products fail' );
	        }
		}
		// sửa dữ liệu
		public function edit($id){
			$products = products::where('id', $id)->first();
			$categories = categories::all();
        	return view('pages.admin.products.edit',[
        		'products' => $products,
        		'categories' => $categories,
        	]);
		}
		public function update(request $request,products $id){
			$updated = $id->update_data($id);
	       	if ($id) {
	        	return redirect()->route('list-products') -> with('success','Sửa thành công');
	    	} else {
	     		return redirect()->back()->with('error','Update category fail');
	    	}
		}

		// xóa dữ liệu
		public function delete(products $id)
	    {
	        $delete = $id->delete();
	        if ($id) {
	           return redirect()->route('list-products') -> with('success','Xóa thành công');
	       } else {
	        return redirect()->back()->with('error','Delete category fail');
	       }
	    }
	}



 ?>
