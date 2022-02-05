<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Models\Appelyasiya As VoyagerAppelyasiyaModel;
use TCG\Voyager\Traits\Translatable;


class Appelyasiya extends Model
{
    use HasFactory, Translatable;
    protected $translatable = ['title', 'content', 'slug'];
    public static function findBySlug($slug){
        return static::withTranslations(Session::get('locale'))->where('slug', $slug)->first();
    }
}
