<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table = 'owners';

    public function car() {
    	return $this->hasOne('App\car', 'id', 'car_id');
    }
    public function owner() {
    	return $this->hasOne('App\owners', 'id', 'owners_id');
    }
}


