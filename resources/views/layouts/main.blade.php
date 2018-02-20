<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<!-- Mirrored from crenoveative.com/envato/tour-packer/detail-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jan 2018 09:00:33 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   {{--  <meta http-equiv="X-UA-Compatible" content="IE=edge"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    <meta name="author" content="I" />
   {{--  <meta name="description"
          content="HTML Responsive Template for Tour Agency or Company Based on Twitter Bootstrap 3.x.x"/>
    <meta name="keywords" content="tour package, holiday, hotel, vocation, booking, trip, travel, tourism, tourist"/>
    <meta name="author" content="crenoveative">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> --}}

    <!-- Fav and Touch Icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{asset('dist/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="{{asset('dist/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="{{asset('dist/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('dist/images/ico/apple-touch-icon-57-precomposed.png')}}">
    <link rel="shortcut icon" href="{{asset('dist/images/ico/favicon.png')}}">

    <!-- CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="{{asset('dist/bootstrap/css/bootstrap.min.css')}}" media="screen">
    <link href="{{asset('dist/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/component.css')}}" rel="stylesheet">

    <!-- CSS Font Icons -->
    <link rel="stylesheet" href="{{asset('dist/icons/ionicons/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('dist/icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{asset('dist/icons/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('dist/icons/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('dist/icons/rivolicons/style.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,300italic,300' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600,600italic,700,700italic'
          rel='stylesheet' type='text/css'>

    <!-- CSS Custom -->
    <link href="{{asset('dist/css/style.css')}}" rel="stylesheet">

    <link href="{{asset('dist/css/color-04.css')}}" rel="stylesheet">
    @yield('styles')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('dist/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('dist/js//respond.min.js')}}"></script>
    <![endif]-->

</head>

<body class="">
@yield('loader')
{{--<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade modal-login modal-border-transparent" id="loginModal" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <button type="button" class="btn btn-close close" data-dismiss="modal" aria-label="Close">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </button>

            <div class="clear"></div>

            <!-- Begin # DIV Form -->
            <div id="modal-login-form-wrapper">

                <!-- Begin # Login Form -->
                <form id="login-form">

                    <div class="modal-body pb-5">

                        <h4 class="text-center heading mt-10 mb-20">Sign-in</h4>

                        <button class="btn btn-facebook btn-block">Sign-in with Facebook</button>

                        <div class="modal-seperator">
                            <span>or</span>
                        </div>

                        <div class="form-group">
                            <input id="login_username" class="form-control" placeholder="username" type="text">
                        </div>
                        <div class="form-group">
                            <input id="login_password" class="form-control" placeholder="password" type="password">
                        </div>

                        <div class="form-group">
                            <div class="row gap-5">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="checkbox-block fa-checkbox">
                                        <input id="remember_me_checkbox" name="remember_me_checkbox" class="checkbox"
                                               value="First Choice" type="checkbox">
                                        <label class="" for="remember_me_checkbox">remember</label>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                                    <button id="login_lost_btn" type="button" class="btn btn-link">forgot pass?</button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">

                        <div class="row gap-10">
                            <div class="col-xs-6 col-sm-6 mb-10">
                                <button type="submit" class="btn btn-primary btn-block">Sign-in</button>
                            </div>
                            <div class="col-xs-6 col-sm-6 mb-10">
                                <button type="submit" class="btn btn-primary btn-block btn-inverse" data-dismiss="modal"
                                        aria-label="Close">Cancel
                                </button>
                            </div>
                        </div>
                        <div class="text-left">
                            No account?
                            <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                        </div>

                    </div>
                </form>
                <!-- End # Login Form -->

                <!-- Begin | Lost Password Form -->
                <form id="lost-form" style="display:none;">
                    <div class="modal-body pb-5">

                        <h3 class="text-center heading mt-10 mb-20">Forgot password</h3>
                        <div class="form-group mb-10">
                            <input id="lost_email" class="form-control" type="text" placeholder="Enter Your Email">
                        </div>

                        <div class="text-center">
                            <button id="lost_login_btn" type="button" class="btn btn-link">Sign-in</button>
                            or
                            <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                        </div>

                    </div>

                    <div class="modal-footer mt-10">

                        <div class="row gap-10">
                            <div class="col-xs-6 col-sm-6">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <button type="submit" class="btn btn-primary btn-inverse btn-block" data-dismiss="modal"
                                        aria-label="Close">Cancel
                                </button>
                            </div>
                        </div>

                    </div>

                </form>
                <!-- End | Lost Password Form -->

                <!-- Begin | Register Form -->
                <form id="register-form" style="display:none;">

                    <div class="modal-body pb-5">

                        <h3 class="text-center heading mt-10 mb-20">Register</h3>

                        <button class="btn btn-facebook btn-block">Register with Facebook</button>

                        <div class="modal-seperator">
                            <span>or</span>
                        </div>

                        <div class="form-group">
                            <input id="register_username" class="form-control" type="text" placeholder="Username">
                        </div>

                        <div class="form-group">
                            <input id="register_email" class="form-control" type="email" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <input id="register_password" class="form-control" type="password" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <input id="register_password_confirm" class="form-control" type="password"
                                   placeholder="Confirm Password">
                        </div>

                    </div>

                    <div class="modal-footer mt-10">

                        <div class="row gap-10">
                            <div class="col-xs-6 col-sm-6 mb-10">
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </div>
                            <div class="col-xs-6 col-sm-6 mb-10">
                                <button type="submit" class="btn btn-primary btn-inverse btn-block" data-dismiss="modal"
                                        aria-label="Close">Cancel
                                </button>
                            </div>
                        </div>

                        <div class="text-left">
                            Already have account?
                            <button id="register_login_btn" type="button" class="btn btn-link">Sign-in</button>
                        </div>

                    </div>

                </form>
                <!-- End | Register Form -->

            </div>
            <!-- End # DIV Form -->
        </div>
    </div>
</div>
<!-- END # MODAL LOGIN -->--}}
  <!-- Modal FeedBack-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">{{\Session::get('message')}}</h4>
                </div>
                <div class="modal-body">
                    <p>{{\Session::get('text')}}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                </div>
            </div>

        </div>
    </div>
    <!-- End Modal -->
<!-- start Container Wrapper -->
<div class="container-wrapper">
  
    <header id="header">

        <!-- start Navbar (Header) -->

        <nav class="navbar navbar-fixed-top navbar-sticky-function">
            <a class="navbar-brand2 bg-white fixed-top" href="{{route('home')}}" >
                <img id="logo" src="{{ asset('storage/'.setting('site.logo')) }}"/>
            </a>
            <div class="navbar-top bg-white fixed-height">

                <div class="container">

                    <div class="flex-row flex-align-middle">
                        <div class="flex-shrink flex-columns">
                            <a class="navbar-logo" href="{{route('home')}}">
                                <img src="{{asset('storage/'.setting('site.logo'))}}" alt="Logo"/>
                            </a>
                        </div>
                        <div class="flex-columns">
                            <div class="pull-left">
                                <div class="navbar-mini">
                                    <ul class="clearfix navbar-itmes">
                                            <li>
                                                <a class="" href="{{setting('site.facebook')}}">
                                                    <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="" href="{{setting('site.instagram')}}">
                                                    <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="" href="{{setting('site.telegram')}}">
                                                    <i class="fa fa-telegram fa-2x" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="" href="{{setting('site.facebook')}}">
                                                    <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
                                                </a>
                                            </li>

                                    </ul>
                                </div>

                            </div>
                            <div class="pull-right">
                                <div class="navbar-mini">
                                        <div class="navbar-phone"><i class="fa fa-phone"></i> {{setting('site.phone')}}</div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="navbar-bottom navbar-primary hidden-sm hidden-xs">

                <div class="container">

                    <div class="row">
                            <div id="navbar" class="collapse navbar-collapse navbar-arrow">
                                    <ul class="nav navbar-nav" id="responsive-menu">
                                        <li class="navbar-left"><a href="{{route('home')}}">Home</a>
                                        </li>
                                        <li class="navbar-left"><a href="{{route('tour.list')}}">Tours</a>
                                        </li>
                                        <li class="navbar-left"><a href="{{route('blog.list')}}">Blog</a></li>
                                        <li class="navbar-left"><a href="{{route('about')}}">About Us</a></li>


                                        <li class="navbar-right"><a href="{{route('faqs')}}">FAQ</a></li>
                                        <li class="navbar-right"><a href="#">{{App::isLocale('uz') ? "O'zbek" : (App::isLocale('en') ? "English" : "Русский")}}</a>
                                            <ul>
                                                @if(App::isLocale('uz'))
                                                    <li>
                                                        <a href="{{route('lang.switch', "ru")}}">Русский</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('lang.switch', "en")}}">English</a>
                                                    </li>
                                                @elseif(App::isLocale('en'))
                                                    <li>
                                                        <a href="{{route('lang.switch', "ru")}}">Русский</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('lang.switch', "uz")}}">O'zbek</a>
                                                    </li>
                                                @else
                                                    <li>
                                                        <a href="{{route('lang.switch', "uz")}}">O'zbek</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('lang.switch', "en")}}">English</a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </li>
                                        <li class="navbar-right"><a href="{{route('contact')}}">Contact us</a></li>



                                    </ul>

                            </div><!--/.nav-collapse -->
                       {{-- <div class="col-sm-6">

                            <div class="navbar-phone"><i class="fa fa-phone"></i> Call us: +66 28 878 5452</div>

                        </div>--}}

                    </div>

                </div>

            </div>

            <div id="slicknav-mobile"></div>

        </nav>
        <!-- end Navbar (Header) -->

    </header>

    <div class="clear"></div>

    @yield('content')

    <footer class="footer scrollspy-footer"> <!-- add scrollspy-footer to stop sidebar scrollspy -->

        <div class="container">

            <div class="main-footer">

                <div class="row">

                    <div class="col-xs-12 col-sm-5 col-md-3">

                        {{--<div class="footer-logo">
                            --}}{{--<img src="{{asset('dist/images/logo-white.png')}}" alt="Logo"/>--}}{{--
                            <h4 class="text-white">Silk Road Asia Travel</h4>
                        </div>--}}

                        <h5 class="footer-title">Silk Road Asia Travel</h5>
                        <p class="footer-address">{{setting('site.address')}}<br/>
                            <i class="fa fa-phone"></i> {{setting('site.phone')}} <br/>
                            <i class="fa fa-envelope-o"></i> <a href="#">{{setting('site.email')}}</a>
                        </p>

                        <div class="footer-social">

                            <a href="{{setting('site.facebook')}}" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                        class="fa fa-facebook"></i></a>
                            <a href="{{setting('site.telegram')}}" data-toggle="tooltip" data-placement="top" title="Telegram"><i
                                        class="fa fa-telegram"></i></a>
                            <a href="{{setting('site.google')}}" data-toggle="tooltip" data-placement="top" title="Google Plus"><i
                                        class="fa fa-google-plus"></i></a>
                            <a href="{{setting('site.instagram')}}" data-toggle="tooltip" data-placement="top" title="Instagram"><i
                                        class="fa fa-instagram"></i></a>

                        </div>

                        <p class="copy-right">&#169; Copyright 2018 IUTLab. All Rights Reserved</p>

                    </div>

                    <div class="col-xs-12 col-sm-7 col-md-9">

                        <div class="row gap-10">

                            <div class="col-xs-12 col-sm-4 col-md-3 col-md-offset-3 mt-30-xs">

                                <h5 class="footer-title">About Silk Road</h5>

                                <ul class="footer-menu">

                                    <li><a href="#">Who we are</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Company history</a></li>
                                    <li><a href="#">Legal</a></li>

                                </ul>

                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-3 mt-30-xs">

                                <h5 class="footer-title">Customer service</h5>

                                <ul class="footer-menu">

                                    <li><a href="#">Payment</a></li>
                                    <li><a href="{{route('contact')}}">Contact us</a></li>
                                    <li><a href="{{route('faqs')}}">FAQ</a></li>
                                    <li><a href="{{route('contact')}}">Site map</a></li>

                                </ul>

                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-3 mt-30-xs">

                                <h5 class="footer-title">Others</h5>

                                <ul class="footer-menu">

                                    <li><a href="{{route('tour.list')}}">Destinations</a></li>
                                    <li><a href="{{route('blog.list')}}">Blog</a></li>
                                    <li><a href="#">Pre Departure Planning</a></li>
                                    <li><a href="{{route('faqs')}}">Visas</a></li>
                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </footer>

</div>  <!-- end Container Wrapper -->


<!-- start Back To Top -->
<div id="back-to-top">
    <a href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end Back To Top -->


<!-- JS -->
<script type="text/javascript" src="{{asset('dist/js/jquery-1.11.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/js/jquery.waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/js/SmoothScroll.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/js/jquery.slicknav.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/js/jquery.placeholder.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/js/instagram.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/js/spin.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/js/jquery.introLoader.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/js/select2.full.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/js/jquery.responsivegrid.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/js/ion.rangeSlider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/js/readmore.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/js/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/js/validator.min.js')}}"></script>



@yield('scripts')
<script>
    var url = '{{ URL::asset('dist/images/raty') }}';
</script>
<script type="text/javascript" src="{{asset('dist/js/customs.js')}}"></script>

<script>
    /**
     *  Sidebar Sticky
     */
    !function ($) {

        $(function () {

            var $window = $(window)
            var $body = $(document.body)

            var navHeight = $('.navbar').outerHeight(true) + 50

            $body.scrollspy({
                target: '.scrollspy-sidebar',
                offset: navHeight
            })

            $window.on('load', function () {
                $body.scrollspy('refresh');
                @yield('error_script')
            })

            $('.scrollspy-container [href=#]').click(function (e) {
                e.preventDefault()
            })

            // back to top
            setTimeout(function () {
                var $sideBar = $('.scrollspy-sidebar')

                $sideBar.affix({
                    offset: {
                        top: function () {
                            var offsetTop = $sideBar.offset().top
                            var sideBarMargin = parseInt($sideBar.children(0).css('margin-top'), 10)
                            var navOuterHeight = $('.scrollspy-nav').height()

                            return (this.top = offsetTop - navOuterHeight - sideBarMargin)
                        }
                        , bottom: function () {
                            return (this.bottom = $('.scrollspy-footer').outerHeight(true))
                        }
                    }
                })
            }, 100)

        })

    }(window.jQuery)

</script>
@if(\Session::has('message'))
<script type="text/javascript">
    $("#myModal").modal();
</script>
@endif
</body>


<!-- Mirrored from crenoveative.com/envato/tour-packer/detail-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jan 2018 09:06:44