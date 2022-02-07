<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Category extends Model
{
    use Translatable;
    protected $translatable = ['title', 'slug'];
}
