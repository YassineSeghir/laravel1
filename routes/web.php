<?php

Route::get('/pages/cgv', 'PagesController@showCGV');
Route::get('/pages/mentions', 'PagesController@showMentions');
Route::get('/pages/contact', 'PagesController@showContact');
Route::get('/', 'PagesController@showHome');


Route::get('panier', 'BasketController@showPanier');

Route::get('admin/login', 'SuperadminController@index');

Route::get('admin/productcreate', 'SuperadminController@create');
Route::post('admin/result', 'SuperadminController@store');

Route::get('admin/{id}/produpdate', 'SuperadminController@edit');
Route::post('admin/{id}/resultupdate', 'SuperadminController@update');

Route::get('admin/productdestroy', 'SuperadminController@destroy');
Route::post('admin/productdelete', 'SuperadminController@delete')->name('yes');


Route::get('/catalog', 'ProductController@index');
Route::get('/product/create', 'ProductController@create');
Route::post('/product', 'ProductController@store');
Route::get('/product/{id}', 'ProductController@show');
Route::get('/product/{id}/edit', 'ProductController@edit');
Route::put('/product/{id}', 'ProductController@update');
Route::delete('/product/{id}', 'ProductController@destroy');


Route::get('/customer', 'CustomerController@index');
Route::get('/customer/create', 'CustomerController@create');
Route::post('/customer', 'CustomerController@store');
Route::get('/customer/{id}', 'CustomerController@show');
Route::get('/customer/{id}/edit', 'CustomerController@edit');
Route::put('/customer/{id}', 'CustomerController@update');
Route::delete('/customer/{id}', 'CustomerController@destroy');



