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
        //****************SQL queries on DB**********************************
        //        $products = DB::select('
        //                                SELECT a.id, a.name, a.price, i.imgURL
        //                                FROM article AS a
        //                                  INNER JOIN asso_article_img AS aai ON aai.id_article = a.id
        //                                  INNER JOIN images AS i ON i.id = aai.id_image
        //                                  ORDER BY name ASC
        //                                ');
        //*******************************************************************

        //****************Eloquent queries************************************
        //         $products = Product::orderBy('name', 'desc')->get();          //SQL equivalent to SELECT * FROM article ORDER BY name DESC
        //         dump(Product::orderBy('name', 'desc'));
        //         dump(Product::orderBy('name', 'desc')->orderBy('price')->get());
        //         dump(Product::all());
        //         $products = Product::all()->sortBy('price');                 //SQL equivalent to SELECT * FROM article
        $products = Product::orderBy('price', 'asc')->get();        //SQL equivalent to SELECT * FROM article ORDER BY name ASC
        //*******************************************************************
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
        return redirect('/product/catalog');
    }


    public function show($id)
    {
//                $product = DB::select('
//                                        SELECT a.id, a.name, a.description, a.price, i.imgURL
//                                        FROM article AS a
//                                          INNER JOIN asso_article_img AS aai ON aai.id_article = a.id
//                                          INNER JOIN images AS i ON i.id = aai.id_image
//                                        WHERE a.id = :id',
//                                        ['id' => $id]
//                                        );
        $product = Product::findOrFail($id);
        return view('product', ['product' => $product]);

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
        return redirect('product/catalog');
    }

}


