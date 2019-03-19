<?php

Route::get('/pages/cgv', 'PagesController@showCGV')->name('cgv');
Route::get('/pages/mentions', 'PagesController@showMentions')->name('mentions');
Route::get('/pages/contact', 'PagesController@showContact');
Route::get('/', 'PagesController@showHome')->name('contact');


Route::get('panier', 'BasketController@showPanier')->name('basket');

Route::get('admin/login', 'SuperadminController@index')->name('admin');
Route::get('/admin/administration', 'CatalogController@showCatalog')->name('back');
Route::get('admin/productcreate', 'SuperadminController@create')->name('create');
Route::post('admin/result', 'SuperadminController@store');

Route::get('admin/{id}/produpdate', 'SuperadminController@edit');
Route::post('admin/{id}/resultupdate', 'SuperadminController@update');

Route::get('admin/productdestroy', 'SuperadminController@destroy')->name('destroy');
Route::post('admin/productdelete', 'SuperadminController@delete')->name('delete');


Route::get('/catalog', 'ProductController@index')->name('catalog');
Route::get('/product/create', 'ProductController@create');
Route::post('/product', 'ProductController@store');
Route::get('/product/{id}', 'ProductController@show')->name('prod');
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



