<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\CategoryService;
use App\Models\Backend\Configuration;
use Illuminate\Http\Request;

class CategoryServiceController extends Controller
{
    public function index()
    {
        $configuration = Configuration::first();
        $categoryServices = CategoryService::all();
        return view('backend.database.service.category.index', compact('configuration', 'categoryServices'));
    }

    public function create()
    {
        $configuration = Configuration::first();
        return view('backend.database.service.category.create', compact('configuration'));
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

        return redirect()->route('categoryService.index')->with('succes', 'Category berhasil ditambahkan');
    }

    public function edit($id)
    {
        $configuration = Configuration::first();
        $categoryService = CategoryService::findOrFail($id);
        return view('backend.database.service.category.edit', compact('configuration', 'categoryService'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required|string',
            'overview' => 'required|string',
        ]);

        $categoryService = CategoryService::findOrFail($id);

        $categoryService->title = $request->title;
        $categoryService->overview = $request->overview;

        $categoryService->save();

        return redirect()->route('categoryService.index')->with('success', 'Category update successfully');
    }

    public function destroy($id)
    {
        $categoryService = CategoryService::findOrFail($id);

        $categoryService->delete();

        return redirect()->route('categoryService.index')->with('success', 'Category deleted successfully');
    }
}
