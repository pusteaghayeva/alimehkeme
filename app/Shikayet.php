<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Traits\Translatable;


class Shikayet extends Model
{
    use HasFactory, Translatable;
    protected $translatable = ['title', 'icon'];
    public static function findBySlug($slug){
        return static::withTranslations(Session::get('locale'))->where('slug', $slug)->first();
    }
}
