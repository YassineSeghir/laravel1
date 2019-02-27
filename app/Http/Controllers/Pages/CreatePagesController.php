<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class CreatePagesController extends Controller {

    public function showCGV(){

        return view('general_pages.cgv');
    }
    public function showMentions(){

        return view('general_pages.mentions');
    }

public function showContact(){

        return view('general_pages.contact');
    }
}

