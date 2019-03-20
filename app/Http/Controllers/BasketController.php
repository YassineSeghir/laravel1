<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class BasketController extends Controller
{
    public function showPanier(Request $request)
    {

        $products = $request->session()->get('key', []);

        return view('basket', ['product' => $products]);
    }

    public function addPanier(Request $request , $id)
    {

        $panier= Product::find($id);
        $request->session()->put('key.'.$id, $panier );

        return redirect(route('basketAdd'));
    }
}

