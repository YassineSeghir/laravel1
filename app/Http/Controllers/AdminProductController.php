<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('price', 'asc')->get();
        return view('admin.products.catalog', ['products' => $products]);
    }


    public function create()
    {
        return view('admin.products.create');
    }


    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->weight = $request->input('weight');
        $product->stock = $request->input('stock');
        $product->id_category = $request->input('id_category');
        $product->id_image = $request->input('id_image');
        $product->save();
        return redirect()->route('admin_catalog');
    }


    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.product', ['product' => $product]);
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', ['product' => $product]);
    }


    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->weight = $request->input('weight');
        $product->stock = $request->input('stock');
        $product->id_category = $request->input('id_category');
        $product->id_image = $request->input('id_image');
        $product->save();
        return view('admin.products.edited', ['product' => $product]);
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin_catalog');
    }
}
