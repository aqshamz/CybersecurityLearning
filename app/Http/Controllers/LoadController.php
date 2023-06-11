<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoadController extends Controller
{
    public function index(){
        return view('registration');
    }

    public function loginpage(){
        return view('login');
    }

    public function homepage(){
        return view('home');
    }
}
