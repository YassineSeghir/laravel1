<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class AdminCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $categories = Category::all()->sortBy('name');
        return view('admin/products/categories', compact('categories'));
    }
// Ajouter une catégorie et réafficher la page catégories.
    public function store(Request $request)
    {
        $category = new Category;
        $validate = $request->validate([
            'name' => 'required|unique:categories|max:20',
        ]);
        $category->name = $request->name;
        $category->save();

        return redirect()->route('categories');
    }

// Editer un élément de la base
    public function edit(Request $request, $id)
    {
        $category = Category::find($id);
        return view('admin/products/editCategories',['category'=>$category]);
    }


// Editer un élément de la base
    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('categories');
    }

    public function destroy(Request $request, $id)
    {
        $category = Category::find($id);
        $category->id = $id;
        $products = Product::where('id_category',$category->id)->get();
        foreach($products as $product){
            $product->id_category=null;
            $product->save();
        }
        $category->delete();
        return redirect()->route('categories');

    }



}
