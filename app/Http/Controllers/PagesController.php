<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function showCGV()
    {

        return view('generalPages.cgv');
    }

    public function showMentions()
    {

        return view('generalPages.mentions');
    }

    public function showContact()
    {

        return view('generalPages.contact');
    }

    public function showHome()
    {
        return view('generalPages.homepage');
    }
}
