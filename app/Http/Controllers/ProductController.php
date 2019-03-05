<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

require('catalog.php');

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


        $myproduct = DB::select('select * from article where ID_ARTICLE = :id ', ['id'=>$id]) ;
        //dd($myproduct[0]);
        return view('/product', ['myproduct' => $myproduct[0]]);
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


