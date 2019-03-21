<?php

namespace App\Http\Controllers;

use App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
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

    public function show()
    {
        $customer = app\Product::find($id);
        return view('products.product', ['customer' => $customer]);
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


