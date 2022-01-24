<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AppealController extends Controller
{

    public function AppealView($slug)
    {
        $appeal = Appeal::findBySlug($slug);
        return view('appeal', compact('appeal'));

    }
}
