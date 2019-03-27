<?php

namespace App\Http\Controllers;

use App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminCustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $customers = app\Customer::orderby('last_name', 'asc')->get();
        return view('admin.customers.list', ['customers' => $customers]);
    }

    public function create()
    {
    }

    public function store()
    {
    }

    public function show($id)
    {
        $customer = app\Customer::findOrFail($id);
        return view('admin.customers.show', ['customer' => $customer]);
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


