<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

require('catalog.blade.php');

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
        global $products;
        $myproduct = null;

        foreach ($products as $product) {
            if ($product['id'] == $id) {
                $myproduct = $product;
            }
        }
        return view('/product', ['myproduct' => $myproduct]);
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


