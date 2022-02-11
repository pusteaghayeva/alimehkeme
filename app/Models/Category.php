<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category As VoyagerCategoryModel;
use TCG\Voyager\Traits\Translatable;

class Category extends Model
{
    use HasFactory, Translatable;
    protected $translatable = ['title'];
    public static function findBySlug($slug){
        return static::where('slug', $slug)->first();
    }

    public function categoryCourt(){
        return static::with('translations')->where('id', 28)->get();
    }

    public function categoryDecision(){
        return static::with('translations')->where('id', 23)->get();
    }

    public function categoryArticle(){
        return static::with('translations')->where('id', 31)->get();
    }

    public function categoryConstitution(){
        return static::with('translations')->where('id', 21)->get();
    }

    public function categoryDecresorder(){
        return static::with('translations')->where('id', 32)->get();
    }

    public function categoryMmdecision(){
        return static::with('translations')->where('id', 33)->get();
    }

    public function categoryKmdecision(){
        return static::with('translations')->where('id', 34)->get();
    }

    public function categoryAmpdecision(){
        return static::with('translations')->where('id', 35)->get();
    }

    public function categoryNmrlegalact(){
        return static::with('translations')->where('id', 36)->get();
    }

    public function categoryInternationaldocument(){
        return static::with('translations')->where('id', 37)->get();
    }

//    public function categoryBulletin(){
//        return static::with('translations')->where('id', 39)->get();
//    }

    public function categorySupremedecision(){
        return static::with('translations')->where('id', 40)->get();
    }

    public function categoryAppelyasiya(){
        return static::with('translations')->where('id', 41)->get();
    }

}
