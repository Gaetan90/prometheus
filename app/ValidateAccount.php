<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValidateAccount extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'validateaccount';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    public $timestamps = false;
}
