<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Configuration;
use App\Models\Backend\Why;
use Illuminate\Http\Request;

class WhyController extends Controller
{
    public function index()
    {
        $why = Why::first();
        $configuration = Configuration::first();
        return view('backend.database.why.index', compact('why', 'configuration'));
    }

    public function createOrUpdate(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $why = Why::updateOrCreate(
            ['id' => 1],
            $data
        );

        return redirect()->back()->with('success', 'Hero berhasil diperbarui!');
    }
}
