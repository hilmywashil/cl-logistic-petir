<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AdminTestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->get();

        return view('admin.pages.testimonials.index', compact('testimonials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'star' => 'required|integer|min:1|max:5',
            'message' => 'required|string',
        ]);

        $imagePath = $request->file('image')->store('testimonials', 'public');

        Testimonial::create([
            'image' => $imagePath,
            'name' => $request->name,
            'company' => $request->company,
            'job' => $request->job,
            'star' => $request->star,
            'message' => $request->message,
        ]);

        return redirect()->route('admin.testimonials')->with('success', 'Testimonial created successfully.');
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'image' => 'nullable|image',
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'star' => 'required|integer|min:1|max:5',
            'message' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            if ($testimonial->image) {
                \Storage::disk('public')->delete($testimonial->image);
            }

            $imagePath = $request->file('image')->store('testimonials', 'public');
            $testimonial->image = $imagePath;
        }

        $testimonial->name = $request->name;
        $testimonial->company = $request->company;
        $testimonial->job = $request->job;
        $testimonial->star = $request->star;
        $testimonial->message = $request->message;
        $testimonial->save();

        return redirect()->route('admin.testimonials')->with('success', 'Testimonial updated successfully.');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->image) {
            \Storage::disk('public')->delete($testimonial->image);
        }

        $testimonial->delete();

        return redirect()->route('admin.testimonials')->with('success', 'Testimonial deleted successfully.');
    }

}