<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; 

class ContactController extends Controller
{
    public function submit(Request $request)
    {$request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);
    $data = $request->except('_token');

    Contact::create($data);
    return back()->with('success', 'Message sent successfully!');
    }
}
