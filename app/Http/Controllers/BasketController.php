<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class BasketController extends Controller
{
    public function showPanier(Request $request,$id)
    {
        $products = $request->session()->get($id);


        return view('panier', $products);
    }
}

