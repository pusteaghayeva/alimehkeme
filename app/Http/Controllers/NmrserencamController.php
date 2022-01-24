<?php

namespace App\Http\Controllers;

use App\Models\Nmrferman;
use Illuminate\Http\Request;

class NmrserencamController extends Controller
{
  public function NmrserencamView($slug)
{
    $nmrserencam = Nmrserencam::findBySlug($slug);
    return view('nmrasserencam', compact('nmrserencam'));

}
}