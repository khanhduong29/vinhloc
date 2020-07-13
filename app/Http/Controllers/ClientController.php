<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\products;
use App\Models\blog;
use App\Models\banner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\View;

class ClientController extends Controller {

    public function __construct(){
        $banner = new banner;
        $banners = $banner -> get_list();
        // dd($banners);
        $this->middleware(function($request,$next){
            view()->share([
                'categories' => Categories::all(),
                'banners' => banner::all(),
                // 'banners' => $banners,
            ]);
            return $next($request);
        });
    }
    public function home() {
        $products = products::all();
        $blog = blog::first();

        $blg = blog::all();
        return view('pages.client.home',compact('products','blog','blg'));

        return view('pages.client.home',compact('products','blog'));
    }
    public function about() {
        return view('pages.client.about');
    }
    public function product() {
        $products = products::where('status',1)->paginate(4);
        return view('pages.client.product',compact('products'));
    }
    public function service() {
        return view('pages.client.service');
    }
    public function construction() {
        return view('pages.client.construction');
    }
    public function contact() {
        return view('pages.client.contact');
    }
    public function product_detail($slug) {
        $pro = products::where('slug',$slug)->first();
        return view::make('pages.client.product-detail',compact('pro'));
    }
    public function blog_detail($slug) {
        $detail = blog::where('slug',$slug)->first();
        $blg = blog::all();
        return view('pages.client.blog-detail',compact('detail','blg'));
    }
    public function cate_product() {
        return view('pages.client.cate-product');
    }
    public function getsearch(Request $req){
        $products =  products::where('name','like','%'.$req->key.'%')->orWhere('price',$req->key)->get();
        return view('pages.client.search',compact('products'));
    }
}
