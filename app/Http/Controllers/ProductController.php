<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;


class ProductController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        return view('product.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $article = new \App\Article();
          // dd($article);
            $article->name = $request->input('name');
            $article->description = $request->input('description');
            $article->price = $request->input('price');
            $article->weight = $request->input('weight');
            $article->stock = $request->input('stock');
            $article->id_cat = $request->input('cat');

            $article->save();

            return redirect("/catalog");
        }
    }

    public function show($id)
    {
        $article = DB::select('
            SELECT a.id, a.name, a.description, a.price, i.imgURL
            FROM articles AS a
              INNER JOIN asso_article_img AS aai ON aai.id_article = a.id
              INNER JOIN images AS i ON i.id = aai.id_image
            WHERE a.id = :id',
                ['id' => $id]
            );
         // dd($article);
           return view('product', ['article' => $article[0]]);
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy($id)
    {
        return view('homepage');
    }

}


