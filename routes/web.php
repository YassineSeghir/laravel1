<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//--Products
Route::get('/products', function () {
    return view('products');
});
//-- Add Products
Route::get('/add-product', function () {
    return view('add-product');
});
// POST-- Confirm save products
Route::get('/confirm-save-product', function () {
    return view('confirm-save-product');
});
// -- View Products
Route::get('/view-product', function () {
    return view('view-product');
});

//-- edit-product
Route::get('/edit-product', function () {
    return view('edit-product');
});

//-- confirm-edit-product
Route::get('/confir-edit-product', function () {
    return view('confirm-edit-product');
});
//-- confirm-delete-product
Route::get('/confir-delete-product', function () {
    return view('confir-delete-product');
});