<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    public function users() {
        return $this->belongsToMany('App\User')->withPivot('miles', 'comments')->withTimestamps();
    }
}
