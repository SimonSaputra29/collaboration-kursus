<?php

namespace App\Http\Controllers;

use App\Models\Backend\Configuration;
use App\Models\Backend\Hero;
use App\Models\Backend\Superiority;
use App\Models\Backend\SuperiorityImage;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $configuration = Configuration::first();
        $hero = Hero::first();
        $superiority = Superiority::first();
        $superiorityImage = SuperiorityImage::all();


        return view('frontend.pages.home', [
            'title' => 'Kursus Yasmin',
            'configuration' => $configuration,
            'hero' => $hero,
            'superiorityImage' => $superiorityImage,
            'superiority' => $superiority,
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

    public function login()
    {
        $configuration = Configuration::first();
        return view('frontend.modal.login', [
            'title' => 'Login',
            'configuration' => $configuration,
        ]);
    }

    public function webdevelopment()
    {
        $configuration = Configuration::first();
        $hero = Hero::first();

        return view('frontend.learning-path.web-development', [
            'title' => 'Learning',
            'configuration' => $configuration,
            'hero' => $hero,
        ]);
    }

    public function soalhtml(){
        $configuration = Configuration::first();
        return view('frontend.soal.soal-html', [
            'title' => 'Soal HTML',
            'configuration' => $configuration,
        ]);
    }

    public function soalcss(){
        $configuration = Configuration::first();
        return view('frontend.soal.soal-html', [
            'title' => 'Soal CSS',
            'configuration' => $configuration,
        ]);
    }

}
