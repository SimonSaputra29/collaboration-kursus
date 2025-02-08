<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Configuration;
use App\Models\Backend\WhyUs;
use Illuminate\Http\Request;

class WhyUsController extends Controller
{
    public function index()
    {
        $whyUs = WhyUs::all();
        $configuration = Configuration::first();
        return view('backend.database.why.whyUs.index', compact('whyUs', 'configuration'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $imagePath = 'uploads/why/' . $imageName;
        $request->image->move(public_path('uploads/why'), $imageName);

        WhyUs::create([
            'image' => $imagePath,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('whyUs.index')
            ->with('success', 'Image uploaded successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $whyUs = WhyUs::findOrFail($id);

        $whyUs->title = $request->title;
        $whyUs->description = $request->description;

        if ($request->hasFile('image')) {
            if (!empty($whyUs->image) && file_exists(public_path($whyUs->image))) {
                unlink(public_path($whyUs->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $imageDirectory = 'uploads/superiority/';
            $request->image->move(public_path($imageDirectory), $imageName);
            $whyUs->image = $imageDirectory . $imageName;
        }

        $whyUs->save();

        return redirect()->route('whyUs.index')
            ->with('success', 'Data updated successfully.');
    }

    public function destroy($id)
    {
        $whyUs = WhyUs::findOrFail($id);

        if (!empty($whyUs->image) && file_exists(public_path($whyUs->image))) {
            unlink(public_path($whyUs->image));
        }

        $whyUs->delete();

        return redirect()->route('whyUs.index')
            ->with('success', 'Data deleted successfully.');
    }
}
