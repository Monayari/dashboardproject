<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogSingleController extends Controller
{
    public function index()
    {
        return view('blog-single');
    }
}
