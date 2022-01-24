<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Post As VoyagerPostModel;

class Post extends Model
{
    use HasFactory;
    public static function findBySlug($slug){
        return static::where('slug', $slug)->first();
    }
}
