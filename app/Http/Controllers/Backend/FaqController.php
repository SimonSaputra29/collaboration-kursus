<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Configuration;
use App\Models\Backend\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faq = Faq::all();
        $configuration = Configuration::first();
        return view('backend.database.faq.index', compact('faq', 'configuration'));
    }

    public function create()
    {
        $configuration = Configuration::first();
        return view('backend.database.faq.create', compact('configuration'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $nextNumber = Faq::max('number') + 1;

        $imageName = time() . '.' . $request->image->extension();
        $imagePath = 'uploads/faq/' . $imageName;
        $request->image->move(public_path('uploads/faq'), $imageName);

        Faq::create([
            'image' => $imagePath,
            'title' => $request->title,
            'description' => $request->description,
            'number' => $nextNumber,
        ]);

        return redirect()->route('faq.index')
            ->with('success', 'FAQ berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $configuration = Configuration::first();
        $faq = Faq::findOrFail($id);
        return view('backend.database.faq.edit', compact('configuration', 'faq'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $faq = Faq::findOrFail($id);

        $faq->title = $request->title;
        $faq->description = $request->description;

        if ($request->hasFile('image')) {
            if (!empty($faq->image) && file_exists(($faq->image))) {
                unlink(($faq->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $imageDirectory = 'uploads/faq/';
            $request->image->move(($imageDirectory), $imageName);
            $faq->image = $imageDirectory . $imageName;
        }

        $faq->save();

        return redirect()->route('faq.index')
            ->with('success', 'Data updated successfully.');
    }

    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);

        if (!empty($faq->image) && file_exists(($faq->image))) {
            unlink(($faq->image));
        }

        $faq->delete();

        return redirect()->route('faq.index')
            ->with('success', 'Data deleted successfully.');
    }
}
