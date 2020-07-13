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
    Route::get('product-detail/{slug}','ClientController@product_detail')->name('product-detail');
    Route::get('blog-detail/{slug}','ClientController@blog_detail')->name('blog-detail');
    Route::get('cate-product/{slug}','ClientController@cate_product')->name('cate-product');
    Route::get('search','ClientController@getsearch')->name('search');
});

Route::group(['prefix' => 'admin','namespace'=>'admin','middleware'=>'auth'],function(){


    // giao diện quản trị
    Route::get('/','adminController@admin')->name('admin');

    include 'admin/category.php';

    include 'admin/admin.php';
    include 'admin/category.php';
    include 'admin/products.php';
    include 'admin/customer.php';
    include 'admin/attribute.php';
    include 'admin/attr_values.php';
    include 'admin/attr_product.php';
    include 'admin/blog.php';
    include 'admin/brand.php';
    include 'admin/banner.php';
});

// giao diện login
Route::get('admin/login','admin\adminController@login_admin') -> name('login');
Route::post('admin/login','admin\adminController@postLogin_admin') -> name('postLogin');
Route::get('admin/logout','admin\adminController@logout_admin') -> name('logout');


Route::group(['prefix' => 'cart'], function () {
    Route::get('cart','CartController@cart')->name('cart');
    Route::get('checkout','CartController@checkout')->name('checkout');
});

Route::group(['prefix' => 'account'], function () {
    Route::get('register','LoginController@register')->name('register_user');
    Route::post('register','LoginController@postRegister')->name('postRegister');

    Route::get('login','LoginController@login')->name('login_user');
    Route::post('login','LoginController@postLogin')->name('postLogin_user');

    Route::get('log-out','LoginController@postLogOut')->name('log-out');
});
