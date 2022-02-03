<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Traits\Translatable;


class Contact extends Model
{
//    use Translatable;
//    protected $translatable = ['title', 'description', 'slug'];

    use HasFactory, Translatable;
    protected $translatable = ['title', 'description', 'slug'];
    public static function findBySlug($slug){
        return static::withTranslations(Session::get('locale'))->where('slug', $slug)->first();
    }
}
