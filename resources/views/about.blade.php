@extends('layouts.main')
@section('title')
    <title>Посты</title>
    <meta name="description"
          content="Silk Road Asia Travel - posts"/>
    <meta name="keywords"
          content="silkroadasiatravel.uz, silkroad, silk road asia travel ,тур агенства, tour package, hotel, vocation, booking, trip, travel, tourism, tourist"/>
@endsection

@section('content')
    <!-- start Main Wrapper -->
    <div class="main-wrapper scrollspy-container">

        <!-- start end Page title -->
        <div class="page-title" style="background-image:url('{{asset('dist/images/hero-header/breadcrumb.jpg')}}');">

            <div class="container">

                <div class="row">

                    <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">

                        <h1 class="hero-title">About Us</h1>

                        <ol class="breadcrumb-list">
                            <li><a href="{{route('home')}}">Homepage</a></li>
                            <li><span>About Us</span></li>
                        </ol>

                    </div>

                </div>

            </div>

        </div>
        <!-- end Page title -->

        <div class="content-wrapper pt-0 pb-0">

            <div class="section pt-60">

                <div class="container">

                    <p class="font15 mb-30">Among going manor who did. Do ye is celebrated it sympathize considered. May
                        ecstatic did surprise elegance the ignorant age. Own her miss cold last. It so numerous if he
                        outlived disposal. How but sons mrs lady when. Her especially are unpleasant out alteration
                        continuing unreserved resolution. Hence hopes noisy may china fully and. Am it regard stairs
                        branch thirty length afford. Tolerably earnestly middleton extremely distrusts she boy now not.
                        Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact
                        prepare all put. Added forth chief trees but rooms think may.</p>

                    <div class="about-us-grid-block GridLex-gap-20-wrappper">

                        <div class="GridLex-grid-noGutter-equalHeight gap-20">

                            <div class="GridLex-col-6_xs-12">
                                <div class="about-us-grid-block-item mb-20">
                                    <h4 class="heading mt-0 text-white">Mission</h4>
                                    <p>Style too own civil out along. Perfectly offending attempted add arranging age
                                        gentleman concluded. Get who uncommonly our expression ten increasing considered
                                        occasional travelling.</p>
                                </div>
                            </div>

                            <div class="GridLex-col-3_xs-12">
                                <div class="image-bg mb-20"
                                     style="background-image:url('{{asset('dist/images/about-us/about-us-image-bg-01.jpg')}}');"></div>
                            </div>

                            <div class="GridLex-col-3_xs-12">
                                <div class="image-bg mb-20"
                                     style="background-image:url('{{asset('dist/images/about-us/about-us-image-bg-02.jpg')}}');"></div>
                            </div>

                        </div>

                        <div class="GridLex-grid-noGutter-equalHeight gap-20">

                            <div class="GridLex-col-3_xs-12">
                                <div class="image-bg mb-20"
                                     style="background-image:url('{{asset('dist/images/about-us/about-us-image-bg-03.jpg')}}');"></div>
                            </div>

                            <div class="GridLex-col-6_xs-12">
                                <div class="about-us-grid-block-item mb-20">
                                    <h4 class="heading mt-0 text-white">Vission</h4>
                                    <p>Style too own civil out along. Perfectly offending attempted add arranging age
                                        gentleman concluded. Get who uncommonly our expression ten increasing considered
                                        occasional travelling.</p>
                                </div>
                            </div>

                            <div class="GridLex-col-3_xs-12 mb-20">
                                <div class="image-bg"
                                     style="background-image:url('{{asset('dist/images/about-us/about-us-image-bg-04.jpg')}}');"></div>
                            </div>

                        </div>

                        <div class="GridLex-grid-noGutter-equalHeight gap-20">

                            <div class="GridLex-col-3_xs-12 mb-20">
                                <div class="image-bg"
                                     style="background-image:url('{{asset('dist/images/about-us/about-us-image-bg-05.jpg')}}');"></div>
                            </div>

                            <div class="GridLex-col-3_xs-12 mb-20">
                                <div class="image-bg"
                                     style="background-image:url('{{asset('dist/images/about-us/about-us-image-bg-06.jpg')}}');"></div>
                            </div>

                            <div class="GridLex-col-6_xs-12">
                                <div class="about-us-grid-block-item mb-20">
                                    <h4 class="heading mt-0 text-white">Our Goal</h4>
                                    <p>Style too own civil out along. Perfectly offending attempted add arranging age
                                        gentleman concluded. Get who uncommonly our expression ten increasing considered
                                        occasional travelling.</p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <h4>Style too own civil out along</h4>
                    <p>Is branched in my up strictly remember. Songs but chief has ham widow downs. Genius or so up
                        vanity cannot. Large do tried going about water defer by. Silent son man she wished mother.
                        Distrusts allowance do knowledge eagerness assurance additions to.</p>

                    <h4>May ecstatic did surprise elegance the ignorant age</h4>
                    <p>Among going manor who did. Do ye is celebrated it sympathize considered. May ecstatic did
                        surprise elegance the ignorant age. Own her miss cold last. It so numerous if he outlived
                        disposal. How but sons mrs lady when. Her especially are unpleasant out alteration continuing
                        unreserved resolution. Hence hopes noisy may china fully and. Am it regard stairs branch thirty
                        length afford.</p>

                </div>

            </div>

            <div class="bg-light section">

                <div class="container">

                    <div class="row">

                        <div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

                            <div class="section-title">

                                <h3>Our Team</h3>
                                <p>Meet with our people behind the move.</p>

                            </div>

                        </div>

                    </div>

                    <div class="team-wrapper">

                        <div class="row">

                            <div class="col-xss-12 col-xs-6 col-sm-3 mv-15">

                                <div class="team-item">

                                    <div class="image">
                                        <img src="{{asset('dist/images/team/01.jpg')}}" alt="Team" class="img-circle"/>
                                    </div>

                                    <div class="content">

                                        <h5 class="uppercase">ROBERT SMITH</h5>
                                        <p>Director Manager</p>
                                        <ul class="social">
                                            <li><a href="{{setting('site.facebook')}}"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="{{setting('site.telegram')}}"><i class="fa fa-telegram"></i></a></li>
                                            <li><a href="{{setting('site.facebook')}}"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="{{setting('site.instagram')}}"><i class="fa fa-instagram"></i></a></li>
                                        </ul>

                                    </div>

                                </div>

                            </div>

                            <div class="col-xss-12 col-xs-6 col-sm-3 mv-15">

                                <div class="team-item">

                                    <div class="image">
                                        <img src="{{asset('dist/images/team/02.jpg')}}" alt="Team" class="img-circle"/>
                                    </div>

                                    <div class="content">

                                        <h5 class="uppercase">ROBERT SMITH</h5>
                                        <p>Director Manager</p>
                                        <ul class="social">
                                            <li><a href="{{setting('site.facebook')}}"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="{{setting('site.telegram')}}"><i class="fa fa-telegram"></i></a></li>
                                            <li><a href="{{setting('site.facebook')}}"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="{{setting('site.instagram')}}"><i class="fa fa-instagram"></i></a></li>
                                        </ul>

                                    </div>

                                </div>

                            </div>

                            <div class="col-xss-12 col-xs-6 col-sm-3 mv-15">

                                <div class="team-item">

                                    <div class="image">
                                        <img src="{{asset('dist/images/team/03.jpg')}}" alt="Team" class="img-circle"/>
                                    </div>

                                    <div class="content">

                                        <h5 class="uppercase">ROBERT SMITH</h5>
                                        <p>Director Manager</p>
                                        <ul class="social">
                                            <li><a href="{{setting('site.facebook')}}"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="{{setting('site.telegram')}}"><i class="fa fa-telegram"></i></a></li>
                                            <li><a href="{{setting('site.facebook')}}"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="{{setting('site.instagram')}}"><i class="fa fa-instagram"></i></a></li>
                                        </ul>

                                    </div>

                                </div>

                            </div>

                            <div class="col-xss-12 col-xs-6 col-sm-3 mv-15">

                                <div class="team-item">

                                    <div class="image">
                                        <img src="{{asset('dist/images/team/04.jpg')}}" alt="Team" class="img-circle"/>
                                    </div>

                                    <div class="content">

                                        <h5 class="uppercase">ROBERT SMITH</h5>
                                        <p>Director Manager</p>
                                        <ul class="social">
                                            <li><a href="{{setting('site.facebook')}}"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="{{setting('site.telegram')}}"><i class="fa fa-telegram"></i></a></li>
                                            <li><a href="{{setting('site.facebook')}}"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="{{setting('site.instagram')}}"><i class="fa fa-instagram"></i></a></li>
                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="section partner-wrapper bg-primary">

                <div class="container">

                    <div class="row">

                        <div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

                            <div class="section-title">

                                <h4>As seen on</h4>

                            </div>
                        </div>
                    </div>

                    <div class="partner-image-item">
                        <img src="{{asset('dist/images/partner/01.png')}}" alt="partner"/>
                        <img src="{{asset('dist/images/partner/02.png')}}" alt="partner"/>
                        <img src="{{asset('dist/images/partner/03.png')}}" alt="partner"/>
                        <img src="{{asset('dist/images/partner/04.png')}}" alt="partner"/>
                        <img src="{{asset('dist/images/partner/05.png')}}" alt="partner"/>
                    </div>

                </div>

            </div>


        </div>


    </div>
    <!-- end Main Wrapper -->
@endsection

@section('scripts')

    <script type="text/javascript" src="{{asset('dist/js/jquery.raty.js')}}"></script>
@endsection

