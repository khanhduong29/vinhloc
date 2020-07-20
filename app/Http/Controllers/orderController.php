<?php 
	namespace App\Http\Controllers;
	use App\Http\Controllers;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Redirect;
	use App\Models\Categories;	use App\Models\Cart;
	use App\Models\Products;
	use App\Models\Config;
	use App\Models\customer;
	use App\Models\orders;
	use App\Models\order_detail;
	use App\Mail\OrderShipped;
	use Auth;
	use Mail;
	use Hash;
	use File;
	use Session;


	class orderController extends Controller{
		public function __construct(){
			$this->middleware(function($request,$next){
				view()->share([
		            'categories' => Categories::get(),
                	'config' => Config::all(),
		            'cart' => new cart()
		        ]);
		        return $next($request);
			});
		}

		public function checkout(Cart $cart){
			// dd($cart);
			return view('pages.client.checkout');
		}
		public function post_checkout(Request $request,Cart $cart){
			 $validate = $request->validate(
	            [
	                'first_name' => 'required',
	                'last_name' => 'required',
	                'phone' => 'required',
	                'address' => 'required',
	                'payment_method' => 'required',
	                'shipping_method' => 'required',
	            ],
	            [
	                'required' => ':attribute đang bỏ trống.',
	            ],
	            [
	                 'first_name' => 'First name',
	                 'last_name' => 'Last name',
	                 'phone' => 'Số điện thoại',
	                 'address' => 'Địa chỉ',
	                 'payment_method' => 'Phương thức thanh toán',
	                 'shipping_method' => 'Phương thức giao hàng',
	            ]
	        );
			$id_cus = Auth::guard('customer')->user()->id_cus;
			$request -> merge(['id_cus'=>Auth::guard('customer')->user()->id_cus]);
			$orders = orders::create([				
				'id_cus' => $id_cus,
				'address' => $request -> address,
				'note' => $request -> note,
				'payment_method' => $request -> payment_method,
				'shipping_method' => $request -> shipping_method,
				'total_amount' => $cart -> total_amount,
				'total_quantity' => $cart -> total_quantity,
				'status' => 0,
			]);
			$datas = [];
			foreach ($cart->items as $item) {
				$datas[] = [
					'id_ord' => $orders -> id_ord,
					'id_pro' => $item['id_pro'],
					'quantity' => $item['quantity'],
					'price' => $item['price'],
				];
			}
			if($datas){
				if(order_detail::insert($datas)){
					$cart->clear();
					return Redirect() -> route('history-checkout') -> with('success','Đặt hàng thành công');
				}else{
					$orders->delete();
					return Redirect() -> route('order-error') -> with('error','Đặt hàng thất bại');
				}
			}
			return Redirect() -> route('history-checkout') -> with('success','Đặt hàng thành công');
			
		}
		public function error(){
			return 'Thất bại';
		}
		public function history(){
			if(Auth::guard('customer')->check()){
				$orders = orders::where('id_cus',Auth::guard('customer')->user()->id_cus)
					->orderBy('created_at','desc')
					->get();
				return view('client.ordered',[
					'orders' => $orders,
				]);
			}else{
				return Redirect() -> route('login-cus');
			}
			
		}
		public function detail($id_ord){
			if(Auth::guard('customer')->check()){
				$orders = orders::where('id_ord', $id_ord)->first();
				// dd($orders);
				return view('client.order-detail',[
					'orders' => $orders,
				]);
			}else{
				return Redirect() -> route('login-cus');
			}
		}
	}

 ?>