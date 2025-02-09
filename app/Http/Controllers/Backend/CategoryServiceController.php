<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\CategoryService;
use Illuminate\Http\Request;

class CategoryServiceController extends Controller
{
    public function index()
    {
        $categoryService = CategoryService::all();
        return view('backend.database.service.category.index', compact('categoryService'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'overview' => 'required|string',
        ]);

        CategoryService::create([
            'title' => $request->title,
            'overview' => $request->overview,
        ]);

        return redirect()->route('')->with('succes', 'Category berhasil ditambahkan');
    }
}
