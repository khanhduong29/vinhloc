<?php 

	Route::group(['prefix' => 'category'],function(){
		//danh sách danh mục
		Route::get('/','categoryController@list_cat') -> name('list-category');
		// thêm danh mục
		Route::get('/addCategory','categoryController@create') -> name('add');
		Route::post('/addCategory','categoryController@store') -> name('add-category');

		// sửa danh mục
		Route::get('editCategory/{id_cat}','categoryController@edit') -> name('edit');
		Route::post('editCategory/{id_cat}','categoryController@update') -> name('edit-category');

		// xóa danh mục
		Route::get('deleteCategory','categoryController@deleteCat')->name('deleteCat');
	});
 ?>