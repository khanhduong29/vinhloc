<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Cart;
use App\Models\Products;

class CartController extends Controller
{
     public function __construct(){
        $this->middleware(function($request,$next){
            view()->share([
                'categories' => Categories::all(),
                'cart' => new cart()
            ]);
            return $next($request);
        });
    }

    public function add_cart($id,Cart $cart){
        $models = Products::where('id', $id)->first();

        if($models){
            $cart -> add($models);

            return redirect() -> route('cart') -> with('success','Thêm vào giỏ hàng thành công');
        }else{
            return redirect() -> back();
        }
    }

    public function cart() {
        return view('pages.client.cart',[
            'cart'=> new cart(),
        ]);
    }

    function delete_cart($id,Cart $cart){
        $cart -> delete($id);

        return redirect() -> back() -> with('success','Xóa thành công');
    }

    function update_cart($id,Cart $cart){
        $quantity = request()->quantity > 0 ? request()->quantity : 1;
        $cart -> update($id,$quantity);
        return redirect() -> route('cart') -> with('success','Update thành công');
    }
    function clear_cart(Cart $cart){
        $cart -> clear();
        return redirect() -> route('cart') -> with('success','Xóa thành công');
    }

    public function checkout() {
        return view('pages.client.checkout');
    }
    function post_checkout(Cart $cart,Request $request){
        $avatar = '';
        if($request -> has('file')){
            $file = $request -> file;
            $file -> move(base_path('public/Uploads/avatar'),$file -> getClientOriginalName());
            $avatar = $file -> getClientOriginalName();
        }
        // dd($request);
        $customer = customer::create([
            'first_name' => $request -> first_name,
            'last_name' => $request -> last_name,
            'avatar' => $avatar,
            'email' => $request -> email,
            'phone' => $request -> phone,
            'password' => $request -> password,
            'birthday' => $request -> birthday,
            'address' => $request -> address,
            'gender' => $request -> gender,
        ]);
        $orders = orders::create([
            // 'id_cus','address','note','total_amount','total_quantity','status'
            'id_cus' => $customer -> id_cus,
            'address' => $request -> address,
            'note' => $request -> note,
            'total_amount' => $cart -> total_amount(),
            'total_quantity' => $cart -> total_quantity(),
            'status' => 0,
            
        ]);
        foreach ($cart -> items as $item) {
            order_detail::create([
                // 'id_ord','id','quantity','price','sale_price'
                'id' => $item['id'],
                'id_ord' => $order -> id_ord,
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'sale_price' => $item['sale_price'],

            ]);
        }
        Session(['cart' => []]);
        return Redirect() -> route('shop') -> with('success','Đặt hàng thành công');

    }
}
