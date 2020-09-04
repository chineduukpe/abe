<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //

    public function owner(){
        return $this->belongsTo('App\User','owner_id');
    }

    public function likes(){
        return $this->hasMany('App\Like','video_id');
    }

    public function rating(){
        return $this->hasMany('App\Rating','video_id');
    }

    public function comments(){
        return $this->hasMany('App\Comment','video_id');
    }

    public function videoCategory(){
        return $this->belongsTo('App\Category','category','id');
    }

    public function videoTopic(){
        return $this->belongsTo('App\Topic','topic');
    }

    public function playlists(){
        return $this->belongsToMany('App\Playlist','playlist_items','playlist_id','video_id');
    }
}
