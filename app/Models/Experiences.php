<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    protected $fillable = [
        'post',
        'place',
        'duty',
        'published_start',
        'published_end'
    ];
}
