<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        return view('frontend.pages.home', [
            'title' => 'Kursus Yasmin',
        ]);
    }

    public function langganan(){
        return view('frontend.pages.langganan', [
            'title'=> 'Langganan',
        ]);
    }

    public function program(){
        return view('frontend.pages.program', [
            'title'=> 'Program',
        ]);
    }

    public function learning(){
        return view('frontend.pages.learning-path', [
            'title'=> 'Learning Path',
        ]);
    }

    public function tentang(){
        return view('frontend.pages.tentang', [
            'title'=> 'Tentang',
        ]);
    }
}
