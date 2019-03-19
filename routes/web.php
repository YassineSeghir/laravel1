<?php

Route::get('/', 'PagesController@showHome');
Route::get('/pages/cgv', 'PagesController@showCGV');
Route::get('/pages/mentions', 'PagesController@showMentions');
Route::get('/pages/contact', 'PagesController@showContact');

Route::get('/product/catalog', 'ProductController@index')
    ->name('productCatalog');
Route::get('/product/create', 'ProductController@create')
    ->name('create');
Route::post('/product/created', 'ProductController@store')
    ->name('created');
Route::get('/product/{id}', 'ProductController@show')
    ->name('productShow');
Route::get('/product/{id}/edit', 'ProductController@edit')
    ->name('edit');
Route::post('/product/{id}/edited', 'ProductController@update')
    ->name('edited');
Route::get('/product/{id}/delete', 'ProductController@destroy')
    ->name('destroy');

//Route::get('/panier', 'CartController@showPanier');

//Route::get('/customer', 'CustomerController@index');
//Route::get('/customer/create', 'CustomerController@create');
//Route::post('/customer', 'CustomerController@store');
//Route::get('/customer/{id}', 'CustomerController@show');
//Route::get('/customer/{id}/edit', 'CustomerController@edit');
//Route::put('/customer/{id}', 'CustomerController@update');
//Route::delete('/customer/{id}', 'CustomerController@destroy');

//
//BackOffice***************************************************************************
//Route::get('/admin', 'AdminController@index');
Route::get('/admin/product/catalog', 'AdminProductController@index')
    ->name('admin_productCatalog');
Route::get('/admin//product/create', 'AdminProductController@create')
    ->name('admin_productCreate');
Route::post('/admin/product/created', 'AdminProductController@store')
    ->name('admin_productCreated');
Route::get('/admin/product/{id}', 'AdminProductController@show')
    ->name('admin_productShow');
Route::get('/admin/product/{id}/edit', 'AdminProductController@edit')
    ->name('admin_productEdit');
Route::post('/admin/product/{id}/edited', 'AdminProductController@update')
    ->name('admin_productEdited');
Route::get('/admin/product/{id}/delete', 'AdminProductController@destroy')
    ->name('admin_productDestroy');

