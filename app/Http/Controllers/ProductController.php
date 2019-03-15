<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Article;

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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // Vient du haut de la page : use Illuminate\Http\Request;
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
       // $article = Article::all()->find('$id');
       // dd($articles);
    //    return view('admin/product', ['article' => $article[0]]);

      $url = $request->path();
        $article = DB::select('
            SELECT a.id, a.name, a.description, a.price, i.imgURL
            FROM articles AS a
              LEFT JOIN asso_article_img AS aai ON aai.id_article = a.id
              LEFT JOIN images AS i ON i.id = aai.id_image
            WHERE a.id = :id',
            ['id' => $id]
        );
        return view('admin/product', ['article' => $article[0]]);
        // dd($article);
        /*  if($url == 'admin/product') {
               return view('admin/product', ['article' => $article[0]]);
           }
           else{
               return view('catalog', compact('articles'));
           }
    }


    public function edit()
    {
        return view('admin/edit');
    }

    public function update()
    {

    }

    public function destroy($id)
    {
        dd('hello)');
        Article::destroy($id);
        return redirect(route('back'));
    }
}


