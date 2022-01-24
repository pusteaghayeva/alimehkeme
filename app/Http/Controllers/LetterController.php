<?php

namespace App\Http\Controllers;

use App\About;
use App\Models\Letter;
use Illuminate\Http\Request;

class LetterController extends Controller
{
    public function LetterView($slug)
    {
        $letter = Letter::findBySlug($slug);
        return view('letter', compact('letter'));

    }
}
