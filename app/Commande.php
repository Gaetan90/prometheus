<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    public function pizza()
    {
        return $this->belongsTo('App\Pizza');
    }

     public function user()
    {
        return $this->hasOne('App\User');
    }
}
