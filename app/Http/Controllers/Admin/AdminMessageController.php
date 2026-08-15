<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class AdminMessageController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->get();

        return view('admin.pages.messages.index', compact('messages'));
    }

    public function destroy($id)
    {
        Message::findOrFail($id)->delete();

        return redirect()->route('admin.messages')->with('success', 'Message deleted successfully.');
    }
}
