<?php

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

Route::get('/','UserController@home');

Route::post('login',
 [
     'uses' => 'UserController@login'
     
 ]
);

Route::post('register',
 [
     'uses' => 'UserController@register'
     
 ]
);

Route::post('/brand',
 [  
 	'as' => 'brand',
	'uses' => 'InventoryController@storeBrand'
 ]
);

Route::post('/category',
  
  [
      'as' => 'category',
      'uses'=>'InventoryController@storeCategory'
  ]

);

Route::post('/product',

	[
		'as' => 'product',
		'uses'=> 'InventoryController@storeProduct'
	]
);

// managing route

Route::get('/manage_brand',

  [
      'as' => 'manage',
      'uses' => 'ManagementController@manageBrand'
  ]

);

Route::get('/manage_category',

  [
      'as' => 'manage',
      'uses' => 'ManagementController@manageCategory'
  ]

);

Route::get('/manage_product',

  [
      'as' => 'manage',
      'uses' => 'ManagementController@manageProduct'
  ]

);


Route::get('logout','UserController@logout');


