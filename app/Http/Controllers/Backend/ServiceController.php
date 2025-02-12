<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Configuration;
use App\Models\Backend\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $configuration = Configuration::first();
        $services = Service::all();
        return view('backend.database.service.index', compact('configuration', 'services'));
    }
}
