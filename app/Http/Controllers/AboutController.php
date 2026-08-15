<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->get();

        return view('pages.about', compact('testimonials'));
    }

}
