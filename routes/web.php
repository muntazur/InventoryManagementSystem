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

Route::get('logout','UserController@logout');


