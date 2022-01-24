<?php

namespace App\Http\Controllers;

use App\About;
use App\Models\Page;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class AboutController extends Controller
{
    public function AboutView($slug)
    {
        $about = About::findBySlug($slug);
        return view('dinamic', compact('about'));

    }
}
