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

    public function create()
    {
        $configuration = Configuration::first();
        return view('backend.database.service.create', compact('configuration'));
    }

    public function store(Request $request)
    {
        $request->validate([
            ''
        ]);

        Service::create([

        ]);

        return redirect()->route('service.index')->with('success', 'Data berhasil ditambahkan');
    }

    
}
