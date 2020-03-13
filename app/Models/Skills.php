<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'skill',
        'percent'
    ];
}
