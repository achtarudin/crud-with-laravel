<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function items(){
        return $this->belongTo('App\Item');
    }
}
