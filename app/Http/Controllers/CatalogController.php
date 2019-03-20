<?php
//
//namespace App\Http\Controllers;
//
//use App\Product;
//use Illuminate\Http\Request;
//use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;
//
//
//
//class CatalogController extends Controller
//{
//    public function showCatalog(Request $request)
//    {
//        $articles = Product::all();
//        $articles = Product::all()->sortBy('name');
//        $url = $request->path();
//
//        if ($url == 'admin/administration') {
//            return view('admin/administration', compact('articles'));
//        } else {
//            return view('catalog', compact('articles'));
//        }
//    }
//}
