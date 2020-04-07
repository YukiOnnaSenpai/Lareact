<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    private $title;
    private $content;

    public function user() 
    {
        return $this->hasOne('App\User', 'user_id');

    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($value)
    {
        $this->title = $value;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($value)
    {
        $this->content = $value;
    }

}
