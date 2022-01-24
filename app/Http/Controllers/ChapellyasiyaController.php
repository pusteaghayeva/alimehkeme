<?php

namespace App\Http\Controllers;

use App\About;
use App\Models\Chapellyasiya;
use Illuminate\Http\Request;

class ChapellyasiyaController extends Controller
{
    public function ChapellyasiyaView($slug)
    {
        $chapellyasiya = Chapellyasiya::findBySlug($slug);
        return view('chapellyasiya', compact('chapellyasiya'));

    }
}
