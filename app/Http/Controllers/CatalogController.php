<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{

    public function showCatalog()
    {
        $products = app\Product::all()->sortBy('name');


        return view('catalog', ["product" => $products]);
    }
}


