<?php

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Routes Products
|--------------------------------------------------------------------------
|
*/

Route::resource('products', 'ProductController');

Route::get('formproduct', 'ProductController@formproduct');

Route::post('store', 'ProductController@store');

Route::delete('product/{id}', 'ProductController@destroy');

Route::get('updateproduct/{id}', 'ProductController@updateproduct');

Route::put('products/{id}', 'ProductController@update');

/*
|--------------------------------------------------------------------------
| Routes Customers
|--------------------------------------------------------------------------
|
*/

Route::resource('customers', 'CustomerController');

Route::get('formcustomer', 'CustomerController@formcustomer');

Route::post('storecustomer', 'CustomerController@store')->name('customer.store');

Route::delete('customers/{id}', 'CustomerController@destroy');

Route::get('updatecustomer/{id}', 'CustomerController@updatecustomer');

Route::put('customers/{id}', 'CustomerController@update');

/*
|--------------------------------------------------------------------------
| Routes Customers
|--------------------------------------------------------------------------
|
*/

Route::get('formorder', 'OrderController@formorder');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Routes Orders
|--------------------------------------------------------------------------
|
*/

Route::resource('orders', 'OrderController');

Route::get('formorder', 'OrderController@formorder');