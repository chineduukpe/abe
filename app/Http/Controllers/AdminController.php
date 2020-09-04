<?php

namespace App\Http\Controllers;


use App\NewsletterSubscription;
use App\PlaylistItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\helpers\UtilityHelpers;
use Auth;

//IMPORTED MODELS\
use App\Category;
use App\Topic;
use App\Playlist;
use App\Video;

class AdminController extends Controller
{
    public function __construct(){
        View::share('shared_categories',Category::all());
        View::share('shared_topics',Topic::all());
        View::share('shared_videos',Video::all());
    }

    //
    public function video(){
        $videos = Video::orderBy('created_at','DESC')->paginate(50);
        return view('dashboard.admin.videos',compact('videos'));
    }

    public function addCategory(Request $request){
        $this->validate($request,[
           'category' => 'required|string',
        ]);

        Category::create($request->only('category'));
        return back()->with('success','New Category has been added successfully');
    }

    public function updateCategory(Request $request){
        $this->validate($request,[
            'category_id' => 'required|numeric',
            'category' => 'required|string',
        ]);

        $category = Category::find($request->category_id);
        $category->category = $request->category;
        $category->save();
        return back()->with('success','New Category has been added successfully');
    }

    public function deleteCategory($category_id){
        $category = Category::findOrFail($category_id);
        $category->delete();
        return back()->with('success','Category has been deleted.');
    }

//    TOPIC
    public function addTopic(Request $request){
        $this->validate($request,[
            'topic' => 'required|string',
        ]);

        Category::create($request->only('topic'));
        return back()->with('success','New Topic has been added successfully');
    }

    public function updateTopic(Request $request){
        $this->validate($request,[
            'topic_id' => 'required|numeric',
            'topic' => 'required|string',
        ]);

        $topic = Topic::findOrFail($request->topic_id);
        $topic->topic = $request->category;
        $topic->save();
        return back()->with('success','Topi has been updated successfully');
    }

    public function deleteTopic($topic_id){
        $topic = Topic::findOrFail($topic_id);
        $topic->delete();
        return back()->with('success','Topic has been deleted.');
    }

    public function createVideo(Request $request){
        $this->validate($request,[
            'video_title' => 'required|string',
            'video_description' => 'required|string',
            'video_preview_url' => 'required|string',
            'video_url' => 'required|string',
            'video_cover_image' => 'required|mimes:jpg,jpeg,png,svg,gif|max:20000',
            'category' => 'required|string',
            'topic' => 'required|string',
        ]);

        $video_image_url = '';
        try{
        $video_image_url = UtilityHelpers::uploadFileToServer($request->file('video_cover_image'),'/uploads/video-images/');

        }catch (\Exception $e){
            return back()->with('error','There was an error uploading the cover image to the server');
        }

        $video = new Video();
        $video->video_title = $request->video_title;
        $video->video_description = $request->video_description;
        $video->video_code = substr(md5(rand(3,9000000)),3,15);
        $video->video_preview_url = $request->video_preview_url;
        $video->video_url = $request->video_url;
        $video->category = $request->category;
        $video->video_image_url = $video_image_url;
        $video->topic = $request->topic;
        $video->video_length = 'unknown'; //Replace this with the video length
        $video->is_featured = $request->is_featured ? true : false;
        $video->owner_id = Auth::user()->id;

        $video->save();
        return back()->with('success','New video has been created successfully');
    }

    public function updateVideo(Request $request){
        $this->validate($request,[
            'video_title' => 'required|string',
            'video_description' => 'required|string',
            'video_preview_url' => 'required|string',
            'video_url' => 'required|string',
            'category' => 'required|string',
            'topic' => 'required|string',
            'video_id' => 'required|numeric'
        ]);

        $video = Video::findOrFail($request->video_id);

       if ($request->hasFile('video_cover_image')){
           try{
               $old_file_path = $video->video_image_url;
               $video->video_image_url = UtilityHelpers::uploadFileToServer($request->file('video_cover_image'),'/uploads/video-images/');
               UtilityHelpers::removeFileFromServer($old_file_path);
           }catch (\Exception $e){
               return back()->with('error','There was an error uploading the cover image to the server');
           }
       }

        $video->video_title = $request->video_title;
        $video->video_description = $request->video_description;
        $video->video_code = substr(md5(rand(3,9000000)),3,15);
        $video->video_preview_url = $request->video_preview_url;
        $video->video_url = $request->video_url;
        $video->category = $request->category;
        $video->topic = $request->topic;
        $video->owner_id = Auth::user()->id;
        $video->video_length = 'unknown'; //Replace this with the video length

        $video->save();
        return response(json_encode([
            'type' => 'success',
            'message' => 'video has been updated successfully',
            'title' => "Video Update:"
        ]));
    }

    public function editVideo($video_id){
        $video = Video::findOrFail($video_id);
        return view('dashboard.admin.edit-video',compact('video'));
    }


    public function changeFeaturedState(Request $request){
        $this->validate($request,[
            'video_id' => 'required|numeric',
        ]);

        $video = Video::findOrFail($request->video_id);
        $video->is_featured = !$video->is_featured;
        $video->save();
        return response(json_encode(['message' => 'Video featured state has been changed.','type' => 'success']));
    }


//    PLAYLIST METHODS
    public function playlist(){
        $playlists = Playlist::all();
        return view('dashboard.admin.playlist',compact('playlists'));
    }

    public function editPlaylist($playlist_id){
        $playlist = Playlist::findOrFail($playlist_id);
        return view('dashboard.admin.edit-playlist',compact('playlist'));
    }

    public function viewPlaylist(){

    }

    public function createPlaylist(Request $request){
        $this->validate($request,[
            'playlist' => 'required|string|max:200',
            'category' => 'required|numeric',
            'playlist_cover_image' => 'required|mimes:jpg,png,jpeg,svg|max:20000',
        ]);

        $playlist = new Playlist();
        try{
            $playlist->playlist_image_url = UtilityHelpers::uploadFileToServer($request->file('playlist_cover_image'),'/uploads/playlist-images/');
        }catch (\Exception $e){
            return back()->with('error','There was an error uploading the playlist file');
        }

        $playlist->category = $request->category;
        $playlist->playlist = $request->playlist;
        $playlist->playlist_description = $request->playlist_description;
        $playlist->owner = Auth::user()->id;
        $playlist->save();
        return redirect(route('admin.playlist.edit', $playlist->id))->with('success','New playlist created. Add videos to playlist');

    }

    public function addVideoToPlaylist(Request $request){
        $this->validate($request,[
            'video_id' => 'required|numeric',
            'playlist_id' => 'required|numeric',
        ]);

        $video = PlaylistItem::where('video_id',$request->video_id)->where('playlist_id',$request->playlist_id)->first();

        if ($video)
            return back()->with('warning','Video is already in the playlist');

        $new_video = new PlaylistItem();
        $new_video->video_id = $request->video_id;
        $new_video->playlist_id = $request->playlist_id;
        $new_video->save();

        return back()->with('success','Video has been add to the playlist');
    }

    public function removeVideoFromPlaylist(Request $request){
        $this->validate($request,[
            'playlist_item_id' => 'required|numeric',
        ]);

        $video = PlaylistItem::findOrFail($request->playlist_item_id);
        $video->delete();
        return back()->with('success','Video has been removed from the playlist');
    }

//END PLAYLIST METHODS

//    NEWSLETTER SUBSCRIBERS
    public function newsletterSubscribers(){
        $subscribers = NewsletterSubscription::orderBy('created_at','DESC')->paginate(50);
        return view('dashboard.admin.newsletter-subscribers',compact('subscribers'));
    }

//END NEWSLETTER SUBSCRIBERS METHODS

}
