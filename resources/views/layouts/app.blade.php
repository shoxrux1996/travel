<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    @yield('styles')
    <style>
        #navigation {
            background-color: #FF5F49;
            /*margin-top: 65px;*/
            vertical-align: middle;
        }

        .dropdown-toggle, .nav-link {
            color: whitesmoke;
        }

        .dropdown-toggle:hover, .nav-link:hover {
            color: white;
        }

        .icon-item {
            color: #888;
        }

        .icon-item:hover {
            color: #444;
        }

        @media (min-width: 768px) {
            .navbar-brand {
                position: absolute;
                /*width: 100%;*/
                /*left: 46%;*/
                text-align: center;
                margin: -21px auto;
                width: 100px;
                height: 100px;
                background-color: white;
                border: 2px solid #FF5F49;
                transform: rotate(45deg);
            }
        }

        .navbar-toggler-icon {
            color: white;
            padding-top: 4px;
        }

        #logo {
            padding: 16px;
            width: 92%;
            text-align: center;
            margin: 0 auto;
            transform: rotate(-45deg);
        }
    </style>
</head>
<body>
<div id="app">
    <nav class="navbar bg-light">
        <div class="container">
            <ul class="nav left">
                <li class="nav-item">
                    <a class="nav-link icon-item" href="#">
                        <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon-item" href="#">
                        <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon-item" href="#">
                        <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon-item" href="#">
                        <i class="fa fa-telegram fa-2x" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav right">
                <li class="nav-item icon-item">
                    <i class="fa fa-phone" aria-hidden="true"> </i>
                    call us: + 998 71 123 45 67
                </li>
            </ul>
        </div>
    </nav>
    <nav id="navigation" class="navbar navbar-expand-lg justify-content-between">
        <div class="container">
            <a class="navbar-brand fixed-top" href="#">
                <img id="logo" src="{{ asset('resources/Logo.png') }}"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropDown_1" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            All Tours
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropDown_1">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropDown_2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Transportation
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropDown_2">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item mr-sm-0">
                        <a class="nav-link" href="#">Hotels</a>
                    </li>
                </ul>
                <ul class="navbar-nav my-2 my-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropDown_2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Visa
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropDown_2">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item mr-sm-0">
                        <a class="nav-link" href="#">News</a>
                    </li>
                    <li class="nav-item mr-sm-0">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropDown_2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Language
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropDown_2">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</div>
<script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
@yield('scripts')
</body>
</html>