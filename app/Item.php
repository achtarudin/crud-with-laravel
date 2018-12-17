<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use Sluggable;

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    
    public function getRouteKeyName(){
        return 'slug';
    }

    public function skills(){
        return $this->hasMany('App\Skill', 'item_id');
    }
     public function experience(){
        return $this->hasMany('App\Experience');
    }

    public function setNameAttribute($name){
        $this->attributes['name'] =  title_case($name);
    }
}
