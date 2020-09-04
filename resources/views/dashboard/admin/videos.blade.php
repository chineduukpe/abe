@extends('layouts.user-dashboard')
@section('admin-dashboard-content')
    <div class="row">
        <div class="col-sm-12 m-2">
            {{--@include('partials.alerts')--}}
        </div>
        <div class="col-sm-12 p-2">
            <a href="javascript:;" class="btn btn-theme" data-toggle="show" data-target="#addVideoPanel"> Add Video <i class="fa fa-plus"></i></a>
        </div>
        <div class="col-sm-12 hide" id="addVideoPanel">

            <form action="{{route('admin.video.create')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row p-3">
                    <div class="col-md-6">
                        <div class="custom-form-group">
                            <label for="video_title" class="form-label">Video Title</label>
                            <input type="text" name="video_title" class="form-control"  required />
                        </div>
                        <div class="custom-form-group">
                            <label for="video_description" class="form-label">Video Description</label>
                            <textarea name="video_description" class="form-control" cols="30" rows="10"
                                      placeholder="Video Description"  required></textarea>
                        </div>
                        <div class="inline-form-group custom-form-group">
                            <input type="checkbox" name="is_featured" >
                            <label for="is_featured" class="form-label">Feature? </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="custom-form-group form-group">
                            <label for="topic" class="form-label">Topic</label>
                            <select name="topic" id="" class="form-control selectpicker"  required  data-live-search="true">
                                @foreach($shared_topics as $topic)
                                    <option value="{{$topic->id}}">{{$topic->topic}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="custom-form-group form-group">
                            <label for="topic" class="form-label">Category</label>
                            <select name="category" id="" class="form-control selectpicker"  required data-live-search="true">
                                @foreach($shared_categories as $category)
                                    <option value="{{$category->id}}">{{$category->category}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="custom-form-group form-group">
                            <label for="preview_url" class="form-label">Video preview URL</label>
                            <input type="text" class="form-control" name="video_preview_url"
                                   placeholder="https://youtube.com/embed/c4noiCoex"  required>
                        </div>
                        <div class="custom-form-group form-group">
                            <label for="video_url" class="form-label">Video URL</label>
                            <input type="text" class="form-control" name="video_url"
                                   placeholder="https://youtube.com/embed/c4noiCoex"  required>
                        </div>
                        <div class="custom-form-group form-group">
                            <div class="file-form-group">
                                <input type="file" name="video_cover_image"  required>
                                <label for="video_cover_image" class="form-label">Upload Video Cover Image</label>
                                <button class="file-upload-button btn btn-theme">Upload</button>
                                <span class="upload-file-name"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mt-2">
                        <button class="btn btn-theme">Create Video</button>
                    </div>
                </div>
            </form>
        </div>
        <table class="table table-responsive-sm slid-data-table">
            <thead>
            <tr>
                <th>Featured</th>
                <th>Title</th>
                <th>Likes</th>
                <th>Posted By</th>
                <th>Impression</th>
                <th>Date Published</th>
                <th>Comments</th>
            </tr>
            </thead>
            <tbody>

            @if($videos->count())
                @foreach($videos as $video)
                    <tr>

                        <td>
                            <div class="switch {{$video->is_featured ? 'active' : ''}}">
                                <button class="switch-button" data-role="switch_featured" data-id="{{$video->id}}"></button>
                            </div>
                        </td>
                        <td>{{$video->video_title}}</td>
                        <td>{{$video->likes()->count()}}</td>
                        <td>{{$video->owner->name}}</td>
                        <td>
                            <div class="progress-bar">
                                <span class="progress" style="width: 50%"></span>
                                <span class="label">50%</span>
                            </div>
                        </td>
                        <td>{{\App\Http\helpers\UtilityHelpers::humanTime($video->created_at)}}</td>
                        <td>{{$video->comments()->count()}}</td>
                        <td><a href="{{route('admin.video.edit',$video->id)}}">edit</a></td>
                    </tr>
                    @endforeach
                @else
                <p class="text-muted">There are no videos at the moment.</p>
                @endif

            </tbody>
        </table>
    </div>


    <!-- START ADD VIDEO MODAL -->

    <div id="addVideoModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    {{--END ADD VIDEO MODAL--}}
@endsection