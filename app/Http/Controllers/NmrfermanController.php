<?php

namespace App\Http\Controllers;

use App\About;
use App\Models\Nmrferman;
use Illuminate\Http\Request;

class NmrfermanController extends Controller
{
    public function NmrfermanView($slug)
    {
        $nmrferman = Nmrferman::findBySlug($slug);
        return view('nmrferman', compact('nmrferman'));

    }
}
