<?php
Route::group(['prefix' => 'consultant'],function(){
		//danh sách
		Route::get('/','consultantController@list_con')-> name('list-consultant');
		// thêm
		Route::get('/add-consultant','consultantController@create') -> name('add');
		Route::post('/add-consultant','consultantController@store') -> name('add-consultant');

		// sửa
		// Route::get('edit-consultant/{id}','consultantController@list_con') -> name('edit');
		Route::post('edit-consultant/{id}','consultantController@update') -> name('edit-consultant');
	});
 ?>
