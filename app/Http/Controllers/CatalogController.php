<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CatalogController extends Controller
{
    // AFFICHE LE CATALOGUE
    public function index()
    {
        $article = DB::select('
                SELECT * FROM `article`INNER JOIN asso_article_img 
                ON article.id_article = asso_article_img.ID
                INNER JOIN images 
                ON images.ID_IMAGE = asso_article_img.ID_IMAGE
                ORDER BY NAME ASC
                                ');
        return view('catalog', ['article' => $article]);


    }
    public function create()
    {
    }

    public function store()
    {
    }

    public function show()
    {


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

