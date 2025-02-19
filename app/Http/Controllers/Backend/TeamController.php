<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Configuration;
use App\Models\Backend\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $configuration = Configuration::first();
        $teams = Team::all();
        return view('backend.database.team.index', compact('configuration', 'teams'));
    }

    public function create()
    {
        $configuration = Configuration::first();
        return view('backend.database.team.create', compact('configuration'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'github' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'phone_number' => 'nullable|string|max:15',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(('uploads/team_images'), $imageName);
            $imagePath = 'uploads/team_images/' . $imageName;
        }

        Team::create([
            'name' => $request->name,
            'role' => $request->role,
            'image' => $imagePath,
            'github' => $request->github,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'phone_number' => $request->phone_number,
        ]);

        return redirect()->route('team.index')->with('success', 'Team member added successfully!');
    }

    public function show($id)
    {
        $team = Team::findOrFail($id);
        return view('team.show', compact('team'));
    }

    public function edit($id)
    {
        $configuration = Configuration::first();
        $team = Team::findOrFail($id);
        return view('backend.database.team.edit', compact('team', 'configuration'));
    }

    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'github' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'phone_number' => 'nullable|string|max:15',
        ]);

        if ($request->hasFile('image')) {
            if ($team->image && file_exists(($team->image))) {
                unlink(($team->image));
            }
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(('uploads/team_images'), $imageName);
            $team->image = 'uploads/team_images/' . $imageName;
        }

        $team->update([
            'name' => $request->name,
            'role' => $request->role,
            'github' => $request->github,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'phone_number' => $request->phone_number,
        ]);

        return redirect()->route('team.index')->with('success', 'Team member updated successfully!');
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);

        if ($team->image && file_exists(($team->image))) {
            unlink(($team->image));
        }

        $team->delete();
        return redirect()->route('team.index')->with('success', 'Team member deleted successfully!');
    }
}
