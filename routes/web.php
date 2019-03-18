<?php

Route::get('/', 'PagesController@showHome');
Route::get('/pages/cgv', 'PagesController@showCGV');
Route::get('/pages/mentions', 'PagesController@showMentions');
Route::get('/pages/contact', 'PagesController@showContact');

//Route::get('/panier', 'BasketController@showPanier');

//Route::get('/admin', 'AdminController@index');

Route::get('product/catalog', 'ProductController@index');
Route::get('/product/create', 'ProductController@create');
Route::post('/product/created', 'ProductController@store');
Route::get('/product/{id}', 'ProductController@show');
Route::get('/product/{id}/edit', 'ProductController@edit');
Route::post('/product/{id}/edited', 'ProductController@update');
Route::get('/product/{id}/delete', 'ProductController@destroy');

//Route::get('/customer', 'CustomerController@index');
//Route::get('/customer/create', 'CustomerController@create');
//Route::post('/customer', 'CustomerController@store');
//Route::get('/customer/{id}', 'CustomerController@show');
//Route::get('/customer/{id}/edit', 'CustomerController@edit');
//Route::put('/customer/{id}', 'CustomerController@update');
//Route::delete('/customer/{id}', 'CustomerController@destroy');



