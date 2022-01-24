<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactView($slug)
    {
        $contact = Contact::findBySlug($slug);
        return view('contact', compact('contact'));

    }
}
