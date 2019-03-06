<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class ProductController extends Controller
{

    public function index()
    {

    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function show($id)
    {
        $product = DB::select('
                                SELECT a.id, a.name, a.description, a.price, i.imgURL
                                FROM article AS a
                                  INNER JOIN asso_article_img AS aai ON aai.id_article = a.id
                                  INNER JOIN images AS i ON i.id = aai.id_image
                                WHERE a.id = :id',
                                ['id' => $id]
                                );
        return view('product', ['product' => $product[0]]);
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


