<?php
Route::group(['prefix' => 'customer', 'middleware'=>'hasPermission:2'],function(){
		//danh sách danh mục
		Route::get('/','customerController@list_cus')-> name('list-customer');
		// thêm danh mục
		// Route::get('/addproducts','productsController@create') -> name('add');
		// Route::post('/addproducts','productsController@store') -> name('add-products');

		// sửa danh mục
		// Route::get('editproducts/{id}','productsController@edit') -> name('edit');
		// Route::post('editproducts/{id}','productsController@update') -> name('edit-cus');

		// xóa danh mục
		// Route::get('deleteproducts/{id}','productsController@delete')->name('delete-cus');
	});
 ?>
