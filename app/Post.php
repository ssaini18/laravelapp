<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function getShortContentAttribute() {

    	return substr($this->content, 0, random_int(200, 300)).'...' ;
    }
}
