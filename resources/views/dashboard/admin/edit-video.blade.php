@extends('layouts.user-dashboard')
@section('admin-dashboard-content')
    <form action="{{route('admin.video.update')}}" method="post" enctype="multipart/form-data" id="updateVideoForm">
        {{csrf_field()}}
        {{method_field('patch')}}
        <div class="row py-4">
        <div class="col-sm-3">
            <img src="{{asset($video->video_image_url)}}" alt="{{$video->title}}" class="img-responsive img-fluid" id="videoImagePreview" />
            <div class="custom-form-group form-group mt-2">
                <div class="file-form-group">
                    <input type="file" name="video_cover_image" data-toggle="previewable-image" data-target="#videoImagePreview" />
                    <button class="file-upload-button btn btn-theme" type="button" >Change</button>
                    <span class="upload-file-name"></span>
                </div>
            </div>
            <div class="d-block mt-3">
                <h5 class="theme-color">{{$video->video_title}}</h5>
                <small class="text-muted">{{$video->videoCategory->category}}</small>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="custom-form-group form-group">
                <label for="video_title" class="form-label">Video Title</label>
                <input type="text" name="video_title" value="{{$video->video_title}}" class="form-control">
                <input type="hidden" name="video_id" value="{{$video->id}}" class="form-control">
            </div>
            <div class="custom-form-group form-group">
                <label for="video_title" class="form-label">Video description</label>
                <textarea name="video_description" class="form-control">{{$video->video_description}}</textarea>
            </div>
            <div class="custom-form-group form-group">
                <label for="video_preview_url" class="form-label">Video Preview URL</label>
                <input type="text" name="video_preview_url" value="{{$video->video_preview_url}}"
                       class="form-control">
            </div>
            <div class="custom-form-group form-group">
                <label for="video_preview_url" class="form-label">Video URL</label>
                <input type="text" name="video_url" value="{{$video->video_url}}" class="form-control">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="custom-form-group form-group">
                <label for="category" class="form-label">Video Category</label>
                <select name="category" class="form-control">
                    <option value="{{$video->category}}">{{$video->videoCategory->category}}</option>
                    @if($shared_categories)
                        @foreach($shared_categories as $category)
                            <option value="{{$category->id}}">{{$category->category}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="custom-form-group form-group">
                <label for="topic" class="form-label">Video Category</label>
                <select name="topic" class="form-control">
                    <option value="{{$video->topic}}">{{$video->videoTopic->topic}}</option>
                    @if($shared_topics)
                        @foreach($shared_topics as $topic)
                            <option value="{{$topic->id}}">{{$topic->topic}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group">
                <button class="btn-theme btn-sm btn" type="submit">Update</button>
            </div>
        </div>

        </div>
    </form>
@endsection

@section('dashboard-title')
    Edit Video
@endsection