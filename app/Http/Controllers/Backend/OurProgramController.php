<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Configuration;
use App\Models\Backend\OurProgram;
use Illuminate\Http\Request;

class OurProgramController extends Controller
{
    public function index()
    {
        $configuration = Configuration::first();
        $ourPrograms = OurProgram::all();
        return view('backend.database.ourProgram.index', compact('configuration', 'ourPrograms'));
    }

    public function create()
    {
        $configuration = Configuration::first();
        return view('backend.database.ourProgram.create', compact('configuration'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'overview' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'link' => 'required|string',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $imagePath = 'uploads/program/' . $imageName;
        $request->image->move(('uploads/program'), $imageName);

        OurProgram::create([
            'image' => $imagePath,
            'title' => $request->title,
            'overview' => $request->overview,
            'link' => $request->link,
        ]);

        return redirect()->route('ourProgram.index')->with('success', 'Data Uploades Successfully');
    }

    public function edit($id)
    {
        $configuration = Configuration::first();
        $ourProgram = OurProgram::findOrFail($id);
        return view('backend.database.ourProgram.edit', compact('configuration', 'ourProgram'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'overview' => 'required|string',
            'link' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $ourProgram = OurProgram::findOrFail($id);

        $ourProgram->title = $request->title;
        $ourProgram->overview = $request->overview;
        $ourProgram->link = $request->link;

        if ($request->hasFile('image')) {
            if (!empty($ourProgram->image) && file_exists(($ourProgram->image))) {
                unlink(($ourProgram->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $imageDirectory = 'uploads/program/';
            $request->image->move(($imageDirectory), $imageName);
            $ourProgram->image = $imageDirectory . $imageName;
        }

        $ourProgram->save();

        return redirect()->route('ourProgram.index')
            ->with('success', 'Data updated successfully.');
    }

    public function destroy($id)
    {
        $ourProgram = OurProgram::findOrFail($id);

        if (!empty($ourProgram->image) && file_exists(($ourProgram->image))) {
            unlink(($ourProgram->image));
        }

        $ourProgram->delete();

        return redirect()->route('ourProgram.index')
            ->with('success', 'Data deleted successfully.');
    }
}
