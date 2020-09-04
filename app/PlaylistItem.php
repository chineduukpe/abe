<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlaylistItem extends Model
{
    protected $fillable = [
        'playlist_id','video_id'
    ];
    //
    public function playlist(){
        return $this->belongsTo('App\Playlist','playlist_id');
    }

    public function videos(){
        return $this->belongsTo('App\Video','video_id');
    }
}
