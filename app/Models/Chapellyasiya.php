<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Models\Chapellyasiya As VoyagerChapellyasiyaModel;
use TCG\Voyager\Traits\Translatable;

class Chapellyasiya extends Model
{
//    use HasFactory;
//    public static function findBySlug($slug){
//        return static::where('slug', $slug)->first();
//    }
    use HasFactory, Translatable;
    protected $translatable = ['title', 'content', 'slug'];
    public static function findBySlug($slug){
        return static::withTranslations(Session::get('locale'))->where('slug', $slug)->first();
    }
}
