<?php

	Route::group(['prefix' => 'admin', 'middleware'=>'hasPermission:1'],function(){
		//danh sách admin
		Route::get('/','adminController@list_ad') -> name('list-admin');
		// thêm admin
		Route::get('/addadmin','adminController@create') -> name('add');
		Route::post('/addadmin','adminController@store') -> name('add-admin');

		// sửa admin
		Route::get('editadmin/{id}','adminController@edit') -> name('edit');
		Route::post('editadmin/{id}','adminController@update') -> name('edit-admin');

		// xóa admin
		Route::get('deleteadmin/{id}','adminController@delete')->name('deletead');
	});
 ?>
