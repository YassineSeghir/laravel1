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

        $total = 0;
        return view('panier', ['data' => $data], ['total' => $total]);
    }

    public function addPanier(Request $request)
    {
        $product = Product::find($request['id']);
        $request->session()->put('key.' . $product->id, $product);
        $data = $request->session()->get('key');

        $total = 0;
        foreach ($data as $product) {
//
            $total += ($product->price / 100);
        }


        return view('panier', ['data' => $data], ['total' => $total]);
    }

    public function emptyPanier(Request $request)
    {

        $request->session()->flush();

        return redirect()->route('basketFree');
    }


    public function destroyPanier(Request $request)
    {

        $product = Product::find($request['id']);
        $request->session()->forget('key.' . $product->id, $product);

        return redirect()->route('basketSupp' );
    }
}



