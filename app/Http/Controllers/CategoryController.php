<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class CategoryController extends Controller
{
    public function CategoryView($slug)
    {
        $category = Category::findByTitle($slug);
        return view('dinamic', compact('category'));



    }
}
