<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class BasketController extends Controller
{
    public function showPanier(Request $request)
    {
        $data = $request->session()->get('key');
        return view('panier', ['data' => $data]);
    }

    public function addPanier(Request $request)
    {
        $product = Product::find($request['id']);
//        dd($product);
        $request->session()->put('key.' . $product->id, $product);
        $data = $request->session()->get('key');
        return view('panier', ['data' => $data]);
    }
}



