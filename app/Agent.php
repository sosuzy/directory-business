<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model

{
	protected $guarded = [];
      public function user()
    {
        return $this->belongsTo('App\User');
    }

      public function region()
    {
        return $this->belongsTo('App\Regions');
    }
}
