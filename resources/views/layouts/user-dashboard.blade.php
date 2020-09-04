<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="X-CSRF-TOKEN" content="{{csrf_token()}}">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/vendors/bootstrap-select/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .nav-toggle {
            color: #fff;
            line-height: 50px;
            font-size: 10pt;
            /*display: none;*/
        }

        .nav-toggle:hover {
            color: #f1f1f1;
            text-decoration: none;
        }

        .sidemenu .logo {
            display: block;
            font-size: 46pt;
            font-weight: 800;
            color: #690000;
            background: rgba(200, 200, 200, .3);
            width: 80px;
            height: 80px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            margin: 0 auto;
            text-align: center;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        .logo-wrapper {
            width: 100%;
            display: block;
            margin: 20px 0;
        }

        .main-content {
            left: 0;
            transition: left 500ms;
        }

        .main-content {
            left: 100px;
        }

        .main-content.collapsed {
            left: 250px;
        }

        .sidemenu {
            border-right: 1px solid #dfdfdf;
            min-height: 100vh;
            padding: 0;
            width: 100px;
            position: fixed;
            /*left: -251px;*/
            transition: 500ms;
            z-index: 100;
        }

        .sidemenu ul.menu li a,
        .sidemenu ul.menu li i {
            display: block;
            text-align: center;
        }

        .sidemenu.active {
            left: 0;
            width: 250px !important;
            max-width: 100% !important;
        }

        .sidemenu.active ul.menu li a,
        .sidemenu.active ul.menu li i {
            display: inline !important;
            text-align: left;
            font-size: .8rem;
        }

        .sidemenu .sidemenu-title {
            font-size: 16pt;
            margin-top: 20px;
            color: #690000;
            text-align: center;
        }

        .sidemenu ul.menu {
            display: block;
            margin: 0;
            padding: 0 0 0 10px;
        }

        .sidemenu ul.menu li {
            position: relative;
            list-style: none;
        }

        .sidemenu ul.menu li.active {
            border-right: 3px solid #600000;
        }

        .sidemenu ul.menu>li {
            margin: 10px 0;
        }

        .sidemenu ul.menu li a {
            font-size: .8rem;
            color: #888;
        }

        .sidemenu ul.menu li>i {
            margin: 0 10px;
            font-size: 1.5rem;
        }

        .sidemenu hr {
            color: #ffffff;
        }

        .sidemenu .submenu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 700ms;
            background: #f7f7f7;
            border-radius: 0 0 10px 10px;
            position: absolute;
            left: 100px;
            top: 0;
        }

        .sidemenu.active .submenu {
            position: relative;
            left: 0;
        }


        .sidemenu .submenu.active {
            max-height: 500px;
        }

        .sidemenu .submenu li {
            padding: 5px 10px;
        }

        .top-header {
            height: 50px;
            background: #690000;
            box-shadow: 0 0 10px rgba(0, 0, 0, .3);
        }
    </style>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/vendors/modal-video/css/modal-video.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/dashboard-nav.css">
    <link rel="stylesheet" href="{{asset('')}}assets/vendors/izitoast/css/izitoast.min.css">


    <script type="text/javascript" src="{{asset('')}}assets/vendors/jquery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}assets/vendors/modal-video/js/jquery-modal-video.min.js"></script>
    <script src="{{asset('')}}assets/vendors/izitoast/js/izitoast.min.js"></script>


</head>

<body>
<div class="container-fluid">
    <div class="col-sm-12 top-header">
        <a href="javascript:;" class="nav-toggle"><i class="fa fa-bars"></i></a>
        <h6 class="header-title"><a href="{{route('home')}}" class="text-white">Dashboard</a></h6>
        <div class="header-profile">
            <img src="assets/img/profile2.jpg">
            <a href="javascript:;" data-toggle="message-box"><i class="fa fa-caret-down text-white"></i></a>
        </div>
    </div>
    <div class="col-md-1 sidemenu">
        <div class="logo-wrapper">
            <h6 class="logo">A</h6>
        </div>
        <ul class="menu">
            <li class="menu-item">
                <i class="fa fa-home"></i><a href="{{route('home')}}"> Home</a>
            </li>
            <li class="menu-item">
                <i class="fa fa-list"></i><a href="javascript:;"> My Playlist</a>
            </li>
            <li class="menu-item">
                <i class="fa fa-heart"></i><a href="javascript:;"> Favourites</a>
            </li>
            <li class="menu-item">
                <i class="fa fa-film"></i> <a href="javascript:;">Recently Watched</a>
            </li>
            <li class="menu-item">
                <i class="fa fa-cog"></i><a href="javascript:;" data-toggle='submenu'>Account <i class="fa fa-caret-down"></i></a>
                <ul class="submenu">
                    <li class="submenu-item"><a href="javascript:;">Profile</a></li>
                    <li class="submenu-item"><a href="javascript:;">Settings</a></li>
                    <li class="submenu-item"><a href="javascript:;">Subscriptions</a></li>
                </ul>
            </li>
            <hr>
            <h6 class="theme-color text-center">Admin</h6>
            <li class="menu-item">
                <i class="fa fa-user"></i><a href="{{route('admin.video')}}"> Videos</a>
            </li>
            <li class="menu-item">
                <i class="fa fa-building"></i><a href="javascript:;"> Podcasts</a>
            </li>
            <li class="menu-item">
                <i class="fa fa-cog"></i><a href="javascript:;"> Series</a>
            </li>
            <li class="menu-item">
                <i class="fa fa-envelope"></i> <a href="{{route('admin.playlist')}}">Playlists</a>
            </li>
            <li class="menu-item">
                <i class="fa fa-bar-chart"></i> <a href="javascript:;">Users</a>
            </li>
            <li class="menu-item">
                <i class="fa fa-bar-envelope"></i> <a href="{{route('admin.newsletter.subscribers')}}">Newsletter Subscribers</a>
            </li>
        </ul>
        <a class="logout text-white" href="javascript:;" data-toggle="custom-modal" data-target="#logoutModal"> <i class="fa fa-sign-out text-white"></i> Logout</a>
    </div>

    <div class="col-md-11 main-content p-5" style="background-image: url('assets/img/bg1.jpg'); min-height: 100vh; background-size: cover;">
        <h6 class="page-title">@yield('dashboard-title','Dashboard')</h6>
        <hr>
        @include ('partials.alerts')
        @yield('admin-dashboard-content')

    </div>

    <div class="message-box shadow">
        <h6 class="theme-color text-10"> <i class="fa fa-envelope"></i> New messages</h6>
        <hr>
        <div class="block p-2 bg-white ">
            <div class="message-item p-1">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="assets/img/profile2.jpg">
                    </div>
                    <div class="col-sm-8">
                        <a href="javascript:;" class="block theme-color text-10"><span class="message-custom-badge bg-green text-8 p-2"></span>Your game is ready</a>
                        <small class="block text-muted text-10">Mr. Chinedu, we are pleased to announce ou...</small>
                    </div>
                </div>
            </div>
            <div class="message-item p-1">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="assets/img/profile3.jpg">
                    </div>
                    <div class="col-sm-8">
                        <a href="javascript:;" class="block theme-color text-10"><span class="message-custom-badge bg-blue text-8 p-2"></span>Hey Chinedu</a>
                        <small class="block text-muted text-10">Mr. Chinedu, we are pleased to announce ou...</small>
                    </div>
                </div>
            </div>
            <div class="message-item p-1">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="assets/img/profile.jpg">
                    </div>
                    <div class="col-sm-8">
                        <a href="javascript:;" class="block theme-color text-10"><span class="message-custom-badge bg-danger text-8 p-2"></span>Alert! Error found</a>
                        <small class="block text-muted text-10">Mr. Chinedu, we are pleased to announce ou...</small>
                    </div>
                </div>
            </div>
            <div class="message-item p-1">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="assets/img/profile3.jpg">
                    </div>
                    <div class="col-sm-8">
                        <a href="javascript:;" class="block theme-color text-10"><span class="message-custom-badge bg-blue text-8 p-2"></span>Welcome on board mate!</a>
                        <small class="block text-muted text-10">Thank you for signing up with meta cafe...</small>
                    </div>
                </div>
            </div>
            <!-- <hr> -->
            <a href="javascript:;" class="pull-right theme-color text-10">more...</a>
        </div>
    </div>
</div>
<footer>
    <p class="text-center text-10 theme-color">Copyright 2020 @ SLID Solutions</p>
</footer>

<div class="custom-modal" id="logoutModal">
    <div class="card-modal-content">
        <div class="card-header bg-danger">
            <h6 class="text-white">Logout</h6>
        </div>
        <div class="card-body bg-white">
            <p>Are you sure you want to logout?</p>
        </div>
        <div class="card-footer bg-white">
            <button class="btn btn-secondary close-modal text-10">Close</button>
            <button class="btn btn-danger text-10" onclick="$('#logoutForm').submit()">Logout</button>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('')}}assets/vendors/jquery/popper.min.js"></script>
<script type="text/javascript" src="{{asset('')}}assets/vendors/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('')}}assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="{{asset('')}}assets/js/dashboard.js"></script>
<script type="text/javascript" src="{{asset('')}}assets/js/app.js"></script>

<script>
    $(".video-modal-trigger").modalVideo({
        youtube:{
            controls:0,
            nocookie: true
        }
    });
</script>
<form action="{{route('logout')}}" method="post" id="logoutForm">
    {{csrf_field()}}
</form>
</body>

</html>