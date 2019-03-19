<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Product;

class ProductController extends Controller
{

    public function index()
    {

    }

    public function show($id, Request $request)
    {
   // dd('hello');
        $url = $request->path();
        $article = DB::select('
            SELECT a.id, a.name, a.description, a.price, i.imgURL
            FROM products AS a
              LEFT JOIN image_product AS aai ON aai.id = a.id
              LEFT JOIN images AS i ON i.id = aai.id
            WHERE a.id = :id',
            ['id' => $id]
        );
            return view('product/product', ['article' => $article[0]]);

    }


}


