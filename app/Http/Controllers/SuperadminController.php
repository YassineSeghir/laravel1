<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class SuperadminController extends Controller
{
    public function index()
    {
        return view('admin/Page_Admin');

    }

    public function create()
{


    return view('admin.productcreate');

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

        return view('admin.result',['product'=>$product]);

    }

    public function show()
    {
 

    }

    public function edit($id)
    {
        $product=Product::find($id);
        return view('admin.produpdate',['product'=>$product]);

    }

    public function update(Request $request,$id)
    {
        $product = Product::find($id);
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->weight = $request->input('weight');
        $product->stock = $request->input('stock');
        $product->id_category = $request->input('id_category');
        $product->id_image = $request->input('id_image');
        $product->save();
        return view('admin.resultupdate',['product'=>$product]);

    }

    public function destroy()
    {

        return view('admin.productdestroy');
    }



public function delete(Request $request)
{
    $product = Product::find($request->id);
    $product->delete();
    return view('admin.productdestroy');
}

}



