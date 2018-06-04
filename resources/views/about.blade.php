@extends('layouts.main')
@section('title')
    <title>Посты</title>
    <meta name="description"
          content="Silk Road Asia Travel - posts"/>
    <meta name="keywords"
          content="silkroadasiatravel.uz, silkroad, silk road asia travel ,тур агенства, tour package, hotel, vocation, booking, trip, travel, tourism, tourist"/>
          <style type="text/css">
              .opacity{
                opacity: 0.9;
              }
          </style>
@endsection

@section('content')
    <!-- start Main Wrapper -->
    <div class="main-wrapper scrollspy-container">

        <!-- start end Page title -->
        <div class="page-title" style="background-image:url('{{asset('dist/images/hero-header/breadcrumb.jpg')}}');">

            <div class="container">

                <div class="row">

                    <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">

                        <h1 class="hero-title">@lang('aboutus.about_us')</h1>

                        <ol class="breadcrumb-list">
                            <li><a href="{{route('home')}}">@lang('aboutus.homepage')</a></li>
                            <li><span>@lang('aboutus.about_us')</span></li>
                        </ol>

                    </div>

                </div>

            </div>

        </div>
        <!-- end Page title -->

        <div class="content-wrapper pt-0 pb-0">

            <div class="section pt-60">

                <div class="container">

                    <p class="font15 mb-30">@lang('aboutus.content')</p>

                    <div class="about-us-grid-block GridLex-gap-20-wrappper">

                        <div class="GridLex-grid-noGutter-equalHeight gap-20">

                            <div class="GridLex-col-6_xs-12">
                                <div class="about-us-grid-block-item mb-20">
                                    <h4 class="heading mt-0 text-white">@lang('aboutus.mission')</h4>
                                    <p>@lang('aboutus.mission_body')</p>
                                </div>
                            </div>

                            <div class="GridLex-col-3_xs-12">
                                <div class="image-bg mb-20 opacity"
                                     style="background-image:url('{{asset('storage/'.setting('aboutus.mission1'))}}');"></div>
                            </div>

                            <div class="GridLex-col-3_xs-12">
                                <div class="image-bg mb-20 opacity"
                                     style="background-image:url('{{asset('storage/'.setting('aboutus.mission2'))}}');"></div>
                            </div>

                        </div>

                        <div class="GridLex-grid-noGutter-equalHeight gap-20">

                            <div class="GridLex-col-3_xs-12">
                                <div class="image-bg mb-20 opacity"
                                     style="background-image:url('{{asset('storage/'.setting('aboutus.vission1'))}}');"></div>
                            </div>

                            <div class="GridLex-col-6_xs-12">
                                <div class="about-us-grid-block-item mb-20">
                                    <h4 class="heading mt-0 text-white">@lang('aboutus.vission')</h4>
                                    <p>@lang('aboutus.vission_body')</p>
                                </div>
                            </div>

                            <div class="GridLex-col-3_xs-12 mb-20">
                                <div class="image-bg opacity"
                                     style="background-image:url('{{asset('storage/'.setting('aboutus.vission2'))}}');"></div>
                            </div>

                        </div>

                        <div class="GridLex-grid-noGutter-equalHeight gap-20">

                            <div class="GridLex-col-3_xs-12 mb-20">
                                <div class="image-bg opacity"
                                     style="background-image:url('{{asset('storage/'.setting('aboutus.goal1'))}}');"></div>
                            </div>

                            <div class="GridLex-col-3_xs-12 mb-20">
                                <div class="image-bg opacity"
                                     style="background-image:url('{{asset('storage/'.setting('aboutus.goal2'))}}');"></div>
                            </div>

                            <div class="GridLex-col-6_xs-12">
                                <div class="about-us-grid-block-item mb-20">
                                    <h4 class="heading mt-0 text-white">@lang('aboutus.our_goal')</h4>
                                    <p>@lang('aboutus.our_goal_body')</p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <h4>@lang('aboutus.first_footer_header')</h4>
                    <p>@lang('aboutus.first_footer_body')</p>

                    <h4>@lang('aboutus.second_footer_header')</h4>
                    <p>@lang('aboutus.second_footer_body')</p>

                </div>

            </div>

            <div class="bg-light section">

                <div class="container">

                    <div class="row">

                        <div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

                            <div class="section-title">

                                <h3>@lang('aboutus.our_team')</h3>
                                <p>@lang('aboutus.our_team_body')</p>

                            </div>

                        </div>

                    </div>

                    <div class="team-wrapper">

                        <div class="row">
                            @foreach($users as $user)
                            <div class="col-xss-12 col-xs-6 col-sm-3 mv-15">

                                <div class="team-item">

                                    <div class="image">
                                        <img src="{{asset('storage/'.$user->avatar)}}" alt="Team" class="img-circle" />
                                    </div>

                                    <div class="content">

                                        <h5 class="uppercase">{{$user->name}}</h5>
                                        <p>{{$user->position}}</p>
                                        <ul class="social">
                                            <li><a href="{{$user->facebook}}"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="{{$user->telegram}}"><i class="fa fa-telegram"></i></a></li>
                                            <li><a href="mailto:{{$user->email}}"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="{{$user->instagram}}"><i class="fa fa-instagram"></i></a></li>
                                        </ul>

                                    </div>

                                </div>

                            </div>
                            @endforeach

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

