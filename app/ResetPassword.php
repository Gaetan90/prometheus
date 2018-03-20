<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResetPassword extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reset_password';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token', 'password',
    ];

    public $timestamps = false;
}
