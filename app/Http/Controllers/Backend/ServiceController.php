<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\CategoryService;
use App\Models\Backend\Configuration;
use App\Models\Backend\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $configuration = Configuration::first();
        $services = Service::all();
        return view('backend.database.service.index', compact('configuration', 'services'));
    }

    public function create()
    {
        $configuration = Configuration::first();
        $categoryService = CategoryService::all();
        return view('backend.database.service.create', compact('configuration', 'categoryService'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_service_id' => 'required|exists:category_services,id',
            'title' => 'required|string|max:255',
            'overview' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'required|url',
        ]);

        Service::create([
            'category_service_id' => $request->category_service_id,
            'title' => $request->title,
            'overview' => $request->overview,
            'description' => $request->description,
            'link' => $request->link,
        ]);

        return redirect()->route('service.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Service $service)
    {
        $configuration = Configuration::first();
        $categoryService = CategoryService::all();
        return view('backend.database.service.edit', compact('configuration', 'service', 'categoryService'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'category_service_id' => 'required|exists:category_services,id',
            'title' => 'required|string|max:255',
            'overview' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'required|url',
        ]);

        $service->update($request->all());

        return redirect()->route('service.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('service.index')->with('success', 'Data berhasil dihapus');
    }

}
