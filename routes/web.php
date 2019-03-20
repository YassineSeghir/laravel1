<?php

Route::get('/', 'PagesController@showHome')
    ->name('home');
Route::get('/pages/cgv', 'PagesController@showCGV'
)->name('cgv');
Route::get('/pages/mentions', 'PagesController@showMentions')
    ->name('mentions');
Route::get('/pages/contact', 'PagesController@showContact')
    ->name('home');


Route::get('/catalog', 'ProductController@index')
    ->name('catalog');
Route::post('/product', 'ProductController@store')
    ->name('basketStore');
Route::get('/product/{id}', 'ProductController@show')
    ->name('prod');


Route::get('panier', 'BasketController@showPanier')
    ->name('basket');
Route::post('panier', 'BasketController@addPanier')
    ->name('basketAdd');

//Route::get('/customer', 'CustomerController@index');
//Route::get('/customer/create', 'CustomerController@create');
//Route::post('/customer', 'CustomerController@store');
//Route::get('/customer/{id}', 'CustomerController@show');
//Route::get('/customer/{id}/edit', 'CustomerController@edit');
//Route::put('/customer/{id}', 'CustomerController@update');
//Route::delete('/customer/{id}', 'CustomerController@destroy');


//*********************************************************************************************************************
//********BACKOFFICE***************************************************************************************************
//*********************************************************************************************************************
Route::get('admin/login', 'SuperadminController@index')
    ->name('admin');

Route::get('/admin/administration', 'CatalogController@showCatalog')
    ->name('back');
Route::get('admin/productcreate', 'SuperadminController@create')
    ->name('create');
Route::post('admin/result', 'SuperadminController@store');

Route::get('admin/{id}/produpdate', 'SuperadminController@edit');
Route::post('admin/{id}/resultupdate', 'SuperadminController@update');

Route::get('admin/productdestroy', 'SuperadminController@destroy')
    ->name('destroy');
Route::post('admin/productdelete', 'SuperadminController@delete')
    ->name('delete');


Route::get('/admin/catalog', 'AdminProductController@index')
    ->name('admin_productCatalog');
Route::get('/admin/product/create', 'AdminProductController@create')
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