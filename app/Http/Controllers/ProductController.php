<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class ProductController extends Controller
{

    public function index()
    {

        $products = app\Product::orderBy('price' , 'asc')->get();


        return view('catalog', ["products" => $products]);

    }

    public function create()
    {


    }

    public function store(Request $request,$id)
    {
        $products = $request->session()->put($id);

        return $products;
    }

    public function show($id)
    {
        $products = app\Product::find($id);


        return view('product', ['product' => $products]);
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


