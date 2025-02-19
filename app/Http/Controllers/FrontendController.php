<?php

namespace App\Http\Controllers;

use App\Models\Backend\CategoryService;
use App\Models\Backend\Configuration;
use App\Models\Backend\Hero;
use App\Models\Backend\OurProgram;
use App\Models\Backend\Superiority;
use App\Models\Backend\SuperiorityImage;
use App\Models\Backend\Why;
use App\Models\Backend\WhyUs;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $configuration = Configuration::first();
        $hero = Hero::first();
        $superiority = Superiority::first();
        $superiorityImage = SuperiorityImage::all();
        $why = Why::first();
        $whyUs = WhyUs::all();

        return view('frontend.pages.home', [
            'title' => 'Kursus Yasmin',
            'configuration' => $configuration,
            'hero' => $hero,
            'superiorityImage' => $superiorityImage,
            'superiority' => $superiority,
            'why' => $why,
            'whyUs' => $whyUs,
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
        $ourPrograms = OurProgram::all();

        return view('frontend.pages.program', [
            'title' => 'Program',
            'configuration' => $configuration,
            'hero' => $hero,
            'ourPrograms' => $ourPrograms,
        ]);
    }

    public function learning()
    {
        $configuration = Configuration::first();
        $hero = Hero::first();
        $categoryService = CategoryService::all();

        return view('frontend.pages.learning-path', [
            'title' => 'Learning Path',
            'configuration' => $configuration,
            'hero' => $hero,
            'categoryService' => $categoryService,
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

    public function webdevelopment($categoryId)
    {
        $configuration = Configuration::first();
        $hero = Hero::first();
        $category = CategoryService::with('services')->findOrFail($categoryId);
        return view('frontend.learning-path.web-development', [
            'title' => 'Learning',
            'configuration' => $configuration,
            'hero' => $hero,
            'category' => $category,
        ]);
    }

    public function soalhtml()
    {
        $configuration = Configuration::first();
        return view('frontend.soal.soal-html', [
            'title' => 'Soal HTML',
            'configuration' => $configuration,
        ]);
    }

    public function soalcss()
    {
        $configuration = Configuration::first();
        return view('frontend.soal.soal-css', [
            'title' => 'Soal CSS',
            'configuration' => $configuration,
        ]);
    }

    public function uiux()
    {
        $configuration = Configuration::first();
        return view('frontend.learning-path.uiux', [
            'title' => 'Learning UI UX',
            'configuration' => $configuration,
        ]);
    }

    public function machinelearning()
    {
        $configuration = Configuration::first();
        return view('frontend.learning-path.machinelearning', [
            'title' => 'Learning Machine Learning',
            'configuration' => $configuration,
        ]);
    }

    public function datascience()
    {
        $configuration = Configuration::first();
        return view('frontend.learning-path.datascience', [
            'title' => 'Learning Data Science',
            'configuration' => $configuration,
        ]);
    }

    public function faq()
    {
        $configuration = Configuration::first();

        return view(
            'frontend.pages.faq',
            [
                'title' => 'FAQ',
                'configuration' => $configuration,
            ]
        );
    }
}
