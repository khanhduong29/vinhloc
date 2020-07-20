<?php
	namespace App\Http\Controllers\admin;

	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\Models\products;
    use App\Models\categories;
    use App\Models\attribute;
    use App\Models\attributeValue;
    use App\Models\productAttribute;
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
            $attrName = attribute::all();
            $where = attribute::select('id')->get()->toArray();
            $attrValue = attributeValue::where('attribute_id',$where)->get();
            $attributes = attribute::all();
			return view('pages.admin.products.add',[
				'categories' => $categories,
                'attributes' => $attributes,
                'attribute_name' => $attrName,
                'attrValue' => $attrValue,
			]);
		}
		public function store(Request $request,products $products){
            $products->add();
	        if ($products) {
	            return redirect()->route('list-products') -> with('message','Thêm mới thành công');
	        }else{
	            return redirect()->back()->with('message','Thêm mới thất bại' );
	        }
		}
		// sửa dữ liệu
		public function edit($id){
            $products = products::where('id', $id)->first();
            $productAttribute = productAttribute::where('products_id',$id);
            $categories = categories::all();
            $attributes = attribute::all();
            $attributeValues = $products->productAttr()->get()->all();
            $attributeValues = array_map(function($var) {
                return $var->attribute_value;
            },  $attributeValues);
        	return view('pages.admin.products.edit',[
        		'products' => $products,
                'categories' => $categories,
                'attributes' => $attributes,
                'attributeValues' => $attributeValues,
                'productAttribute' => $productAttribute
        	]);
		}
		public function update(request $request,products $id){
			$updated = $id->update_data($id);
	       	if ($id) {
	        	return redirect()->route('list-products') -> with('message','Sửa thành công');
	    	} else {
	     		return redirect()->back()->with('message','Sửa thất bại');
	    	}
		}

		// xóa dữ liệu
		public function delete(products $id,productAttribute $attr)
	    {
            $delete = $id->delete();
            productAttribute::where('products_id',$id->id)->delete();
	        if ($delete) {
	           return redirect()->route('list-products') -> with('message','Xóa thành công');
	       } else {
	        return redirect()->back()->with('message','Xóa không thành công');
	       }
        }
	}



 ?>
