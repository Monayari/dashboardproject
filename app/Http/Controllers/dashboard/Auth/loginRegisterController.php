<?php

namespace App\Http\Controllers\dashboard\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginRegisterController extends Controller
{
    public function index(){

        return view('dashboard.Auth.login-register');
    }
}
