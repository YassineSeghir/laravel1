<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App;

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
//        $products = App\Product::orderBy('name', 'desc')->get();          //SQL equivalent to SELECT * FROM article ORDER BY name DESC

//         dump(App\Product::orderBy('name', 'desc'));
//         dump(App\Product::orderBy('name', 'desc')->orderBy('price')->get());
//         dump(App\Product::all());

//         $products = App\Product::all()->sortBy('price');                 //SQL equivalent to SELECT * FROM article
        $products = App\Product::orderBy('price', 'desc')->get();        //SQL equivalent to SELECT * FROM article ORDER BY name DESC
//*******************************************************************

        return view('catalog', ['products' => $products]);
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function show($id)
    {
//        $product = DB::select('
//                                SELECT a.id, a.name, a.description, a.price, i.imgURL
//                                FROM article AS a
//                                  INNER JOIN asso_article_img AS aai ON aai.id_article = a.id
//                                  INNER JOIN images AS i ON i.id = aai.id_image
//                                WHERE a.id = :id',
//                                ['id' => $id]
//                                );

        $product = App\Product::find($id);

        return view('product', ['product' => $product]);
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


