<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	// Mass assignment field
    protected $fillable = ['title','content','category_id'];


    

public function category()
{

	return $this->belongsTo('App\Category');
}

    
}

