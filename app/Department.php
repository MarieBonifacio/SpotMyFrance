<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'region_code',
        'code',
        'name',
        'slug',
    ];
}
