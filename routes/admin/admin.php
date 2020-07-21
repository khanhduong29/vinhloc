<?php

	Route::group(['prefix' => 'admin', 'middleware'=>'hasPermission:1'],function(){
		//danh sách admin
		Route::get('/','adminController@list_ad') -> name('list-admin');

		Route::get('edit-profile/{id}','adminController@edit_profile')->name('edit-profile');
		Route::post('edit-profile/{id}','adminController@update_profile')->name('edit-profile');
		// thêm admin
		Route::get('/add-admin','adminController@create') -> name('add');
		Route::post('/add-admin','adminController@store') -> name('add-admin');

		// sửa admin
		Route::get('edit-admin/{id}','adminController@edit') -> name('edit');
		Route::post('edit-admin/{id}','adminController@update') -> name('edit-admin');

		// xóa admin
		Route::get('delete-admin/{id}','adminController@delete')->name('deletead');
	});
 ?>
