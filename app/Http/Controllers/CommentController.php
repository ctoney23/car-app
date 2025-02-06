<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
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


