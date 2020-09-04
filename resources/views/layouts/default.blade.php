<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABE - @yield('site-title','ABE SITE SLOGAN')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}vendors/modal-video/css/modal-video.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}vendors/slick-master/slick/slick.css">
    <link rel="stylesheet" href="{{asset('')}}assets/vendors/izitoast/css/izitoast.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/dashboard.css">

    <script type="text/javascript" src="{{asset('')}}vendors/jquery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}vendors/modal-video/js/jquery-modal-video.min.js"></script>
    <script src="{{asset('')}}assets/vendors/izitoast/js/izitoast.min.js"></script>
    @yield('header-scripts')
</head>

<body>

{{--ADD NAVIGATION HERE--}}
<nav class="navbar navbar-expand-lg navbar-light bg-light bb-theme fixed">
    <div class="search-overlay">
        <input type="text" placeholder="What are you looking for today?" class="text-muted">
        <button onclick="$('.search-overlay').removeClass('active')">X</button>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/"><span class="boldest text-black">AB<span class="theme-color">E</span></span><span class="theme-color" style="font-family: 'Trattatello';">xperience</span></a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <a href="javascript:;"  class="close-mobile-nav"></a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
            <li class="nav-item">
                <a class="nav-link" href="{{route('guest.speakers')}}">Speakers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Podcasts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Talks</a>
            </li>
            <li class="nav-item  dropdown-link">
                <a href="javascript:;" class="nav-link">Collections</a>
                <ul class="dropdown-menu-list">
                    <li class="dropdown-item">
                        <a href="{{route('guest.categories')}}" class="nav-link theme-color">
                            Category
                            <span class="text-muted text-9 d-block">The making of hollow graze</span>
                        </a>
                    </li>
                    <li class="dropdown-item">
                        <a href="javascript:;" class="nav-link  theme-color">
                            Topics
                            <span class="text-muted text-9 d-block">Get access to different speakers</span>
                        </a>
                    </li>
                    <li class="dropdown-item">
                        <a href="javascript:;" class="nav-link  theme-color">
                            Latest
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  dropdown-link">
                <a href="javascript:;" class="nav-link">Organization</a>
                <ul class="dropdown-menu-list">
                    <li class="dropdown-item">
                        <a href="{{route('guest.about')}}" class="nav-link theme-color">
                            About us
                            <span class="text-muted text-9 d-block">The making of hollow graze</span>
                        </a>
                    </li>
                    <li class="dropdown-item">
                        <a href="{{route('guest.contact')}}" class="nav-link  theme-color">
                            Contact us
                            <span class="text-muted text-9 d-block">Get access to different speakers</span>
                        </a>
                    </li>
                    <li class="dropdown-item">
                        <a href="javascrip:;" class="nav-link  theme-color">
                            Our Team
                        </a>
                    </li>
                    <li class="dropdown-item">
                        <a href="javascript:;" class="nav-link  theme-color">
                            Mission
                        </a>
                    </li>
                    <li class="dropdown-item">
                        <a href="javascript:;" class="nav-link  theme-color">
                            Vision
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        @guest()
        <a href="{{route('login')}}" class="mr-2 nav-link text-10 theme-color">Login</a>
            @else
        <a href="{{route('home')}}" class="mr-2 nav-link text-10 theme-color">Dashboard</a>

        @endguest
        {{--<form class="form-inline my-2 my-lg-0">--}}
            <button class="btn btn-outline-success my-2 my-sm-0" onclick="$('.search-overlay').addClass('active')"><i class="fa fa-search"></i></button>
        {{--</form>--}}
    </div>
</nav>
{{--END NAVIGATION--}}

{{--INSERT SITE CONTENT HERE--}}
<div class="content-wrapper py-5">
    @yield('site-content')
</div>
{{--END SITE CONTENT--}}

{{--START FOOTER SECTION--}}
<footer class="mt-5 bt-theme" style="border-top: 2px solid #690000">
    <div class="footer-about p-md-5 p-lg-5 p-sm-3 mt-sm-4" st>
        <h5 class="text-secondary underlined-lg mb-4"><span class="theme-color">About </span> The African Business Experience</h5>
        <p class="text-center text-10 text-muted text-sm-center"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        </p>
    </div>
    <div class="footer-navigation p-5 bg-dark m-0">
        <div class="row">
            <div class="col-md-3">
                <h6 class="text-white underlined text-10">Useful Links</h6>
                <ul class="footer-menu">
                    <li>
                        <a href="javascript:;" class="text-10 text-muted">Home</a>
                    </li>
                    <li>
                        <a href="javascript:;" class="text-10 text-muted">About</a>
                    </li>
                    <li>
                        <a href="javascript:;" class="text-10 text-muted">Contact</a>
                    </li>
                    <li>
                        <a href="javascript:;" class="text-10 text-muted">Terms</a>
                    </li>
                    <li>
                        <a href="javascript:;" class="text-10 text-muted">Privacy</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h6 class="text-white underlined text-10">Social Links</h6>
                <ul class="footer-menu">
                    <li>
                        <a href="javascript:;" class="text-10 text-muted"><i class="fa fa-facebook-square text-white"></i> Facebook</a>
                    </li>
                    <li>
                        <a href="javascript:;" class="text-10 text-muted"><i class="fa fa-twitter-square text-white"></i> Twitter</a>
                    </li>
                    <li>
                        <a href="javascript:;" class="text-10 text-muted"><i class="fa fa-whatsapp text-white"></i> Whatsapp</a>
                    </li>
                    <li>
                        <a href="javascript:;" class="text-10 text-muted"><i class="fa fa-youtube-square text-white"></i> YouTube</a>
                    </li>

                </ul>
            </div>
            <div class="col-md-3">
                <h6 class="text-white underlined text-10">Categories</h6>
            </div>
            <div class="col-md-3">
                <p class="text-muted text-10">Subscribe to our newsletter</p>
                <form action="{{route('guest.newsletter.subscribe')}}" method="post" data-role="simple-ajax-form">
                    {{csrf_field()}}
                    <div class="form-group inline-form-group" style="position: relative;">
                        <input type="text" name="email" required class="form-control text-10" placeholder="johndoe@domain.tld">
                        <button class="btn btn-sm btn-theme" type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="bottom-footer bg-black">
        <p class="text-center text-white">Copyright 2020 ABE</p>
    </div>
</footer>
{{--END FOOTER SECTION --}}
<script type="text/javascript" src="{{asset('')}}assets/vendors/jquery/popper.min.js"></script>
<script type="text/javascript" src="{{asset('')}}assets/vendors/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('')}}assets/vendors/slick-master/slick/slick.js"></script>
<script type="text/javascript" src="{{asset('')}}assets/js/dashboard.js"></script>
<script type="text/javascript" src="{{asset('')}}assets/js/app.js"></script>

<script>
    $(".video-modal-trigger").modalVideo({
        youtube:{
            controls:0,
            nocookie: true
        }
    });

    $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });

</script>

<script>
    //RANDOM BALLs
    function createMultipleBalls(config){
        config.color = config.color ? config.color :  100000 + Math.floor(Math.random() * 999999)
        for (let index = 0; index < config.balls_count; index++) {
            let color = config.randomColor ? 100000 + Math.floor(Math.random() * 999999) : config.color
            let ball = document.createElement('span');
            document.querySelector(config.parent).appendChild(ball);
            document.querySelector(config.parent).style.overflow = 'hidden';
            new Ball({
                element: ball,
                backgroundColor: `#${color}`,
                size: 10 + Math.random() * 100,
                speed: config.speed || 500 + Math.random() * 1000,
                x: 1 + Math.random() * 100,
                y: 1 + Math.random() * 100,
                borderRadius: `${config.borderRadius}%` || '0%',
                opacity: .4,
                zIndex: 0,
            })
        }
    }


    function Ball( config ) {
        this.speed = config.speed || 1000;
        this.x = config.x || 0;
        this.y = config.y || 0;
        this.xSteps = config.xSteps | 10;
        this.ySteps = config.ySteps || 10;
        this.el = config.element
        this.size = config.size
        this.onClickSpeed = config.onClickSpeed || 100
        this.shouldMoveForward = true;
        this.shouldMoveUpward = true
        this.width = config.boxWidth || false
        this.height = config.boxHeight || false
        this.el.style.backgroundColor = config.backgroundColor || "#000069",
            this.el.style.borderRadius = config.borderRadius || '50%',
            this.el.style.position = config.position || 'absolute'
        this.el.style.opacity = config.opacity || 1
        this.el.style.zIndex = config.zIndex || 0

        let self = this


        self.el.addEventListener("click",function () {
            self.shrink()
            let initial_speed = self.speed
            self.speed = self.onClickSpeed
            self.init()
            setTimeout(function () {
                self.speed = initial_speed
                clearInterval(self.interval)
                self.init()
            },5000);
        })


        this.setBoxSize = function(){
            if (self.height && self.width) {
                this.el.style.width = `${this.width}px`
                this.el.style.height = `${this.height}px`
                return;
            }

            return this.el.style.width = this.el.style.height =  `${this.size}px`
        }

        this.shrink = function(share = 2){
            if (self.height && self.width) {
                self.height = Math.ceil(self.height / share)
                self.width = Math.ceil(self.width / share)
                return
            }
            self.size = Math.floor(self.size / share)
            self.speed = Math.floor(self.speed / 2)

        }

        this.init = function () {
            console.log('Creating box')
            self.setBoxSize()
            self.el.style.transitionDuration = `${self.speed}ms`
            self.el.style.transitionProperty = `all`
            self.el.style.transitionTimingFunction = `linear`
            self.interval = setInterval(function () {
                self.el.transform = "rotateY(50deg)"
                self.shouldMoveForward ? self.x = (self.x + self.xSteps + Math.random(0,50))  : self.x -= self.xSteps + Math.random(0,50);
                self.shouldMoveUpward ? self.y += self.ySteps + Math.random(0,50) : self.y -= self.ySteps  + Math.random(0,50);
                self.el.style.left = `${self.x}%`
                self.el.style.top = `${self.y}%`

                self.x < 1 || self.x > 99 ? self.shouldMoveForward = !self.shouldMoveForward : null;
                self.y < 1 || self.y > 99 ? self.shouldMoveUpward = !self.shouldMoveUpward : null;

            },self.speed)
        }

        // Call the movement methods
        this.init()
    }


    createMultipleBalls({
        parent: '#writeUp',
        balls_count: 10,
        borderRadius: 50,
        randomColor: true,
        speed:600
    })
    //END RANDOM BALLS
</script>
@yield('footer-scripts')
</body>

</html>