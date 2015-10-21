<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	// Mass assignment field
    protected $fillable = ['title'];

    public function posts()
	{
		return $this->hasMany('App\Post');
	}


}



