<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{

    public function showCatalog()
    {
        $catalog = DB::select('select * from article ');


        return view('catalog', ["catalog" => $catalog]);
    }
}


