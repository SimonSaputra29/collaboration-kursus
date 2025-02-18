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

    public function store(Request $request)
    {
        $request->validate([

        ]);

        Team::create([

        ]);

        return redirect()->route('')->with('', '');
    }
}
