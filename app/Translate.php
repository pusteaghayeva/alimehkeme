<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Translate extends Model
{
    use Translatable;
    protected $translatable = ['text'];
}
