<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Traits\Translatable;

class Reyaset extends Model
{
    use HasFactory, Translatable;
    protected $translatable = ['content', 'slug'];
    public static function findBySlug($slug){
        return static::withTranslations(Session::get('locale'))->where('slug', $slug)->first();
    }
}
