<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }
    public function bloge()
    {
        return view('pages.bloge');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    
}
