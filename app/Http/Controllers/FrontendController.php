<?php

namespace App\Http\Controllers;

use App\Models\Backend\Configuration;
use App\Models\Backend\Hero;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        $configuration = Configuration::first();
        $hero = Hero::first();
        return view('frontend.pages.home', [
            'title' => 'Kursus Yasmin',
        ], compact('configuration', 'hero'));
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
