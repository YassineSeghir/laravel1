<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class BasketController extends Controller
{
    public function showPanier(Request $request)
    {
        $totalPrice = 0;
        if ($request->session()->has('key')) {
            $products = $request->session()->get('key');
            foreach ($request->session()->get('key') as $product) {
                $totalPrice += ($product->price);
            }
        }

        return view('panier', ['products' => $products], ['totalPrice' => $totalPrice]);
//        $data = $request->session()->get('key');
//        $total = 0;
//        if ($data) {
//            foreach ($data as $product) {
//                $total += ($product->price / 100);
//            }
//        }
//
//        return view('panier', ['data' => $data], ['total' => $total]);
    }

    public function addPanier(Request $request)
    {

        $product = Product::find($request['id']);
        $request->session()->put('key.' . $product->id, $product);
        $data = $request->session()->get('key');

        $total = 0;
        foreach ($data as $product) {
            $total += ($product->price / 100);
        }

        return view('panier', ['data' => $data], ['total' => $total]);
    }

    public function emptyPanier(Request $request)
    {
        $request->session()->flush();

        return redirect()->route('basketFree');
    }


    public function destroyPanier(Request $request, $id)
    {
        $request->session()->forget('key.' . $id);

        return redirect()->route('basket');
    }

}



