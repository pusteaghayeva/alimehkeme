<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\About As VoyagerAboutModel;

class About extends Model
{
    use HasFactory;
    public static function findBySlug($slug){
        return static::where('slug', $slug)->first();
    }
}
