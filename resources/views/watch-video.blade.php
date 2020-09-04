@extends('layouts.default')
@section('site-content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8">
                <h6 class="text-muted"> <span class="badge badge-danger text-12"> <i class="fa fa-play"></i> Now Playing</span> {{$video->video_title}}</h6>
                <iframe src="{{$video->video_url}}" class="video-player" width="100%" frameborder="0"></iframe>
                <div class="mt-2 bg-muted row">
                    <div class="col-sm-5">
                        <small class="text-muted">Comments <i class="fa fa-comment">3</i></small>
                        <small class="ml-2 text-muted">Posted by - <i class="fa fa-user"></i> {{$video->owner->name}}</small>
                    </div>
                    <div class="col-sm-6">
                        <small  class="text-muted">Share:</small>
                        <a href="javascript:;" class="btn btn-sm btn-primary text-8"><i class="fa fa-facebook"></i>facebook</a>
                        <a href="javascript:;" class="btn btn-sm btn-success text-8"><i class="fa fa-whatsapp"></i> whatsapp</a>
                        <a href="javascript:;" class="btn btn-sm btn-primary text-8"><i class="fa fa-twitter"></i> twitter</a>
                        <a href="javascript:;" class="btn btn-sm btn-danger text-8"><i class="fa fa-instagram"></i> instagram</a>


                    </div>
                    <div class="col-sm-12 mt-2 mb-sm-4" style="margin-bottom: 20px">
                        <div class="d-flex justify-content-between">
                            <a href="" class="theme-color"><i class="fa fa-previous"></i> Previous</a>
                            <a href="" class="theme-color ">Next <i class="fa fa-next"></i></a>
                        </div>
                    </div>
                </div>

                <div class="d-block mt-4">
                    <a href="javascript:;" data-toggle="collapse" data-target="#videoDescription" class="btn theme-color btn-outline-danger btn-sm text-10 bt">See video description</a>
                    <div class="collapse py-3" id="videoDescription">
                        <div class="card card-body shadow-none text-muted text-10">
                            <h6 class="theme-color">What to know</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At dolores fugit hic ipsum provident similique sunt tempora tenetur voluptas voluptate. Aperiam autem enim excepturi harum hic tempora vel, vero voluptate.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi commodi cupiditate dignissimos eveniet illo laboriosam laudantium magni necessitatibus nemo nesciunt nisi porro quos, rerum sint suscipit temporibus totam voluptatibus.

                            </p>
                             <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at distinctio est maxime mollitia natus officia quia rem repellat similique? Atque cumque doloribus eius hic illum odit saepe tempora ullam!
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, maiores, unde. Amet at eveniet id necessitatibus nulla repudiandae saepe similique velit. Animi dolore ipsum necessitatibus placeat quam quas sint tempore?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mt-sm-4">
                <small class="theme-color mb-4">Related Videos</small>
                <div class="side-list">
                    <div class="side-list-item mb-1">
                        <div class="list-img-wrapper position-relative">
                            <a href="javascript:;"><img src="{{asset('')}}assets/img/courses/course3.jpg" class="img-full" alt=""></a>
                            <div class="centered-content-overlay">
                                <a href="javascript:;" class="fa fa-play-circle text-30 text-decoration-none"></a>
                            </div>
                        </div>
                        <a class="theme-color text-8" style="padding-left: 5px; line-height: 20px;" href="javascript:;">Pushing the limit and an averages.</a>
                    </div>
                    <div class="side-list-item mb-1">
                        <div class="list-img-wrapper position-relative">
                            <a href="javascript:;"><img src="{{asset('')}}assets/img/courses/course2.jpg" class="img-full" alt=""></a>
                            <div class="centered-content-overlay">
                                <a href="javascript:;" class="fa fa-play-circle text-30 text-decoration-none"></a>
                            </div>
                        </div>
                        <a class="theme-color text-8 pl-2" href="javascript:;">Pushing the limit.</a>
                    </div>
                    <div class="side-list-item mb-1">
                        <div class="list-img-wrapper position-relative">
                            <a href="javascript:;"><img src="{{asset('')}}assets/img/courses/course1.jpg" class="img-full" alt=""></a>
                            <div class="centered-content-overlay">
                                <a href="javascript:;" class="fa fa-play-circle text-30 text-decoration-none"></a>
                            </div>
                        </div>
                        <a class="theme-color text-8 pl-2" href="javascript:;">Pushing the limit.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection