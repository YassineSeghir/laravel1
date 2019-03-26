<?php

//*********Pages controller********************************************************************************************
Route::get('/', 'PagesController@showHome')
    ->name('home');
Route::get('/pages/cgv', 'PagesController@showCGV'
)->name('cgv');
Route::get('/pages/mentions', 'PagesController@showMentions')
    ->name('mentions');
Route::get('/pages/contact', 'PagesController@showContact')
    ->name('contact');


//*********Product Controller******************************************************************************************
Route::get('/catalog', 'ProductController@index')
    ->name('catalog');
Route::get('/product/{id}', 'ProductController@show')
    ->name('product');


//*********Basket Controller*******************************************************************************************
Route::get('delpanier/{id}', 'BasketController@destroyPanier')
    ->name('basketSupp');
Route::get('panier', 'BasketController@showPanier')
    ->name('basket');
Route::put('panier', 'BasketController@addPanier')
    ->name('basketAdd');
Route::post('panier', 'BasketController@emptyPanier')
    ->name('basketFree');



//*********Customer Controller*****************************************************************************************
//Route::get('/customer', 'CustomerController@index')
//    ->name('customerList');
//Route::get('/customer/create', 'CustomerController@create');
//Route::post('/customer', 'CustomerController@store');
//Route::get('/customer/{id}', 'CustomerController@show');
//Route::get('/customer/{id}/edit', 'CustomerController@edit');
//Route::put('/customer/{id}', 'CustomerController@update');
//Route::delete('/customer/{id}', 'CustomerController@destroy');



//*********************************************************************************************************************
//*********************************************************************************************************************
//*********BACKOFFICE**************************************************************************************************

//Route::get('admin/login', 'SuperadminController@index')->name('admin');

//*********Admin Order Controller**************************************************************************************
Route::get('admin/order/list', 'AdminOrderController@index')
    ->name('admin_orderList');
Route::post('admin/order/{id}/edit', 'AdminOrderController@edit')
    ->name('admin_orderEdit');
Route::put('admin/order/{id}/edited', 'AdminOrderController@update')
    ->name('admin_orderEdited');
Route::delete('/admin/order/{id}/delete', 'AdminOrderController@destroy')
    ->name('admin_orderDestroy');


//*********Admin Product Controller************************************************************************************
Route::get('/admin/catalog', 'AdminProductController@index')
    ->name('admin_catalog');
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


//*********Admin Category Controller***********************************************************************************
Route::get('/admin/products/categories', 'AdminCategoryController@index')
    ->name('categories');
Route::post('/admin/products/categories', 'AdminCategoryController@store');
Route::get('/admin/products/categories/{id}', 'AdminCategoryController@edit');
Route::get('/admin/products/editCategories/{id}', 'AdminCategoryController@edit')
    ->name('edit');
Route::put('categories/{id}', 'AdminCategoryController@update')
    ->name('update');
Route::delete('/admin/products/categories/{id}', 'AdminCategoryController@destroy');


//*********Admin Customer Controller***********************************************************************************
Route::get('/admin/list', 'AdminCustomerController@index')
    ->name('admin_customerList');
//Route::get('/admin/customer/create', 'AdminCustomerController@create')
//    ->name('admin_customerCreate');
//Route::post('/admin/customer/created', 'AdminCustomerController@store')
//    ->name('admin_customerCreated');
Route::get('/admin/customer/{id}', 'AdminCustomerController@show')
    ->name('admin_customerShow');
//Route::get('/admin/customer/{id}/edit', 'AdminCustomerController@edit')
//    ->name('admin_customerEdit');
//Route::post('/admin/customer/{id}/edited', 'AdminCustomerController@update')
//    ->name('admin_customerEdited');
//Route::get('/admin/customer/{id}/delete', 'AdminCustomerController@destroy')
//    ->name('admin_customerDestroy');