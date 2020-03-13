<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'lang',
        'hold',
        'title'
    ];
}
