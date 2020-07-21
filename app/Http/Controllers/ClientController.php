<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\products;
use App\Models\brand;
use App\Models\blog;
use App\Models\banner;
use App\Models\Cart;
use App\Models\Config;
use App\Models\orders;
use App\Models\order_detail;
use App\Models\construction;
use App\Models\productAttribute;
use File;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller {

    public function __construct(){
        $this->middleware(function($request,$next){
            view()->share([
                'categories' => Categories::all(),
                'banners' => banner::all(),
                'brand' => brand::all(),
                'config' => Config::all(),
                'cart' => new cart()
            ]);
            return $next($request);
        });
    }
    public function home(Products $pro) {
        $products = products::all();
        $blog = blog::all();
        $con = construction::all();
        $productNew = $pro->proNew();
        // dd($productNew);
        return view('pages.client.home',compact('products','blog','con','productNew'));
    }
    public function about() {
        return view('pages.client.about');
    }
    public function product(Request $request) {
        $products = products::where('status',1)->paginate(8);
        return view('pages.client.product',compact('products'));
    }
    public function service() {
        return view('pages.client.service');
    }
    public function construction() {
        $con = construction::all();
        return view('pages.client.construction',compact('con'));
    }
    public function contact() {
        return view('pages.client.contact');
    }
    public function my_account() {
        if(Auth::guard('customer')->check()){
            $orders = orders::where('id_cus',Auth::guard('customer')->user()->id)
                ->orderBy('created_at','desc')
                ->get();
            return view('pages.client.my-account',[
                'orders' => $orders,
            ]);
        }
        else{
            return redirect() -> route('login_user');
        }
    }
    public function product_detail($slug) {
        $pro = products::where('slug',$slug)->first();
        $productAttributes = $pro->productAttr()->get()->all();
        // danh sach product attribute cua san pham khong bi trung lap
        $uniqueAttributes = [];
        // danh sach attribute_id cua san pham khong bi trung lap
        $uniqueAttributeIds = [];
        foreach($productAttributes as $pa) {
            if(!in_array($pa->attribute_id, $uniqueAttributeIds)) {
                array_push($uniqueAttributes, $pa);
                array_push($uniqueAttributeIds, $pa->attribute_id);
            }
        }
        $productAttributeValues = array_map(function($var) {
            return $var->attribute_value;
        },  $productAttributes);
        return view('pages.client.product-detail',compact('pro', 'uniqueAttributes', 'productAttributeValues'));
    }
    public function blog_detail($slug) {
        $detail = blog::where('slug',$slug)->first();
        $blg = blog::all();
        return view('pages.client.blog-detail',compact('detail','blg'));
    }
    public function cate_product($slug) {
        $cate = categories::where('slug',$slug)->first() ;
        $products = products::where('cate_id',$cate['id'])->paginate(4);
        return view('pages.client.cate-product',compact('products'));
    }
    public function getsearch(Request $req){
        $products =  products::where('name','like','%'.$req->key.'%')->orWhere('price',$req->key)->get();
        return view('pages.client.search',compact('products'));
    }
}
