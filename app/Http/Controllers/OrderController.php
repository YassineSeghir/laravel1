<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
    public function index()
    {
        $orders = app\Order::orderBy('id', 'asc')->get();
        return view('admin/orderList', ["order" => $orders]);
    }


    public function create()
    {
    }


    public function store()
    {

    }


    public function show()
    {

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