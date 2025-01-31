<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function LoginPage()
    {
        return view('welcome');
    }

    public function index()
    {
        return view('backend.index');
    }
}
