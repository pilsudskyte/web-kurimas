<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    public function status() {

        return $this->hasMany('App\Status', 'id', 'status_id');
      }
    }
