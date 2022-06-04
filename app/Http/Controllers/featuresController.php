<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class featuresController extends Controller
{
    public function index()
    {
        return view('features');
    }
}
