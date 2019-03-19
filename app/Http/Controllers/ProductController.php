<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('price', 'asc')->get();
        return view('product/catalog', ['products' => $products]);
    }


    public function create()
    {
        return view('product/create');
    }


    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->weight = $request->input('weight');
        $product->stock = $request->input('stock');
        $product->id_category = $request->input('id_cat');
        $product->save();
        return redirect()->route('productCatalog');
    }


    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product/product', ['product' => $product]);
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product/edit', ['product' => $product]);
    }


    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->save();
        return view('product/edited', ['product' => $product]);
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('productCatalog');
    }

}


