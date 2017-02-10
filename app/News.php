<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'news';

     /**
     * Get the user that owns the news.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
