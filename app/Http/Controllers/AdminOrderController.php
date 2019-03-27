<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = app\Order::orderBy('id', 'asc')->get();
        return view('admin.order.list', ["orders" => $orders]);
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

    public function edit($id)
    {

        $order = App\Order::findOrFail($id);
        return view('admin.order.editOrder', ['order' => $order]);
    }

    public function update($id,Request $request)
    {
        $order = App\Order::findOrFail($id);
        $order->status = $request->input('status');
        $order->save();

        return redirect()->route('admin_orderList');
    }

    public function destroy($id)
    {
        $order = App\Order::findOrFail($id);
        $order->delete();

        return redirect()->route('admin_orderList');
    }
}