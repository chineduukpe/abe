<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Playlist extends Model
{
    //
    public function playlistVideos(){
        return DB::select('SELECT playlist_items.*, videos.*, playlist_items.id as pi_id from `playlists` JOIN `playlist_items` ON playlist_items.playlist_id=playlists.id JOIN `videos` ON videos.id=playlist_items.video_id WHERE playlists.id=?',[$this->id]);
    }

    public function playlistItems(){
        return $this->hasMany('App\PlaylistItem','playlist_id');
    }

    public function owner(){
        return $this->belongsTo('App\User','owner');
    }

    public function playlistCategory(){
        return $this->belongsTo('App\Category','category');
    }
}
