<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        Contact::create($request->validate([
            'name' => 'required|string|max:225',
            'email' => 'required|email|string|max:255',
            'subject' => 'required|string',
            'message' => 'required|string'
        ]));

        return back();
    }

    public function browse()
    {
        return view('admin.contact');
    }
}
