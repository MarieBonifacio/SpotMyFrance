<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag_place extends Model
{
    protected $fillable = [
        'id_tag',
        'id_place',
    ];
}
