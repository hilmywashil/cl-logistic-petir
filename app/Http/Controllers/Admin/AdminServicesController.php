<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminServicesController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();

        return view('admin.pages.services.index', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $imagePath = $request->file('image')->store('services', 'public');

        Service::create([
            'image' => $imagePath,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.services')->with('success', 'Service created successfully.');
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'image' => 'nullable|image',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            if ($service->image) {
                \Storage::disk('public')->delete($service->image);
            }

            $imagePath = $request->file('image')->store('services', 'public');
            $service->image = $imagePath;
        }

        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();

        return redirect()->route('admin.services')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        if ($service->image) {
            \Storage::disk('public')->delete($service->image);
        }

        $service->delete();

        return redirect()->route('admin.services')->with('success', 'Service deleted successfully.');
    }
}
