<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Product;

class BackProductController extends Controller
{
    public function index()
    {
    }

    public function show($id, Request $request)
    {
       // $url = $request->path();
        $article = DB::select('
            SELECT a.id, a.name, a.description, a.price, i.imgURL
            FROM products AS a
              LEFT JOIN image_product AS aai ON aai.id = a.id
              LEFT JOIN images AS i ON i.id = aai.id
            WHERE a.id = :id',
            ['id' => $id]
        );

        return view('admin/seeProduct', ['article' => $article[0]]);
    }
    public function create()
    {
       // dd('hello');
        return view('admin.create');
    }
    public function store(Request $request) // Vient du haut de la page : use Illuminate\Http\Request;
    {
        {
            $article = new \App\Product();
            $article->name = $request->input('name');
            $article->description = $request->input('description');
            $article->price = $request->input('price');
            $article->weight = $request->input('weight');
            $article->stock = $request->input('stock');
            $article->id_category = $request->input('cat');

            $article->save();

        }
    }




    public function edit($id)
    {
        return view('admin/edit');
    }

    public function destroy($id)//Est-on certain ?
    {
        $article=Product::find($id);
        return view('admin/delete',['article' => $article]);
    }

    public function delete($id)//Tu détruits
    {
        Product::destroy($id);
        return redirect(route('back'));
    }
}

