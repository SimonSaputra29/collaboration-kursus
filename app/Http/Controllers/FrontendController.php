<?php

namespace App\Http\Controllers;

use App\Models\Backend\Configuration;
use App\Models\Backend\Hero;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $configuration = Configuration::first();
        $hero = Hero::first(); 

        return view('frontend.pages.home', [
            'title' => 'Kursus Yasmin',
            'configuration' => $configuration,
            'hero' => $hero,
        ]);
    }

    public function langganan()
    {
        $configuration = Configuration::first();
        $hero = Hero::first();

        return view('frontend.pages.langganan', [
            'title' => 'Langganan',
            'configuration' => $configuration,
            'hero' => $hero,
        ]);
    }

    public function program()
    {
        $configuration = Configuration::first();
        $hero = Hero::first();

        return view('frontend.pages.program', [
            'title' => 'Program',
            'configuration' => $configuration,
            'hero' => $hero,
        ]);
    }

    public function learning()
    {
        $configuration = Configuration::first();
        $hero = Hero::first();

        return view('frontend.pages.learning-path', [
            'title' => 'Learning Path',
            'configuration' => $configuration,
            'hero' => $hero,
        ]);
    }

    public function tentang()
    {
        $configuration = Configuration::first();
        $hero = Hero::first();

        return view('frontend.pages.tentang', [
            'title' => 'Tentang',
            'configuration' => $configuration,
            'hero' => $hero,
        ]);
    }

    public function kontak()
    {
        $configuration = Configuration::first();
        $hero = Hero::first();

        return view('frontend.pages.kontak', [
            'title' => 'Kontak',
            'configuration' => $configuration,
            'hero' => $hero,
        ]);
    }
}
