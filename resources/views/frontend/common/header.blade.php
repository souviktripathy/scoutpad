<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>ScoutPads</title>
    <!-- fav -->
    <link rel="icon" href="" type="image/gif" sizes="16x16">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/theme/css/bootstrap.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/theme/css/animate.css') }}">
    <!-- Owl CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/theme/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/theme/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/theme/css/owl.theme.default.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/theme/css/font-awesome.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/theme/css/style.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    
</head>

<body>

    <header>

        <nav>
            <div class="menu-icon">
                <i class="fa fa-bars fa-2x"></i>
            </div>
            <div class="logo">
                <a href="{{ route('home-page') }}"><img src="{{ URL::asset('public/theme/images/logo.png') }}"></a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="{{ route('help-page') }}">Help</a></li>
                    @if(is_frontend_user_logged_in())
                    <li><a href="{{ route('user-dashboard-page') }}">My Account</a></li>
                    @else
                    <li><a href="{{ route('login-page') }}">Login</a></li>
                    @endif
                    
                    <li><a href="{{ route('learn-more') }}"><button class="btn heading-button">Learn More</button></a></li>
                </ul>
            </div>
        </nav>

    </header>