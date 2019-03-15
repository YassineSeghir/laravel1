<?php

Route::get('/', 'PagesController@showHome');


Route::get('/pages/cgv', 'PagesController@showCGV');
Route::get('/pages/mentions', 'PagesController@showMentions');
Route::get('/pages/contact', 'PagesController@showContact');


Route::get('/panier', 'BasketController@showPanier');


Route::get('/catalog', 'CatalogController@showCatalog');

Route::post('/catalog', 'ProductController@store');


//ADMINISTRATION

Route::get('/login', 'SuperadminController@showAdmin');

// Voir le catalogue dans l'administration :
Route::get('/admin/administration', 'CatalogController@showCatalog')->name('back');
Route::get('/admin/product/{id}', 'ProductController@show');


//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!Passer dans l'admin :
Route::get('/product/create', 'ProductController@create');
//PRODUITS
Route::get('/product/{id}', 'ProductController@show');

//SUPPRIMER UN PRODUIT delete = post
Route::delete('/admin/product/{id}', 'ProductController@destroy')->name('destroy');

//EDITER UN PRODUIT
Route::get('/admin/edit', 'ProductController@edit');


Route::put('/product/{id}', 'ProductController@update');

Route::get('/customer', 'CustomerController@index');
Route::get('/customer/create', 'CustomerController@create');
Route::post('/customer', 'CustomerController@store');
Route::get('/customer/{id}', 'CustomerController@show');
Route::get('/customer/{id}/edit', 'CustomerController@edit');
Route::put('/customer/{id}', 'CustomerController@update');
Route::delete('/customer/{id}', 'CustomerController@destroy');



