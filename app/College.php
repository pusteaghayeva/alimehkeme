<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class College extends Model
{
    use HasFactory, Translatable;

    protected $translatable = ['title', 'content', 'slug', 'name', 'year', 'position','education'];

    public static function findBySlug($slug)
    {
        return static::withTranslations(Session::get('locale'))->where('slug', $slug)->first();
    }
}
