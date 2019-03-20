<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index()
    {
        $products = app\Product::orderBy('price', 'asc')->get();
        return view('catalog', ["products" => $products]);
    }


    public function create()
    {
    }


    public function store()
    {

    }


    public function show($id)
    {
        $product = app\Product::find($id);
        return view('products.product', ['product' => $product]);
    }


    public function edit()
    {
    }


    public function update()
    {
    }


    public function destroy()
    {
    }
}


