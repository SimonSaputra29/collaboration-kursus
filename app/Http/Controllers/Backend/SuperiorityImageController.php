<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Configuration;
use App\Models\Backend\SuperiorityImage;
use Illuminate\Http\Request;

class SuperiorityImageController extends Controller
{
    public function index()
    {
        $superiorityImage = SuperiorityImage::all();
        $configuration = Configuration::first();
        return view('backend.database.superiority.superiorityImage.index', compact('superiorityImage', 'configuration'));
    }

    public function create()
    {
        $configuration = Configuration::first();
        return view('backend.database.superiority.superiorityImage.create', compact('configuration'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $imagePath = 'uploads/superiority/' . $imageName;
        $request->image->move(('uploads/superiority'), $imageName);
        SuperiorityImage::create(['image' => $imagePath]);

        return redirect()->route('superiorityImage.index')
            ->with('success', 'Image uploaded successfully.');
    }

    public function edit($id)
    {
        $configuration = Configuration::first();
        $superiorityImage = SuperiorityImage::findOrFail($id);
        return view('backend.database.superiority.superiorityImage.edit', compact('configuration', 'superiorityImage'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $superiorityImage = SuperiorityImage::findOrFail($id);

        if ($request->hasFile('image')) {
            $oldImagePath = ($superiorityImage->image);
            if (file_exists($oldImagePath) && is_file($oldImagePath)) {
                unlink($oldImagePath);
            }
            $imageName = time() . '.' . $request->image->extension();
            $imageDirectory = 'uploads/superiority/';
            $request->image->move(($imageDirectory), $imageName);
            $superiorityImage->image = $imageDirectory . $imageName;
        }
        $superiorityImage->save();
        return redirect()->route('superiorityImage.index')
            ->with('success', 'Image updated successfully.');
    }

    public function destroy($id)
    {
        $superiorityImage = SuperiorityImage::findOrFail($id);
        $imagePath = ($superiorityImage->image);
        if (file_exists($imagePath) && is_file($imagePath)) {
            unlink($imagePath);
        }
        $superiorityImage->delete();

        return redirect()->route('superiorityImage.index')
            ->with('success', 'Image deleted successfully.');
    }
}
