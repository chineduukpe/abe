<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function categoryVideos(){
        return $this->hasMany('App\Video','category');
    }
}
