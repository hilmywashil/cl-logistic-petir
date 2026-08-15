<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Service;
use App\Models\Testimonial;

class DashboardController extends Controller
{
    public function index()
    {
        $totalServices = Service::count();
        $totalTestimonials = Testimonial::count();
        $totalMessages = Message::count();

        $messages = Message::latest()->take(5)->get();

        return view('admin.pages.dashboard', compact('totalServices', 'totalTestimonials', 'totalMessages', 'messages'));
    }
}
