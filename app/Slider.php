<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'slider';

    protected $fillable = ['hinh','url'];

    public $timestamps = false;
}
