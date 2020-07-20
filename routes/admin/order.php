<?php 

	Route::get('/order-cus','orderAdminController@list_order') -> name('order-customer');
	Route::get('/order-details/{id}','orderAdminController@detail') -> name('ord-detail');
	Route::get('confirm-order/{id}','orderAdminController@confirm_order')->name('confirm-order');
	Route::get('complete-order/{id}','orderAdminController@complete_order')->name('complete-order');

 ?>