<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Configuration;
use App\Models\Backend\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        $configuration = Configuration::first();
        return view('backend.database.hero.index', compact('hero', 'configuration'));
    }

    public function createOrUpdate(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $imagePath = ('uploads/heros');
            $image->move($imagePath, $imageName);
            $data['image'] = 'uploads/heros/' . $imageName;
        }

        $hero = Hero::updateOrCreate(
            ['id' => 1],
            $data
        );

        return redirect()->back()->with('success', 'Hero berhasil diperbarui!');
    }
}
