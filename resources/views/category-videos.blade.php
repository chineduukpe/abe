@extends('layouts.default')
@section('site-content')
    <div class="container py-4">
        <div class="col-sm-12">
            <h6 class="theme-color underlined">{{$category->category}}</h6>
        </div>
        <div class="col-sm-12">
            <div class="row courses-section ">
                @if($category->categoryVideos()->count())
                    @foreach($category->categoryVideos as $video)
                        <div class="col-md-3">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <img src="{{asset('')}}assets/img/courses/course1.jpg" class="img-fluid" >
                                    <div class="course-category">
                                        <a href="javascript:;">Programming </a>
                                        <div class="review-wrapper">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="card-body-overlay">
                                        <a href="javascript:;" data-video-id='L61p2uyiMSo' class="video-modal-trigger">Watch Demo <i
                                                    class="fa fa-play-circle"></i></a>
                                    </div>
                                    <h6 class="text-10 p-2">Introduction to compiler construction 1</h6>
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('guest.videos.watch',3)}}" class="btn btn-sm btn-block btn-outline-theme">Watch</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    @endsection