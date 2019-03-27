<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Middleware\IsAdmin;

class AdminProductController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

//    public function __construct()
//    {
//        $this->middleware('IsAdmin');
//    }


    public function index()
    {
        $products = Product::orderBy('name', 'asc')->get();
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
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('admin.products.edit', ['product' => $product], ['categories' => $categories]);
    }


    public function update(Request $request, $id)
    {
     //   $categories = Category::all();AB

        $product = Product::findOrFail($id);
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


    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin_catalog');
    }
}
