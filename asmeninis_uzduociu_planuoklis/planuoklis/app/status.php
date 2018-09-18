<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    protected $table = "statuses";
    
    public function task() {

      return $this->hasOne('App\Task', 'status_id','id');
    }
}
