<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $table = 'pizzas';

    public function commandes()
    {
        return $this->belongsToMany('App\Commande');
    }
}
