<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // LIER MODÈLE EVENT AU MODÈLE USER
    public function users() {
        return $this->belongsToMany('App\User');
    }
}
