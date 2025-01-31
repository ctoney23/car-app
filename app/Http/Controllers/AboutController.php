<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
       // existing code...
    }

    public function about()
    {
        return view('about');
    }
}


