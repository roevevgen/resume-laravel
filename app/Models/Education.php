<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'courses',
        'training',
        'published_start',
        'published_end'
    ];
}
