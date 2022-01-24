<?php

namespace App\Http\Controllers;

use App\Models\Nmrcourt90;
use Illuminate\Http\Request;

class Nmrcourt90Controller extends Controller
{
    public function Nmrcourt90View($slug)
    {
        $nmrcourt90 = Nmrcourt90::findBySlug($slug);
        return view('nmrcourt90', compact('nmrcourt90'));

    }
}
