<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name',
    ];

    //relation tag lieu
    public function taglieu()
    {
        return $this->belongsToMany('App\Tag_Place', 'id_tag', 'id');
    }
}
