<?php

Route::get('/', 'PagesController@showHome');

Route::get('/pages/cgv', 'PagesController@showCGV')->name('cgv');
Route::get('/pages/mentions', 'PagesController@showMentions')->name('mentions');
Route::get('/pages/contact', 'PagesController@showContact')->name('contact');


//---------------------------------------------------------------------------------------------------------
//Voir le catalogue front
Route::get('/catalog', 'CatalogController@showCatalog')->name('catalog');
//---------------------------------------------------------------------------------------------------------
// Voir un produit
Route::get('/product/{id}', 'ProductController@show')->name('prod');
//---------------------------------------------------------------------------------------------------------
Route::get('/panier', 'BasketController@showPanier')->name('basket');
//---------------------------------------------------------------------------------------------------------


//ADMINISTRATION
Route::get('/login', 'SuperadminController@showAdmin')->name('admin');
//---------------------------------------------------------------------------------------------------------
// Voir le catalogue dans l'administration :
Route::get('/admin/administration', 'CatalogController@showCatalog')->name('back');
//---------------------------------------------------------------------------------------------------------

//Voir UN PRODUIT
Route::get('/admin/seeProduct/{id}', 'BackProductController@show')->name('article');

//---------------------------------------------------------------------------------------------------------
//SUPPRIMER UN PRODUIT voir la vue en get
Route::get('/admin/delete/{id}', 'BackProductController@destroy')->name('destroy');
//SUPPRIMER UN PRODUIT delete = post
Route::delete('/admin/delete/{id}', 'BackProductController@delete')->name('delete');

//---------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------
// Insérer un article
Route::get('/admin/create', 'BackProductController@create')->name('create');
Route::post('/admin/create', 'BackProductController@store');


//---------------------------------------------------------------------------------------------------------
//EDITER UN PRODUIT
Route::get('/admin/edit', 'BackProductController@edit');
//---------------------------------------------------------------------------------------------------------






Route::get('/customer', 'CustomerController@index');
Route::get('/customer/create', 'CustomerController@create');
Route::post('/customer', 'CustomerController@store');
Route::get('/customer/{id}', 'CustomerController@show');
Route::get('/customer/{id}/edit', 'CustomerController@edit');
Route::put('/customer/{id}', 'CustomerController@update');
Route::delete('/customer/{id}', 'CustomerController@destroy');



