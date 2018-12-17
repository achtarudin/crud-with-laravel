<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public function items(){
        return $this->belongTo('App\Item');
    }
}
