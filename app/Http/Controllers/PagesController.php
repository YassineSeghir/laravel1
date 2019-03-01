<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function showCGV()
    {

        return view('general_pages.cgv');
    }

    public function showMentions()
    {

        return view('general_pages.mentions');
    }

    public function showContact()
    {

        return view('general_pages.contact');
    }

    public function showHome()
    {
        return view('homepage');
    }
}
