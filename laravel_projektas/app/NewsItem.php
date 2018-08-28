<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsItem extends Model
{
    // Kuri duombazes lentele bus naudojama siam modeliui
    protected $table = 'news';

    public function comments() {
    	/* 
    		https://laravel.com/docs/5.6/eloquent-relationships#one-to-one 
    	*/
    	return $this->hasMany('App\Comment', 'news_id', 'id');
    }

}
