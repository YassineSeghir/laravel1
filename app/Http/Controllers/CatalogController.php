<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Article;

class CatalogController extends Controller
{

    public function showCatalog()
    {
      $articles = Article::all();
     // $articles = Article::all()->whereIn('id', [5,10,11]);
        $articles = Article::all()->sortBy('name');

       return view('catalog', compact('articles'));
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        //
    }


    public function show()
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
