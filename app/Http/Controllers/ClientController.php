<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\products;

class ClientController extends Controller {

    public function __construct(){
        $this->middleware(function($request,$next){
            view()->share([
                'categories' => Categories::where('status',1) -> get(),
                'products' => products::where('status',1)->paginate(4),
              
                // 'cart' => new cart()
            ]);
            return $next($request);
        });
    }
    public function home() {
        return view('pages.client.home');
    }
    public function about() {
        return view('pages.client.about');
    }
    public function product() {
        return view('pages.client.product');
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
    public function product_detail() {
        return view('pages.client.product-detail');
    }
    public function blog_detail() {
        return view('pages.client.blog-detail');
    }
    public function cate_product() {
        return view('pages.client.cate-product');
    }


}
