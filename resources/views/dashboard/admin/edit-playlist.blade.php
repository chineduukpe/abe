@extends('layouts.user-dashboard')
@section('admin-dashboard-content')
    {{--{{dd($playlist->playlistVideos())}}--}}
    <div class="row py-4">
        <div class="col-sm-3">
            <img src="{{asset($playlist->playlist_image_url)}}" alt="{{$playlist->playlist}}"
                 class="img-responsive img-fluid" id="videoImagePreview"/>
            <div class="custom-form-group form-group mt-2">
                <div class="file-form-group">
                    <input type="file" name="video_cover_image" data-toggle="previewable-image"
                           data-target="#videoImagePreview"/>
                    <button class="file-upload-button btn btn-theme" type="button">Change</button>
                    <span class="upload-file-name"></span>
                </div>
            </div>
            <div class="d-block mt-3 mb-4">
                <h5 class="theme-color">{{$playlist->playlist}}</h5>
                <small class="text-muted">{{$playlist->playlistCategory->category}}</small>
            </div>
        </div>
        <div class="col-md-9">
            <h6 class="theme-color underlined">Playlist Items</h6>
            <div class="row">
                @if(count($playlist->playlistVideos()))
                    @foreach($playlist->playlistVideos() as $video)
                        <div class="col-md-2 mb-2" data-id="{{$video->pi_id}}">
                            <img src="{{asset($video->video_image_url)}}" alt="" class="img-fluid">
                            <small class="d-block text-muted">{{$video->video_title}}</small>
                            <div class="d-flex justify-content-around">
                                <a href="javascript:;" data-toggle="custom-modal" data-target="#removePlaylistItem"><i class="fa fa-trash text-danger"></i></a>
                                <a href="{{route('guest.videos.watch',$video->id)}}" target="_blank"><i class="fa fa-play-circle text-success"></i></a>
                            </div>
                        </div>
                    @endforeach
                    @else
                    <div class="col-sm-12">
                        <p class="text-muted">There are no videos in this playist yet</p>
                    </div>
                @endif

                <div class="col-sm-2 text-center">
                    <a href="javascript:;" style="font-size: 50pt" data-toggle="custom-modal"
                       data-target="#addPlaylistItem" class="theme-color"><i class="fa fa-plus-circle"></i></a>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('dashboard-title')
    Edit Playlist
@endsection

{{--ADD VIDEO TO PLAYLIST MODAL--}}
<form action="{{route('admin.playlist.add-video')}}" method="post">
    {{csrf_field()}}
    <div class="custom-modal" id="addPlaylistItem">
        <div class="card-modal-content">
            <div class="card-header bg-theme-color">
                <h6 class="text-white">Add item to playlist</h6>
            </div>
            <div class="card-body bg-white">
                <div class="form-group custom-form-group">
                    <input type="hidden" name="playlist_id" value="{{$playlist->id}}">
                    <select name="video_id" id="" class="form-control">
                        @if($shared_videos->count())
                            @foreach($shared_videos as $video)
                                <option value="{{$video->id}}">{{$video->video_title}}
                                    - {{$video->owner->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="card-footer bg-white">
                <button class="btn btn-secondary close-modal text-10">Close</button>
                <button class="btn btn-theme text-10" type="submit">Add <i class="fa fa-plus"></i></button>
            </div>
        </div>
    </div>
</form>
{{--END ADD VIDEO TO PLAYLIST MODAL--}}

{{--START DELETE VIDEO FROM PLAYLIST--}}
<form action="{{route('admin.playlist.remove-video')}}" method="post">
    {{csrf_field()}}
    {{method_field('delete')}}
    <div class="custom-modal" id="removePlaylistItem">
        <div class="card-modal-content">
            <div class="card-header bg-theme-color">
                <h6 class="text-white">Remove video to playlist</h6>
            </div>
            <div class="card-body bg-white">
                <p class="text-danger">Are you sure you want to remove this video from playlist?</p>
                <div class="form-group custom-form-group">
                    <input type="hidden" name="playlist_id" value="{{$playlist->id}}">
                    <input type="hidden" name="playlist_item_id" id="videoToRemove">

                </div>
            </div>
            <div class="card-footer bg-white">
                <button class="btn btn-secondary close-modal text-10">Close</button>
                <button class="btn btn-theme text-10" type="submit">Remove <i class="fa fa-trash"></i></button>
            </div>
        </div>
    </div>
</form>

{{--END REMOVE VIDEO FROM PLAYLIST--}}