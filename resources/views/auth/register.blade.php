<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABE - Sign up</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('')}}assets/css/login.css">
</head>

<body>
<div class="login-container">
    <div class="login-header">
        <ul class="menu-left" style="position: absolute !important;
    padding: 20px 10px;
    left: 25px;">
            <li>
                <a href="/" class="theme-color text-10 theme-link">Home</a>
            </li>
        </ul>
        <ul class="menu-right">
            <li>
                <a class="theme-color text-10 theme-link" href="{{route('login')}}">Login</a>
            </li>
            <li>
                <a class="theme-color text-10 theme-link" href="dashboard.html">Dashboard</a>
            </li>
        </ul>
    </div>

    <form class="login-wrapper" method="post" action="{{route('register')}}">
        {{csrf_field()}}
        @include('partials.alerts')
        <p class="icon-paragraph">A</p>
        <small>Enter your credentials to register </small>
        <div class="input-wrapper">
            <input type="text" placeholder="full name" name="name">
            <button class="login-button"><i class="fa fa-user"></i></button>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="email" name="email">
            <button class="login-button"><i class="fa fa-envelope"></i></button>
        </div>
        <div class="input-wrapper">
            <input type="password" placeholder="password" name="password">
            <button class="login-button"><i class="fa fa-lock"></i></button>
        </div>
        <div class="input-wrapper">
            <input type="password" placeholder="confirm password" name="password_confirmation">
            <button class="login-button"><i class="fa fa-lock"></i></button>
        </div>
        <button class="btn-login">Sign up</button>

        <a href="{{route('login')}}" class="anchor-link">I have an account <i class="fa fa-sign-in"></i></a>
    </form>

</div>
<div class="social-wrapper">
    <a href="javascript:;"><i class="fa fa-facebook"></i></a>
    <a href="javascript:;"> <i class="fa fa-twitter"></i></a>
    <a href="javascript:;"><i class="fa fa-instagram"></i></a>
</div>
</body>

<script>
    let alert_closers = document.getElementsByClassName('close-alert');
    Array.prototype.forEach.call(alert_closers,function(closer){
        addEventListener(closer,function(){
            console.log("You clicked a close")
            let alerts = document.getElementsByClassName('custom-alert');
            Array.prototype.forEach.call(alerts,function (el) {
                el.classList.add('hide')
            })
        })
    })
</script>
</html>