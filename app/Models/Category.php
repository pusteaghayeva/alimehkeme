<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category As VoyagerCategoryModel;

class Category extends Model
{
    use HasFactory;
    public static function findBySlug($slug){
        return static::where('slug', $slug)->first();
    }
}
