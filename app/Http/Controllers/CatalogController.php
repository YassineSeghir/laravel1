<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{

    public function showCatalog()
    {
        $catalog = DB::select('SELECT * FROM asso_article_img  INNER JOIN images ON images.ID_IMAGE = asso_article_img.ID_IMAGE INNER JOIN article ON asso_article_img.ID_ARTICLE = article.ID_ARTICLE ');


        return view('catalog', ["catalog" => $catalog]);
    }
}


