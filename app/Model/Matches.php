<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
  public function sonuc(){
    return $this->belongsTo('App\Model\Sonuc','status_id');
  }
}
