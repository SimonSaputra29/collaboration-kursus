<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\SuperiorityImage;
use Illuminate\Http\Request;

class SuperiorityImageController extends Controller
{
    public function index()
    {
        $superiorityImage = SuperiorityImage::all();
        return view('backend.database.superiority.superiorityImage.index', compact('superiorityImage'));
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

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $superiorityImage = SuperiorityImage::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagePath = ('uploads/superiority/' . $superiorityImage->name);
            if (file_exists($imagePath) && is_file($imagePath)) {
                unlink($imagePath);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(('uploads/superiority'), $imageName);

            $superiorityImage->name = $imageName;
            $superiorityImage->save();
        }

        return redirect()->route('superiorityImage.index')
            ->with('success', 'Image updated successfully.');
    }

    public function destroy($id)
    {
        $superiorityImage = SuperiorityImage::findOrFail($id);

        $imagePath = ('uploads/superiority/' . $superiorityImage->name);
        if (file_exists($imagePath) && is_file($imagePath)) {
            unlink($imagePath);
        }

        $superiorityImage->delete();

        return redirect()->route('superiorityImage.index')
            ->with('success', 'Image deleted successfully.');
    }
}
