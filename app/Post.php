<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'content'
    ];

    public function users() 
    {
        return $this->hasOne('App\User', 'user_id');

    }

}
