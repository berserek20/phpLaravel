<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{
    public function register(){
        return view('Registration');
    }
    public function login(){
        return view('Login');
    }
}
