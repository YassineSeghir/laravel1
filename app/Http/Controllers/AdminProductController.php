<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('name', 'asc')->get();

//        $products = Product::join('categories', 'id_category', '=', 'categories.id')
//            ->select('products.*')
//            ->orderBy('categories.name', 'desc')
//            ->orderBy('products.name', 'asc')
//            ->get();
      //  return view('admin/products', compact('products'));

        return view('admin.products.catalog', ['products' => $products]);


    }


    public function create()
    {
       $images = Image::all();
       $categories = Category::all();
       return view('admin.products.create', ['categories' => $categories], ['images' => $images]);
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->weight = $request->input('weight');
        $product->stock = $request->input('stock');
        $product->id_category = $request->input('cat');
        $product->id_image = $request->input('img');

    //    dd($product);

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
