@extends('layouts/default')
@section('site-content')
    <div class="container-fluid">
        <div class="banner-wrapper">
            <div class="banner-item">
                <img src="{{asset('')}}assets/img/banner/tabebanner1.jpg" style="height: 70vh" class="img-full" alt="">
                <div class="banner-img-overlay"  style="position: absolute; top: 120px; width: 40%; left: 20px; z-index: 5">
                    <h2 class="theme-color">Welcome to <span class="text-muted">The African Business Experience</span></h2>
                    <p class="text-muted text-center mt-5 pl-3" style="border-left: 5px solid #680000;">Building the next generation african business. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus aliquam cumque deserunt esse iste possimus quam</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        {{--TRENDING NOW SECTION--}}
        <div class="row mt-5 courses-section ">
            @include('partials.alerts')
            <div class="col-sm-12">
                <h6 class="theme-color underlined mb-3">Trending Now</h6>
            </div>
            <div class="col-sm-12 ">
                <h6><span class="category-badge bg-theme-color text-white p-2 text-10" style="position: relative;top: 20px;z-index: 2;">Trending Now</span></h6>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <img src="assets/img/courses/course1.jpg">
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
                            <a href="javascript:;" data-video-id='5slBCG8X34s' class="video-modal-trigger">Watch Demo <i
                                        class="fa fa-play-circle"></i></a>
                        </div>
                        <h6 class="pl-2 mt-5">Introduction to compiler construction 1</h6>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('guest.videos.watch',3)}}" class="btn btn-sm btn-block btn-outline-theme">Watch</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <img src="assets/img/courses/course2.jpg">
                        <div class="course-category">
                            <a href="javascript:;">Algorithms </a>
                            <div class="review-wrapper">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="card-body-overlay">
                            <a href="javascript:;" data-video-id='L61p2uyiMSo' class="video-modal-trigger">Watch Demo <i
                                        class="fa fa-play-circle"></i></a>
                        </div>
                        <h6 class="pl-2 mt-5">Introduction to basic algorithm concepts</h6>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-block btn-outline-theme">Watch</button>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <img src="assets/img/courses/course3.jpg">
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
                            <a href="javascript:;" data-video-id='5slBCG8X34s' class="video-modal-trigger">Watch Demo <i
                                        class="fa fa-play-circle"></i></a>
                        </div>
                        <h6 class="pl-2 mt-5">Understanding programming concepts</h6>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-block btn-outline-theme">Watch</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <img src="assets/img/courses/course4.jpg">
                        <div class="course-category">
                            <a href="javascript:;">Compiler Construction </a>
                            <div class="review-wrapper">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                            </div>
                        </div>
                        <div class="card-body-overlay">
                            <a href="javascript:;" data-video-id='L61p2uyiMSo' class="video-modal-trigger">Watch Demo <i
                                        class="fa fa-play-circle"></i></a>

                        </div>
                        <h6 class="pl-2 mt-5">Introduction to compiler construction 1</h6>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-block btn-outline-theme">Watch</button>
                    </div>
                </div>
            </div>
            <!-- SWITCH -->
            <div class="col-sm-12">
                <div class="switch">
                    <button class="switch-button"></button>
                </div>
            </div>
            <!-- END SWITCHES -->
        </div>
        {{--END TRENDING NOW SECTION--}}
    {{--START WRITEUP SECTION --}}
        <div class="row mt-5 shadow-sm fadeInOnScroll position-relative" id="writeUp">
            <div class="col-sm-12 col-md-7 p-4 pb-0">
                <h4 class="theme-color underlined-center bolder text-center">Next generation African business</h4>
                <p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                </p>
                <a href="javascript:;" class="btn m-3 btn-lg btn-theme text-white">See more...</a>
            </div>
            <div class="col-sm-12 col-md-4">
                <img src="assets/img/section1.webp" class="img-full">
            </div>
        </div>
        {{--END WRITEUP SECTION--}}
        {{--START BUSINESS INSIGHT SECTION --}}
        <div class="row mt-5 courses-section fadeInOnScroll">
            <div class="col-sm-12">
                {{--<h6 class="theme-color underlined mb-3">Business Insig</h6>--}}
            </div>
            <div class="col-sm-12 ">
                <h6><span class="category-badge bg-theme-color text-white p-2 text-10" style="position: relative;top: 20px;z-index: 2;">Business Insight</span></h6>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <img src="assets/img/courses/course1.jpg">
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
                        <h6 class="pl-2 mt-5">Introduction to compiler construction 1</h6>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-block btn-outline-theme">Watch</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <img src="assets/img/courses/course2.jpg">
                        <div class="course-category">
                            <a href="javascript:;">Algorithms </a>
                            <div class="review-wrapper">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="card-body-overlay">
                            <a href="javascript:;" data-video-id='L61p2uyiMSo' class="video-modal-trigger">Watch Demo <i
                                        class="fa fa-play-circle"></i></a>
                        </div>
                        <h6 class="pl-2 mt-5">Introduction to basic algorithm concepts</h6>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-block btn-outline-theme">Watch</button>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <img src="assets/img/courses/course3.jpg">
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
                        <h6 class="pl-2 mt-5">Understanding programming concepts</h6>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-block btn-outline-theme">Watch</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <img src="assets/img/courses/course4.jpg">
                        <div class="course-category">
                            <a href="javascript:;">Compiler Construction </a>
                            <div class="review-wrapper">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                            </div>
                        </div>
                        <div class="card-body-overlay">
                            <a href="javascript:;" data-video-id='L61p2uyiMSo' class="video-modal-trigger">Watch Demo <i
                                        class="fa fa-play-circle"></i></a>

                        </div>
                        <h6 class="pl-2 mt-5">Introduction to compiler construction 1</h6>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-block btn-outline-theme">Watch</button>
                    </div>
                </div>
            </div>
            <!-- SWITCH -->
            <div class="col-sm-12">
                <div class="switch">
                    <button class="switch-button"></button>
                </div>
            </div>
            <!-- END SWITCHES -->
        </div>
        {{--END BUSINESS INSIGHT SECTION--}}
        {{--START FINANCE SECTION --}}
        <div class="row mt-5 courses-section fadeInOnScroll">
            <div class="col-sm-12">
                <h6 class="theme-color underlined mb-3">Finance</h6>
            </div>
            <div class="col-sm-12 ">
                <h6><span class="category-badge bg-theme-color text-white p-2 text-10" style="position: relative;top: 20px;z-index: 2;">Finance</span></h6>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <img src="assets/img/courses/course1.jpg">
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
                        <h6 class="pl-2 mt-5">Introduction to compiler construction 1</h6>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-block btn-outline-theme">Watch</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <img src="assets/img/courses/course2.jpg">
                        <div class="course-category">
                            <a href="javascript:;">Algorithms </a>
                            <div class="review-wrapper">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="card-body-overlay">
                            <a href="javascript:;" data-video-id='L61p2uyiMSo' class="video-modal-trigger">Watch Demo <i
                                        class="fa fa-play-circle"></i></a>
                        </div>
                        <h6 class="pl-2 mt-5">Introduction to basic algorithm concepts</h6>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-block btn-outline-theme">Watch</button>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <img src="assets/img/courses/course3.jpg">
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
                        <h6 class="pl-2 mt-5">Understanding programming concepts</h6>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-block btn-outline-theme">Watch</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <img src="assets/img/courses/course4.jpg">
                        <div class="course-category">
                            <a href="javascript:;">Compiler Construction </a>
                            <div class="review-wrapper">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                            </div>
                        </div>
                        <div class="card-body-overlay">
                            <a href="javascript:;" data-video-id='L61p2uyiMSo' class="video-modal-trigger">Watch Demo <i
                                        class="fa fa-play-circle"></i></a>

                        </div>
                        <h6 class="pl-2 mt-5">Introduction to compiler construction 1</h6>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-block btn-outline-theme">Watch</button>
                    </div>
                </div>
            </div>
            <!-- SWITCH -->
            <div class="col-sm-12">
                <div class="switch">
                    <button class="switch-button"></button>
                </div>
            </div>
            <!-- END SWITCHES -->
        </div>
        {{--END FINANCE SECTION--}}
        {{--START JOURNAL AND PUBLISHING SECTION --}}
        <div class="row mt-5 courses-section fadeInOnScroll">
            <div class="col-sm-12">
                <h6 class="theme-color underlined mb-3">JOURNALS AND PUBLISHING</h6>
            </div>
            <div class="col-sm-12 ">
                <h6><span class="category-badge bg-theme-color text-white p-2 text-10" style="position: relative;top: 20px;z-index: 2;">Journals and Publishing</span></h6>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <img src="assets/img/courses/course1.jpg">
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
                        <h6 class="pl-2 mt-5">Introduction to compiler construction 1</h6>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-block btn-outline-theme">Watch</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <img src="assets/img/courses/course2.jpg">
                        <div class="course-category">
                            <a href="javascript:;">Algorithms </a>
                            <div class="review-wrapper">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="card-body-overlay">
                            <a href="javascript:;" data-video-id='L61p2uyiMSo' class="video-modal-trigger">Watch Demo <i
                                        class="fa fa-play-circle"></i></a>
                        </div>
                        <h6 class="pl-2 mt-5">Introduction to basic algorithm concepts</h6>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-block btn-outline-theme">Watch</button>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <img src="assets/img/courses/course3.jpg">
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
                        <h6 class="pl-2 mt-5">Understanding programming concepts</h6>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-block btn-outline-theme">Watch</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <img src="assets/img/courses/course4.jpg">
                        <div class="course-category">
                            <a href="javascript:;">Compiler Construction </a>
                            <div class="review-wrapper">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                            </div>
                        </div>
                        <div class="card-body-overlay">
                            <a href="javascript:;" data-video-id='L61p2uyiMSo' class="video-modal-trigger">Watch Demo <i
                                        class="fa fa-play-circle"></i></a>

                        </div>
                        <h6 class="pl-2 mt-5">Introduction to compiler construction 1</h6>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-block btn-outline-theme">Watch</button>
                    </div>
                </div>
            </div>
            <!-- SWITCH -->
            <div class="col-sm-12">
                <div class="switch">
                    <button class="switch-button"></button>
                </div>
            </div>
            <!-- END SWITCHES -->
        </div>
        {{--END JOURNAL AND PUBLISHING SECTION --}}

    </div>
    <!-- START AUDIO TRACK SECTIONS -->
    {{--<div class="container mt-5 fadeInOnScroll">--}}
        {{--<h5 class="theme-color underlined">Audio Podcasts</h5>--}}
        {{--<div class="audio-tracks-section row">--}}
            {{--<div class="col-sm-12 col-md-3 audio-item">--}}
                {{--<div class="row shadow">--}}
                    {{--<div class="col-sm-1 col-md-3 p-0 audio-img-wrapper" >--}}
                        {{--<img src="assets/img/album-covers/trapsoul.jpg" class="audio-img">--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-5 col-md-5 mt-sm-2">--}}
                        {{--<h6 class="theme-color text-10">Discussing the imact of polygamy in modern society</h6>--}}
                        {{--<small class="text-muted text-9">Bryson Tiller</small>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-2 col-md-2 d-flex activity-wrapper">--}}
                        {{--<a href="javascript:;"><i class="fa fa-heart text-muted"></i></a>--}}
                        {{--<a href="javascript:;"><i class="fa fa-thumbs-up text-muted"></i></a>--}}
                    {{--</div>--}}
                    {{--<hr>--}}
                    {{--<div class="play-button-wrapper p-2 ">--}}
                        {{--<a href="javascript:;" data-role='playAudio'><i class="fa fa-play-circle theme-color"></i>--}}
                            {{--<audio >--}}
                                {{--<source src="assets/audio/intro.mp3" type="audio/mpeg">--}}
                            {{--</audio>--}}
                        {{--</a>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-sm-12 col-md-3 audio-item">--}}
                {{--<div class="row shadow">--}}
                    {{--<div class="col-sm-1 col-md-3 p-0 audio-img-wrapper" >--}}
                        {{--<img src="assets/img/album-covers/trapsoul.jpg" class="audio-img">--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-5 col-md-5 mt-sm-2">--}}
                        {{--<h6 class="theme-color text-10">Discussing the imact of polygamy in modern society</h6>--}}
                        {{--<small class="text-muted text-9">Bryson Tiller</small>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-2 col-md-2 d-flex activity-wrapper">--}}
                        {{--<a href="javascript:;"><i class="fa fa-heart theme-color"></i></a>--}}
                        {{--<a href="javascript:;"><i class="fa fa-thumbs-up theme-color"></i></a>--}}
                    {{--</div>--}}
                    {{--<hr>--}}
                    {{--<div class="play-button-wrapper p-2 ">--}}
                        {{--<a href="javascript:;" data-role='playAudio'><i class="fa fa-play-circle theme-color"></i>--}}
                            {{--<audio >--}}
                                {{--<source src="assets/audio/intro.mp3" type="audio/mpeg">--}}
                            {{--</audio>--}}
                        {{--</a>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-sm-12 col-md-3 audio-item">--}}
                {{--<div class="row shadow">--}}
                    {{--<div class="col-sm-1 col-md-3 p-0 audio-img-wrapper" >--}}
                        {{--<img src="assets/img/album-covers/trapsoul.jpg" class="audio-img">--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-5 col-md-5 mt-sm-2">--}}
                        {{--<h6 class="theme-color text-10">Discussing the imact of polygamy in modern society</h6>--}}
                        {{--<small class="text-muted text-9">Bryson Tiller</small>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-2 col-md-2 d-flex activity-wrapper">--}}
                        {{--<a href="javascript:;"><i class="fa fa-heart text-muted"></i></a>--}}
                        {{--<a href="javascript:;"><i class="fa fa-thumbs-up theme-color"></i></a>--}}
                    {{--</div>--}}
                    {{--<hr>--}}
                    {{--<div class="play-button-wrapper p-2 ">--}}
                        {{--<a href="javascript:;" data-role='playAudio'><i class="fa fa-play-circle theme-color"></i>--}}
                            {{--<audio >--}}
                                {{--<source src="assets/audio/audio4.mp3" type="audio/mpeg">--}}
                            {{--</audio>--}}
                        {{--</a>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-sm-12 col-md-3 audio-item">--}}
                {{--<div class="row shadow">--}}
                    {{--<div class="col-sm-1 col-md-3 p-0 audio-img-wrapper" >--}}
                        {{--<img src="assets/img/album-covers/trapsoul.jpg" class="audio-img">--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-5 col-md-5 mt-sm-2">--}}
                        {{--<h6 class="theme-color text-10">Discussing the imact of polygamy in modern society</h6>--}}
                        {{--<small class="text-muted text-9">Bryson Tiller</small>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-2 col-md-2 d-flex activity-wrapper">--}}
                        {{--<a href="javascript:;"><i class="fa fa-heart text-muted"></i></a>--}}
                        {{--<a href="javascript:;"><i class="fa fa-thumbs-up text-muted"></i></a>--}}
                    {{--</div>--}}
                    {{--<hr>--}}
                    {{--<div class="play-button-wrapper p-2 ">--}}
                        {{--<a href="javascript:;" data-role='playAudio'><i class="fa fa-play-circle theme-color"></i>--}}
                            {{--<audio >--}}
                                {{--<source src="assets/audio/audio3.mp3" type="audio/mpeg">--}}
                            {{--</audio>--}}
                        {{--</a>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-sm-12 col-md-3 audio-item">--}}
                {{--<div class="row shadow">--}}
                    {{--<div class="col-sm-1 col-md-3 p-0 audio-img-wrapper" >--}}
                        {{--<img src="assets/img/album-covers/trapsoul.jpg" class="audio-img">--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-5 col-md-5 mt-sm-2">--}}
                        {{--<h6 class="theme-color text-10">Discussing the imact of polygamy in modern society</h6>--}}
                        {{--<small class="text-muted text-9">Bryson Tiller</small>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-2 col-md-2 d-flex activity-wrapper">--}}
                        {{--<a href="javascript:;"><i class="fa fa-heart text-muted"></i></a>--}}
                        {{--<a href="javascript:;"><i class="fa fa-thumbs-up text-muted"></i></a>--}}
                    {{--</div>--}}
                    {{--<hr>--}}
                    {{--<div class="play-button-wrapper p-2 ">--}}
                        {{--<a href="javascript:;" data-role='playAudio'><i class="fa fa-play-circle theme-color"></i>--}}
                            {{--<audio >--}}
                                {{--<source src="assets/audio/audio2.mp3" type="audio/mpeg">--}}
                            {{--</audio>--}}
                        {{--</a>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- END AUDIO TRACK SECTIONS -->
@endsection