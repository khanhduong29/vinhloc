<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => '/'],function(){

	Route::get('/','ClientController@home')->name('home');
    Route::get('about','ClientController@about')->name('about');
    Route::get('product','ClientController@product')->name('product');
    Route::get('service','ClientController@service')->name('service');
    Route::get('construction','ClientController@construction')->name('construction');
    Route::get('contact','ClientController@contact')->name('contact');
    Route::get('product-detail','ClientController@product_detail')->name('product-detail');
    Route::get('blog-detail','ClientController@blog_detail')->name('blog-detail');
    Route::get('cate-product','ClientController@cate_product')->name('cate-product');
});

Route::group(['prefix' => 'admin','namespace'=>'admin'],function(){
	// giao diện quản trị
	Route::get('','adminController@admin')->name('admin');

	include 'admin/category.php';
    include 'admin/products.php';
});

Route::group(['prefix' => 'cart'], function () {
    Route::get('cart','CartController@cart')->name('cart');
    Route::get('checkout','CartController@checkout')->name('checkout');
});

Route::group(['prefix' => 'account'], function () {
    Route::get('register','LoginController@register')->name('register');
    Route::post('register','LoginController@postRegister')->name('postRegister');

    Route::get('login','LoginController@login')->name('login');
    Route::post('login','LoginController@postLogin')->name('postLogin');

    Route::get('log-out','LoginController@postLogOut')->name('log-out');

});

