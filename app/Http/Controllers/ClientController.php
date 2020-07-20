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
                'cart' => new cart()
            ]);
            return $next($request);
        });
    }
    public function home() {
        $products = products::all();
        $blog = blog::all();
        $con = construction::all();
        return view('pages.client.home',compact('products','blog','con'));
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
    public function product_detail($slug) {
        $pro = products::where('slug',$slug)->first();
        $attrProduct = productAttribute::where('products_id',$pro->id)->get();
        return view('pages.client.product-detail',compact('pro','attrProduct'));
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
