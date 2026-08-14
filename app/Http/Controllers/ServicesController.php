<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::oldest()->take(6)->get();

        return view('pages.services', compact('services'));
    }

}
