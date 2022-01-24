<?php

namespace App\Http\Controllers;

use App\Models\Miapellyasiya;
use Illuminate\Http\Request;

class MiapellyasiyaController extends Controller
{
public function MiapellyasiyaView($slug)
{
    $miapellyasiya = Miapellyasiya::findBySlug($slug);
    return view('miapellyasiya', compact('miapellyasiya'));
}
}
