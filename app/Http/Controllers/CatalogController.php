<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Product;

class CatalogController extends Controller
{
        public function showCatalog(Request $request)
    {
        $articles = Product::all();
       // $articles = Article::all()->whereIn('id', [5,10,11]);
        $articles = Product::all()->sortBy('name');
        //Pour afficher le catalogue dans la page front ou dans le backoffice
        $url = $request->path();
        if ($url == 'admin/administration') {
            return view('admin/administration', compact('articles'));
        }
        else{
            return view('catalog', compact('articles'));
        }
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
