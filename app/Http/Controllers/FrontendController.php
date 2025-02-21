<?php

namespace App\Http\Controllers;

use App\Models\Backend\CategoryService;
use App\Models\Backend\Configuration;
use App\Models\Backend\Hero;
use App\Models\Backend\OurProgram;
use App\Models\Backend\Superiority;
use App\Models\Backend\SuperiorityImage;
use App\Models\Backend\Team;
use App\Models\Backend\Why;
use App\Models\Backend\WhyUs;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Models\Backend\Faq;
use Illuminate\Support\Facades\Mail;

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
        $faq = Faq::all();

        return view('frontend.pages.home', [
            'title' => 'Kursus Yasmin',
            'configuration' => $configuration,
            'hero' => $hero,
            'superiorityImage' => $superiorityImage,
            'superiority' => $superiority,
            'why' => $why,
            'whyUs' => $whyUs,
            'faq' => $faq,
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
        $teams = Team::all();

        return view('frontend.pages.tentang', [
            'title' => 'Tentang',
            'configuration' => $configuration,
            'hero' => $hero,
            'teams' => $teams,
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

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];

        Mail::to('legendsmystic60@gmail.com')->send(new ContactMail($data));

        return back()->with('success', 'Pesan berhasil dikirim!');
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
