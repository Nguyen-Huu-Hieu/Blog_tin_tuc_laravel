<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function category()
    {
    	return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Models\Tag', 'post_tag', 'post_id', 'tag_id');
    }

    public function getThumbnail()
    {
    	if($this->thumbnail) {
    		return '/images/' . $this->thumbnail;
    	} 
    	return 'https://screenshotlayer.com/images/assets/placeholder.png';
    }
    
}
