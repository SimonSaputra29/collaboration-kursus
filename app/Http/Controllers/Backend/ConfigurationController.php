<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Configuration;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    public function index()
    {
        $configuration = Configuration::first();
        return view('backend.database.configuration', compact('configuration'));
    }

    public function createOrUpdate(Request $request)
    {
        $data = $request->validate([
            'logo' => 'nullable|string',
            'title_logo' => 'nullable|string',
            'website_name' => 'nullable|string',
            'title' => 'nullable|string',
            'phone_number' => 'nullable|string',
            'email_address' => 'nullable|string',
            'instagram' => 'nullable|string',
            'youtube' => 'nullable|string',
            'address' => 'nullable|string',
            'map' => 'nullable|string',
            'footer' => 'nullable|string',
        ]);

        $configuration = Configuration::updateOrCreate(['id' => 1], $data);

        return redirect()->back()->with('success', 'Konfigurasi berhasil diperbarui!');
    }

}
