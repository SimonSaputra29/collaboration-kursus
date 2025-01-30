<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.layout.index');
    }

    public function langganan(){
        return view('frontend.pages.langganan');
    }

    public function program(){
        return view('frontend.pages.program');
    }

    public function home(){
        return view('frontend.pages.home');
    }

    public function learning(){
        return view('frontend.pages.learning-path');
    }
}
