@extends('layouts.main')
@section('title')
    <title>Silk Road Asia Travel Uz</title>
    <meta name="description"
          content="Туристическая агенства Silk Road Asia Travel Uzbekistan"/>
    <meta name="keywords" content="silkroadasiatravel.uz, silkroad, silk road asia travel ,тур агенства, tour package, hotel, vocation, booking, trip, travel, tourism, tourist"/>
@endsection
@section('loader')
    <div id="introLoader" class="introLoading"></div>
@endsection
@section('content')
<!-- start Main Wrapper -->
        <div class="main-wrapper">

            <!-- start hero-header with windows height -->
            <div class="flexslider-hero-slider">
                <div id="mainFlexSlider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li class="slide">
                                <div class="flexslider-image-bg" style="background: url({{asset('storage/'.setting('slider.photo1'))}}) center center no-repeat; background-size:cover"></div>
                            </li><!-- slide1 end -->

                            <li class="slide">
                                <div class="flexslider-image-bg" style="background: url({{asset('storage/'.setting('slider.photo2'))}}) center center no-repeat; background-size:cover"></div>
                            </li><!-- slide2 end -->

                            <li class="slide">
                                <div class="flexslider-image-bg" style="background: url({{asset('storage/'.setting('slider.photo3'))}}) center center no-repeat; background-size:cover"></div>
                            </li><!-- slide3 end -->

                            <li class="slide">
                                <div class="flexslider-image-bg" style="background: url({{asset('storage/'.setting('slider.photo4'))}}) center center no-repeat; background-size:cover"></div>
                            </li><!-- slide4 end -->

                            <li class="slide">
                                <div class="flexslider-image-bg" style="background: url({{asset('storage/'.setting('slider.photo5'))}}) center center no-repeat; background-size:cover"></div>
                            </li><!-- slide5 end -->

                        </ul><!-- slides end -->

                        <div class="flexslider-overlay"></div>

                    </div><!-- flexslider end -->
                </div>

                <div class="main-search-holder">

                    <div class="container">

                        <div class="row">

                            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                                <h1 class="hero-title">Silk Road Asia Travel</h1>
                                <p class="lead">Visit Bukhara, Samarkand, Khiva or beyond!</p>

                            </div>

                        </div>

                        <form action="{{route('tour.list')}}" method="get">
                            <div class="main-search-wrapper full-width">

                                <div class="inner">

                                    <div class="column-item col-md-offset-3">
                                        <div class="form-group">

                                            <select name="destinations[]" class="select2-multi form-control" data-placeholder="Choose a Destination" multiple>
                                                <option value="">Choose a Destination</option>
                                                @foreach($destinations as $key => $destination)
                                                    <option value="{{$destination->name}}">{{$destination->getTranslatedAttribute('name', \App::getLocale(),'ru') }}
                                                    </option>
                                                @endforeach

                                            </select>

                                        </div>
                                    </div>
                                    <div class="column-item for-btn">

                                        <div class="form-group">

                                            <button type="submit" class="btn btn-primary btn-block">Search</button>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </form>

                    </div>

                </div>

            </div>

            <div class="clear"></div>
            <!-- end hero-header with windows height -->
            
            <div class="post-hero bg-light">
            
                <div class="container">
                    
                    <div class="row">
                    
                        <div class="col-sm-4">
                            <div class="featured-count clearfix">
                                <div class="icon"><i class="pe-7s-map-marker"></i></div>
                                <div class="content">
                                    <h6>300+ Destinations</h6>
                                    <span>Tastes giving in passed direct me valley supply.</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                            <div class="featured-count clearfix">
                                <div class="icon"> <i class="pe-7s-user"></i></div>
                                <div class="content">
                                    <h6>500+ Travel Guides</h6>
                                    <span>Prepared do an dissuade whatever steepest.</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                            <div class="featured-count clearfix">
                                <div class="icon"> <i class="pe-7s-smile"></i></div>
                                <div class="content">
                                    <h6>20000+ Happy Customers</h6>
                                    <span>Devonshire invitation discovered indulgence.</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            @if($topdestinations->count() >= 2)
            <section>
            
                <div class="container">
                
                    <div class="row">
                        
                        <div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                            
                            <div class="section-title">
                            
                                <h3>Top Destinations</h3>
                                
                            </div>
                            
                        </div>
                    
                    </div>
                    <form action="{{route('tour.list')}}" id="destinationForm">
                        <input type="hidden" name="destinations[]">
                    </form>
                    <div class="grid destination-grid-wrapper">

                        <div class="grid-item" data-colspan="10" data-rowspan="10">

                                <a href="#" onclick="destinationSubmit('{{$destinations[0]->name}}')" class="top-destination-image-bg" style="background-image:url('{{asset('storage/'.$topdestinations[0]->image)}}');">
                                    <div class="relative">
                                        <h4>{{$topdestinations[0]->getTranslatedAttribute('name', \App::getLocale(),'ru')}}</h4>
                                        <span>Starting from ${{$topdestinations[0]->price()}}</span>
                                    </div>
                                </a>

                        </div>

                        <div class="grid-item" data-colspan="10" data-rowspan="{{$topdestinations->count() == 4 ? "4" : "10"}}">
                            <a href="#" onclick="destinationSubmit('{{$destinations[1]->name}}')"  class="top-destination-image-bg" style="background-image:url('{{asset('storage/'.$topdestinations[1]->image)}}');">
                                <div class="relative">
                                    <h4>{{$topdestinations[1]->getTranslatedAttribute('name', \App::getLocale(),'ru')}}</h4>
                                    <span>Starting from ${{$topdestinations[1]->price()}}</span>
                                </div>
                            </a>
                        </div>
                        @if($topdestinations->count() == 4)
                        <div class="grid-item" data-colspan="5" data-rowspan="6">
                            <a href="#" onclick="destinationSubmit('{{$destinations[2]->name}}')"  class="top-destination-image-bg" style="background-image:url('{{asset('storage/'.$topdestinations[2]->image)}}');">
                                <div class="relative">
                                    <h4>{{$topdestinations[2]->getTranslatedAttribute('name', \App::getLocale(),'ru')}}</h4>
                                    <span>Starting from ${{$topdestinations[2]->price()}}</span>
                                </div>
                            </a>
                        </div>
                        
                        <div class="grid-item" data-colspan="5" data-rowspan="6">
                            <a href="#" onclick="destinationSubmit('{{$destinations[3]->name}}')"  class="top-destination-image-bg" style="background-image:url('{{asset('storage/'.$topdestinations[3]->image)}}');">
                                <div class="relative">
                                    <h4>{{$topdestinations[3]->getTranslatedAttribute('name', \App::getLocale(),'ru')}}</h4>
                                    <span>Starting from ${{$topdestinations[3]->price()}}</span>
                                </div>
                            </a>
                        </div>
                        @endif
                    </div>
                    
                </div>
                
            </section>
            @endif
            
            <section class="bg-light">
            
                <div class="container">
                
                    <div class="row">
                        
                        <div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                            
                            <div class="section-title">
                            
                                <h3>Special Packages</h3>
                                <p>Of distrusts immediate enjoyment curiosity do. Marianne numerous saw thoughts the humoured.</p>
                                
                            </div>
                            
                        </div>
                    
                    </div>
                    
                    <div class="GridLex-gap-30-wrappper package-grid-item-wrapper">
                        
                        <div class="GridLex-grid-noGutter-equalHeight">
                        @foreach($tours as $key=> $tour)
                           @if(!($tours->count() < 6 && ($key == 3 || $key == 4) || ($tours->count() < 9 && ($key == 6 || $key == 7))))
                                    <div class="GridLex-col-4_sm-6_xs-12 mb-30">
                                        <div class="package-grid-item">
                                            <a href="{{route('tour.show', $tour->slug)}}">
                                                <div class="image">
                                                    <img src="{{asset('storage/'.json_decode($tour->images)[0])}}" alt="Tour Package" />
                                                    <div class="absolute-in-image">
                                                        <div class="duration"><span>{{$tour->days}} days {{$tour->nights}} nights</span></div>
                                                    </div>
                                                </div>
                                                <div class="content clearfix">
                                                    <h5>{{$tour->getTranslatedAttribute('title', \App::getLocale(),'ru')}}</h5>
                                                    <div class="rating-wrapper">
                                                        <div class="raty-wrapper">
                                                            <div class="star-rating-read-only" data-rating-score="{{$tour->rating()}}"></div> <span> / {{$tour->comments->count()}} review</span>
                                                        </div>
                                                    </div>
                                                    <div class="absolute-in-content">
                                                        <span class="btn"><i class="fa fa-heart-o"></i></span>
                                                        <div class="price">${{$tour->price}}</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                            @endif
                        @endforeach
                            
                        </div>
                    
                    </div>
                    
                </div>
                
            </section>
            
            <section class="overflow-hidden why-us-half-image-wrapper">
            
                <div class="GridLex-grid-noGutter-equalHeight">
                        
                    <div class="GridLex-col-6_sm-12">
                        
                        <div class="why-us-half-image-content">
                        
                            <div class="section-title text-left">
                            
                                <h3>Why Booking With Us</h3>
                                <p>There are several seasons that you must travel with us</p>
                                
                            </div>
                            
                            <div class="featured-item">
                            
                                <h4>Experts On Tour</h4>
                                
                                <div class="content clearfix">
                                
                                    <div class="icon">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    
                                    <p>Blind would equal while oh mr lain led and fact none. One preferred sportsmen resolving the happiness continued. High at of in loud rich true.</p>
                                    
                                </div>
                            </div>
                            
                            <div class="featured-item">
                            
                                <h4>Quality Accommodation</h4>
                                
                                <div class="content clearfix">
                                
                                    <div class="icon">
                                        <i class="pe-7s-home"></i>
                                    </div>
                                    
                                    <p>Admiration stimulated cultivated reasonable be projection possession of. Real no near room ye bred sake if some. Is arranging furnished knowledge.</p>
                                    
                                </div>
                            </div>
                            
                            
                            <div class="featured-item">
                            
                                <h4>Comfortable Transport</h4>
                                
                                <div class="content clearfix">
                                
                                    <div class="icon">
                                        <i class="pe-7s-car"></i>
                                    </div>
                                    
                                    <p>Effect twenty indeed beyond for not had county. The use him without greatly can private. Increasing it unpleasant no of contrasted no continuing.</p>
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="GridLex-col-6_sm-12 image-bg">
                        <div class="image-bg" style="background-image:url({{asset('storage/'.setting('slider.home'))}});"></div>
                    </div>
                
                </div>
                
            </section>
            
            <section class="bg-light">
            
                <div class="container">
                
                    <div class="row">
                        
                        <div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                            
                            <div class="section-title">
                            
                                <h3>Testimonial</h3>
                                <p>What our customers say about us</p>
                            </div>
                            
                        </div>
                    
                    </div>
                    
                    <div class="testimonial-wrapper">
                    
                        <div class="row">
                            
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="testimonial-item clearfix">
                                    <div class="image">
                                        <img src="{{ asset('dist/images/man/01.jpg') }}" alt="Man" />
                                    </div>
                                    <div class="content">
                                        <h4>Antony Robert</h4>
                                        <h6>From Spain</h6>
                                        <p>She meant new their sex could defer child. An lose at quit to life do dull. Moreover end horrible endeavor entrance any families. Income appear extent on of thrown in admire.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="testimonial-item clearfix">
                                    <div class="image">
                                        <img src="{{ asset('dist/images/man/02.jpg') }}" alt="Man" />
                                    </div>
                                    <div class="content">
                                        <h4>Mohammed Salem</h4>
                                        <h6>From Turkey</h6>
                                        <p>Consider now provided laughter boy landlord dashwood. Often voice and the spoke. No shewing fertile village equally prepare up females sentiments increasing particular.</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </section>
            
            {{--<div class="newsletter-wrapper">

                <div class="container">

                    <div class="flex-row flex-align-middle flex-gap-30">

                        <div class="flex-column flex-sm-12">
                            <div class="newsletter-text clearfix">
                                <div class="icon">
                                    <i class="pe-7s-mail"></i>
                                </div>
                                <div class="content">
                                    <h3>Signup for Newsletter</h3>
                                    <p>Affronting everything discretion men now own did. Still round match we to. Frankness pronounce daughters remainder extensive has but.</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex-columns flex-sm-12">
                            <div class="newsletter-form">
                                <form class="">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button">Signup <i class="fa fa-long-arrow-right"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>

            </div>--}}

            <div class="overflow-hidden">
            
                <div class="instagram-wrapper">
                    <div id="instagram" class="instagram"></div>
                </div>
                
            </div>
            
        </div>
        <!-- end Main Wrapper -->
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('dist/js/jquery.flexslider-min.js')}}"></script>
    <script>
        $(document).ready(function(){

            $('#mainFlexSlider').flexslider(
                {
                    animation: 'fade',
                    slideshow: true,
                    pauseOnHover: false,
                    controlNav: false,
                    directionNav: false,
                    slideshowSpeed: 4000,
                }
            );

        });
    </script>
    <script type="text/javascript" src="{{asset('dist/js/jquery.raty.js')}}"></script>
    <script>
        function destinationSubmit(elem) {
            $('#destinationForm').find('input').val(elem);
            $('#destinationForm').submit();
        }
    </script>
@endsection

