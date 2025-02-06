<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Superiority;
use Illuminate\Http\Request;

class SuperiorityController extends Controller
{
    public function index()
    {
        $superiority = Superiority::first();
        return view('backend.database.superiority.index', compact('superiority'));
    }

    public function createOrUpdate(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $superiority = Superiority::updateOrCreate(
            ['id' => 1],
            $data
        );

        return redirect()->back()->with('success', 'Keunggulan berhasil diperbarui!');
    }
}
