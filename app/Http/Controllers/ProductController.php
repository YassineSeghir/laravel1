<?php

namespace App\Http\Controllers;

use App;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use PDO;


class ProductController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /*  public function index()
     {
            $products = app\Product::orderBy('name', 'asc')->get();
            return view('products.catalog', ['products' => $products]);
     }*/

    public function home()
    {
        $products = app\Product::inRandomOrder()->limit(4)->get();
        return view('homepage', ['products' => $products]);
    }

    public function index(Request $request)
    {
        $data = $request->input('sort');
        $products = app\Product::orderBy('name', 'asc')->get();
        if ($data == 'Nom') {
            $sorted = $products->sortBy('name');
            $sorted->values()->all();
        } elseif ($data == 'Prix') {
            $sorted = $products->sortBy('price');
            $sorted->values()->all();
        } elseif ($data == 'Catégorie') {
            $sorted = $products->sortBy('id_category');
            $sorted->values()->all();
        } else {
            $sorted = $products;
        }

        return view('products.catalog', ['products' => $sorted]);
    }


    public function create()
    {
    }

    public function store()
    {
    }


    public function show($id)
    {
        $categories = Category::all();
        $product = app\Product::find($id);
        return view('products.product', ['product' => $product], ['category' => $categories]);
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


