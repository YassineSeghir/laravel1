<?php

Route::get('/', 'PagesController@showHome');
Route::get('/pages/cgv', 'PagesController@showCGV');
Route::get('/pages/mentions', 'PagesController@showMentions');
Route::get('/pages/contact', 'PagesController@showContact');

//Route::get('/panier', 'BasketController@showPanier');

//Route::get('/admin', 'AdminController@index');

Route::get('/product/catalog', 'ProductController@index')
    ->name('catalogue');
Route::get('/product/create', 'ProductController@create')
    ->name('create');
Route::post('/product/created', 'ProductController@store')
    ->name('created');
Route::get('/product/{id}', 'ProductController@show')
    ->name('show');
Route::get('/product/{id}/edit', 'ProductController@edit')
    ->name('edit');
Route::post('/product/{id}/edited', 'ProductController@update')
    ->name('edited');
Route::get('/product/{id}/delete', 'ProductController@destroy')
    ->name('destroy');

//Route::get('/customer', 'CustomerController@index');
//Route::get('/customer/create', 'CustomerController@create');
//Route::post('/customer', 'CustomerController@store');
//Route::get('/customer/{id}', 'CustomerController@show');
//Route::get('/customer/{id}/edit', 'CustomerController@edit');
//Route::put('/customer/{id}', 'CustomerController@update');
//Route::delete('/customer/{id}', 'CustomerController@destroy');


//Route::get('/admin/product/catalog', 'AdminProductController@index')->name('admin_catalogue');
//Route::get('/admin//product/create', 'AdminProductController@create')->name('admin_create');
//Route::post('/admin/product/created', 'AdminProductController@store')->name('admin_created');
//Route::get('/admin/product/{id}', 'AdminProductController@show')->name('admin_show');
//Route::get('/admin/product/{id}/edit', 'AdminProductController@edit')->name('admin_edit');
//Route::post('/admin/product/{id}/edited', 'AdminProductController@update')->name('admin_edited');
//Route::get('/admin/product/{id}/delete', 'AdminProductController@destroy')->name('admin_destroy');
