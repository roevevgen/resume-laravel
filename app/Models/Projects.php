<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'href',
        'projects',
        'description'
    ];
}
