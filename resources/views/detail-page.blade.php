@extends('layouts.main')

@section('content')


    <div class="main-wrapper scrollspy-container">

        <!-- start end Page title -->

        <div class="page-title detail-page-title"
             style="background-image:url({{json_decode($tour->images) ? asset('storage/'.json_decode($tour->images)[0]) : ""}});">

            <div class="container">

                <div class="flex-row">

                    <div class="flex-column flex-md-8 flex-sm-12">

                        <h1 class="hero-title">{{$tour->title}}</h1>
                        {{--<p class="line18">He do subjects prepared bachelor juvenile ye oh. He feelings removing informed--}}
                            {{--he as ignorant we prepared.</p>--}}

                        <ul class="list-col clearfix">
                            <li class="rating-box">
                                <div class="rating-wrapper">
                                    <div class="raty-wrapper">
                                        <div class="star-rating-white" data-rating-score="4.0"></div>
                                        <span style="display: block;"> / 7 review</span>
                                    </div>
                                </div>
                            </li>

                            {{-- <li class="fav-box">
                                <div class="meta">
                                    <span class="block"><button class="btn btn-fav"><i
                                                    class="fa fa-heart-o"></i></button></span>
                                    98 Favorites
                                </div>
                            </li> --}}

                            <li class="duration-box">
                                <div class="meta">
                                    <span class="block">{{$tour->days}}</span>
                                    Days
                                </div>
                                <div class="meta">
                                    &amp;
                                </div>
                                <div class="meta">
                                    <span class="block">{{$tour->nights}}</span>
                                    Nights
                                </div>
                            </li>

                            <li class="price-box">
                                <div class="meta">
                                    <span class="block">{{$tour->price}}$</span>
                                    starting from
                                </div>
                            </li>

                        </ul>

                    </div>

                    <div class="flex-column flex-md-4 flex-align-bottom flex-sm-12 mt-20-sm">
                        <div class="text-right text-left-sm">
                            <a href="#section-5" class="anchor btn btn-primary">See dates &amp; Book Now</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <!-- end Page title -->

        <div class="breadcrumb-wrapper bg-light-2">

            <div class="container">

                <ol class="breadcrumb-list">
                    <li><a href="index-2.html">Homepage</a></li>
                    <li><a href="#">Desinations</a></li>
                    <li><a href="#">City</a></li>
                    <li><span>{{$tour->title}}</span></li>
                </ol>

            </div>

        </div>

        <div class="content-wrapper">

            <div class="container">

                <div class="row">

                    <div class="col-md-9" role="main">

                        <div class="detail-content-wrapper">

                            <div id="section-0" class="detail-content">

                                <div class="section-title text-left">
                                    <h4>Highlights</h4>
                                </div>
                                {!! $tour->description!!}
                            </div>

                            <div id="section-1" class="detail-content">
                                <div class="section-title text-left">
                                    <h4>Gallery</h4>
                                </div>
                                @if(json_decode($tour->images))
                                <div class="slick-gallery-slideshow">
                                    <div class="slider gallery-slideshow">
                                        @foreach(json_decode($tour->images) as $image)
                                        <div>
                                            <div class="image" style="background-image: url({{asset('storage/'.$image)}})"><img src="{{asset('storage/'.$image)}}" alt="Image"/>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    @if(count(json_decode($tour->images)) >=8)
                                    <div class="slider gallery-nav">
                                        @foreach(json_decode($tour->images) as $image)
                                        <div>
                                            <div class="image"><img src="{{asset('storage/'.$original->image_crop($image))}}" alt="Image"/>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                                @endif
                            </div>

                            <div id="section-2" class="detail-content">

                                <div class="section-title text-left">
                                    <h4>Itinerary</h4>
                                </div>

                                <div class="detail-item">

                                    <div class="row">

                                        <div class="col-sm-4 col-sm-3 mb-30">

                                            <ul class="list-info no-icon bb-dotted">
                                                <li><span class="font600">Duration: </span>{{$tour->days}} days &amp; {{$tour->nights}} nights</li>
                                                <li><span class="font600">Country: </span> {{$tour->destination->name}}</li>
                                                {{--<li><span class="font600">Experiences:</span> 5</li>--}}
                                                <li><span class="font600">Ages:</span> {{$tour->age}}+</li>
                                                @if($tour->startingPoint != null)
                                                <li><span class="font600">Starting Point:</span> {{$tour->startingPoint->name}}</li>
                                                @endif
                                                @if($tour->endingPoint != null )
                                                <li><span class="font600">Ending Point:</span> {{$tour->endingPoint->name}}</li>
                                                @endif
                                            </ul>

                                        </div>

                                        <div class="col-sm-8 col-md-9">

                                            <div class="itinerary-wrapper">

                                                <div class="itinerary-item intro-item">
                                                    <h5>Introduction</h5>
                                                    <div class="intro-item-body">
                                                        {!! $tour->intro !!}
                                                    </div>
                                                </div>

                                                <div class="itinerary-day-label font600 uppercase"><span>Day</span>
                                                </div>

                                                <div class="itinerary-item-wrapper">

                                                    <div class="panel-group bootstarp-toggle">

                                                        @foreach($tour->programs as $key=> $program)
                                                        <div class="panel itinerary-item">
                                                            <div class="panel-heading">
                                                                <h5 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#"
                                                                       href="#bootstarp-toggle-{{$key}}"><span
                                                                                class="absolute-day-number">{{$program->order}}</span>
                                                                        {{$program->title}}</a>
                                                                </h5>
                                                            </div>
                                                            <div id="bootstarp-toggle-{{$key}}"
                                                                 class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <p>{{$program->text}}</p>
                                                                    <ul class="itinerary-meta clearfix">
                                                                        <li><i class="fa fa-building-o"></i> {{$program->place}}
                                                                        </li>
                                                                        <li><i class="fa fa-clock-o"></i> {{$program->trip_time}}
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end of panel -->
                                                        @endforeach
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div id="section-3" class="detail-content">

                                <div class="section-title text-left">
                                    <h4>Tour Accommodation</h4>
                                </div>

                                <div class="hotel-item-wrapper">
                                @for($i=0; $i<$original->accommodations->count(); $i+=3)
                                    <div class="row gap-1">
                                        @for($j=$i; $j<=$i+2 && $j<$original->accommodations->count(); $j++)
                                            <div class="col-sm-xss-12 col-xs-6 col-sm-4 col-md-4">

                                                <div class="hotel-item mb-1">
                                                    <a href="{{$original->accommodations[$j]->url}}">
                                                        <div class="image">
                                                            <img src="{{ asset('storage/'.json_decode($original->accommodations[$j]->images)[0]) }}" alt="Hotel"/>
                                                        </div>
                                                        <div class="content">
                                                            <h6>{{$original->accommodations[$j]->name}}</h6>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                        @endfor

                                    </div>
                                    @endfor

                                </div>

                                <p>
                                    {!! $tour->hotels!!}
                                </p>
                            </div>

                            <div id="section-4" class="detail-content">

                                <div class="section-title text-left">
                                    <h4>What's included</h4>
                                </div>

                                {!! $tour->includes !!}

                                {{--<h5 class="heading">Optional Excursions</h5>
                                <p>Why painful the sixteen how minuter looking nor. Subject but why ten earnest husband
                                    imagine sixteen brandon. Are unpleasing occasional celebrated motionless unaffected
                                    conviction out.</p>

                                <ul class="list-with-icon col-3 clearfix">

                                    <li>
                                        <i class="fa fa-check-circle text-primary"></i>
                                        <p>Marianne property cheerful.</p>
                                    </li>

                                    <li>
                                        <i class="fa fa-check-circle text-primary"></i>
                                        <p>Clothes parlors however by cottage.</p>
                                    </li>

                                    <li>
                                        <i class="fa fa-check-circle text-primary"></i>
                                        <p>In views it or meant drift.</p>
                                    </li>

                                    <li>
                                        <i class="fa fa-check-circle text-primary"></i>
                                        <p>Be concern parlors settled.</p>
                                    </li>

                                    <li>
                                        <i class="fa fa-check-circle text-primary"></i>
                                        <p>Remainder northward performed</p>
                                    </li>

                                    <li>
                                        <i class="fa fa-check-circle text-primary"></i>
                                        <p>Yet late add name was rent.</p>
                                    </li>

                                    <li>
                                        <i class="fa fa-check-circle text-primary"></i>
                                        <p>park from rich</p>
                                    </li>

                                    <li>
                                        <i class="fa fa-check-circle text-primary"></i>
                                        <p>He always do do former.</p>
                                    </li>

                                </ul>--}}

                            </div>

                            <div id="section-5" class="detail-content">

                                <div class="section-title text-left">
                                    <h4>Availability</h4>
                                </div>

                                <div class="row mb-20">
                                    <div class="col-sm-6">
                                        <div class="form-group form-icon">
                                            <i class="fa fa-calendar"></i>
                                            <select name="month" class="select2-multi form-control"
                                                    data-placeholder="Choose a Departure Month" multiple>
                                                <option value="">Choose a Departure Month</option>
                                                <option value="0">Any Departure Month</option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="availabily-wrapper">

                                    <ul class="availabily-list">

                                        <li class="availabily-heading clearfix">

                                            <div class="date-from">
                                                start
                                            </div>

                                            <div class="date-to">
                                                end
                                            </div>

                                            <div class="status">
                                                destination
                                            </div>

                                            <div class="price">
                                                price
                                            </div>

                                            <div class="action">
                                                &nbsp;
                                            </div>

                                        </li>

                                        <li class="availabily-content clearfix">

                                            <div class="date-from">
                                                <span class="availabily-heading-label">start:</span>
                                                {{\Carbon\Carbon::parse($tour->from)->formatLocalized('%A')}}
                                                <span>{{\Carbon\Carbon::parse($tour->from)->formatLocalized('%B %d %Y')}}</span>
                                            </div>

                                            <div class="date-to">
                                                <span class="availabily-heading-label">start:</span>
                                                {{\Carbon\Carbon::parse($tour->to)->formatLocalized('%A')}}
                                                <span>{{\Carbon\Carbon::parse($tour->to)->formatLocalized('%B %d %Y')}}</span>
                                            </div>

                                            <div class="status">
                                                <span class="availabily-heading-label">destination:</span>
                                                <span>{{$tour->destination->name}}</span>
                                            </div>

                                            <div class="price">
                                                <span class="availabily-heading-label">price:</span>
                                                <span>{{$tour->price}}</span>
                                            </div>

                                            <div class="action">
                                                <a href="#" class="btn btn-primary btn-sm btn-inverse">Book now</a>
                                            </div>

                                        </li>

                                        {{-- <li class="availabily-content sold-out clearfix">

                                            <div class="date-from">
                                                <span class="availabily-heading-label">start:</span>
                                                Sunday
                                                <span>April 10, 2016</span>
                                            </div>

                                            <div class="date-to">
                                                <span class="availabily-heading-label">end:</span>
                                                Wednesday
                                                <span>April 13, 2016</span>
                                            </div>

                                            <div class="status">
                                                <span class="availabily-heading-label">status:</span>
                                                <span class="text-success">sold-out</span>
                                            </div>

                                            <div class="price">
                                                <span class="availabily-heading-label">price:</span>
                                                <span>$1300</span>
                                            </div>

                                            <div class="action">
                                                <a href="#" class="btn btn-primary btn-sm btn-inverse">Book now</a>
                                            </div>

                                        </li>

                                        <li class="availabily-content clearfix">

                                            <div class="date-from">
                                                <span class="availabily-heading-label">start:</span>
                                                Friday
                                                <span>April 18, 2016</span>
                                            </div>

                                            <div class="date-to">
                                                <span class="availabily-heading-label">end:</span>
                                                Monday
                                                <span>April 21, 2016</span>
                                            </div>

                                            <div class="status">
                                                <span class="availabily-heading-label">status:</span>
                                                seats left
                                                <span>4</span>
                                            </div>

                                            <div class="price">
                                                <span class="availabily-heading-label">price:</span>
                                                <span>$1458</span>
                                            </div>

                                            <div class="action">
                                                <a href="#" class="btn btn-primary btn-sm btn-inverse">Book now</a>
                                            </div>

                                        </li> --}}

                                    </ul>

                                </div>

                                <div class="text-center mt-30">

                                    <button class="btn btn-primary">Show more departures</button>
                                </div>

                            </div>

                            <div class="detail-content">

                                <div class="section-title text-left">
                                    <h4>Similar Packages</h4>
                                </div>

                                <div class="GridLex-gap-20-wrappper package-grid-item-wrapper on-page-result-page alt-smaller">

                                    <div class="GridLex-grid-noGutter-equalHeight">
                                        @foreach($similars as $similar)        
                                        <div class="GridLex-col-4_sm-4_xs-12 mb-20">
                                            <div class="package-grid-item">
                                                <a href="{{route('tour.show',$similar->slug)}}">
                                                    <div class="image">
                                                        <img src="{{ asset('storage/'.json_decode($similar->images)[0]) }}" alt="Tour Package"/>
                                                        <div class="absolute-in-image">
                                                            <div class="duration"><span>{{$similar->days}}days {{$similar->nights}} nights</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="content clearfix">
                                                        <h6>{{$similar->getTranslatedAttribute('title', \App::getLocale(),'ru')}}</h6>
                                                        <div class="rating-wrapper">
                                                            <div class="raty-wrapper">
                                                                <div class="star-rating-12px"
                                                                     data-rating-score="{{$similar->rating()}}"></div>
                                                                <span> / {{$similar->comments()->count()}} review</span>
                                                            </div>
                                                        </div>
                                                        <div class="absolute-in-content">
                                                            <span class="btn"><i class="fa fa-heart-o"></i></span>
                                                            <div class="price">${{$similar->price}}</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>

                                </div>

                            </div>

                            <div id="section-6" class="detail-content">

                                <div class="section-title text-left">
                                    <h4>Information &amp; FAQ</h4>
                                </div>

                                <div class="row">

                                    <div class="col-sm-12 col-md-12 mb-15">

                                        <div class="read-more-div" data-collapsed-height="107">

                                            <div class="read-more-div-inner">

                                                <h5 class="heading mt-0">Heading Information 1</h5>

                                                {!! $tour->viza !!}

                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <h5 class="heading mt-0">FAQ</h5>

                                <div class="faq-alt-2-wrapper">

                                    <div class="panel-group bootstarp-accordion" id="accordion" role="tablist"
                                         aria-multiselectable="true">
                                        @foreach($faqs as $key => $faq)
                                        <div class="panel">
                                            <div class="panel-heading" role="tab" id="heading{{$key}}">
                                                <h6 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapse{{$key}}" aria-expanded="true"
                                                       aria-controls="collapse{{$key}}">{{$faq->title}}</a>
                                                </h6>
                                            </div>
                                            <div id="collapse{{$key}}" class="panel-collapse collapse" role="tabpanel"
                                                 aria-labelledby="heading{{$key}}">
                                                <div class="panel-body">
                                                    <div class="faq-thread">
                                                        {!! $faq->text !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- end of panel -->
                                    </div>
                                    <!-- end of #accordion -->

                                    <div class="text-center pt-10">
                                        <a href="#" class="btn btn-primary">Show ALl FAQs</a>
                                    </div>

                                </div>

                            </div>

                            <div id="section-7" class="detail-content">

                                <div class="section-title text-left">
                                    <h4>Reviews</h4>
                                </div>

                                <div class="review-wrapper">

                                    <div class="review-header">
                                        <div class="row">
                                            
                                            <div class="col-sm-5 col-md-4">
                                                <div class="review-overall">
                                                    <h5>{{$original->ratingType()}}</h5>
                                                    <p class="review-overall-point"><span>{{$original->rating()}}</span> / 5.0</p>
                                                    <p class="review-overall-recommend">{{$original->ratingPercentage()}}% recommend this package</p>
                                                </div>
                                            </div>
                                            

                                            <div class="col-sm-7 col-md-8">

                                                <div class="review-overall-breakdown">

                                                    <div class="row gap-20">

                                                        <div class="col-xss-12 col-xs-12 col-sm-7">

                                                            <h6>Score Breakdown</h6>
                                                            <ul class="breakdown-list">

                                                                <li class="clearfix">
                                                                    <div class="rating-wrapper">
                                                                        <div class="raty-wrapper">
                                                                            <div class="star-rating-12px"
                                                                                 data-rating-score="5.0"></div>
                                                                            <span>(5)</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress progress-primary">
                                                                        <div class="progress-bar" role="progressbar"
                                                                             aria-valuenow="{{$original->comments->count() ? $original->comments()->where('rating','>=', 4.5)->count()*100/$original->comments->count() : 0}}" aria-valuemin="0"
                                                                             aria-valuemax="100"
                                                                             style="width: {{$original->comments->count() ? $original->comments()->where('rating','>=', 4.5)->count()*100/$original->comments->count() : 0}}%;"></div>
                                                                    </div>
                                                                    <div class="breakdown-count"> ({{$original->comments()->where('rating','>=', 4.5)->count()}})</div>
                                                                </li>

                                                                <li class="clearfix">
                                                                    <div class="rating-wrapper">
                                                                        <div class="raty-wrapper">
                                                                            <div class="star-rating-12px"
                                                                                 data-rating-score="4.0"></div>
                                                                            <span>(4)</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress progress-primary">
                                                                          <div class="progress-bar" role="progressbar"
                                                                             aria-valuenow="{{$original->comments->count() ? $original->comments()->where('rating','>=', 3.5)->where('rating','<',4.5)->count()*100/$original->comments->count() : 0}}" aria-valuemin="0"
                                                                             aria-valuemax="100"
                                                                             style="width: {{$original->comments->count() ? $original->comments()->where('rating','>=', 3.5)->where('rating','<',4.5)->count()*100/$original->comments->count() : 0}}%;"></div>
                                                                    </div>
                                                                    <div class="breakdown-count"> ({{$original->comments()->where('rating','>=', 3.5)->where('rating','<',4.5)->count()}})</div>
                                                                </li>

                                                                <li class="clearfix">
                                                                    <div class="rating-wrapper">
                                                                        <div class="raty-wrapper">
                                                                            <div class="star-rating-12px"
                                                                                 data-rating-score="3.0"></div>
                                                                            <span>(3)</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress progress-primary">
                                                                          <div class="progress-bar" role="progressbar"
                                                                             aria-valuenow="{{$original->comments->count() ? $original->comments()->where('rating','>=', 2.5)->where('rating','<',3.5)->count()*100/$original->comments->count() : 0}}" aria-valuemin="0"
                                                                             aria-valuemax="100"
                                                                             style="width: {{$original->comments->count() ? $original->comments()->where('rating','>=', 2.5)->where('rating','<',3.5)->count()*100/$original->comments->count() : 0}}%;"></div>
                                                                    </div>
                                                                    <div class="breakdown-count"> ({{$original->comments()->where('rating','>=', 2.5)->where('rating','<',3.5)->count()}})</div>
                                                                </li>
                                                                <li class="clearfix">
                                                                    <div class="rating-wrapper">
                                                                        <div class="raty-wrapper">
                                                                            <div class="star-rating-12px"
                                                                                 data-rating-score="2.0"></div>
                                                                            <span>(2)</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress progress-primary">
                                                                          <div class="progress-bar" role="progressbar"
                                                                             aria-valuenow="{{$original->comments->count() ? $original->comments()->where('rating','>=', 1.5)->where('rating','<',2.5)->count()*100/$original->comments->count() : 0}}" aria-valuemin="0"
                                                                             aria-valuemax="100"
                                                                             style="width: {{$original->comments->count() ? $original->comments()->where('rating','>=', 1.5)->where('rating','<',2.5)->count()*100/$original->comments->count() : 0}}%;"></div>
                                                                    </div>
                                                                    <div class="breakdown-count"> ({{$original->comments()->where('rating','>=', 1.5)->where('rating','<',2.5)->count()}})</div>
                                                                </li>

                                                                <li class="clearfix">
                                                                    <div class="rating-wrapper">
                                                                        <div class="raty-wrapper">
                                                                            <div class="star-rating-12px"
                                                                                 data-rating-score="1.0"></div>
                                                                            <span>(1)</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress progress-primary">
                                                                          <div class="progress-bar" role="progressbar"
                                                                             aria-valuenow="{{$original->comments->count() ? $original->comments()->where('rating','<',1.5)->count()*100/$original->comments->count() : 0}}" aria-valuemin="0"
                                                                             aria-valuemax="100"
                                                                             style="width: {{$original->comments->count() ? $original->comments()->where('rating','<',1.5)->count()*100/$original->comments->count() : 0}}%;"></div>
                                                                    </div>
                                                                    <div class="breakdown-count"> ({{$original->comments()->where('rating','<',1.5)->count()}})</div>
                                                                </li>
                                                            </ul>

                                                        </div>

                                                       

                                                    </div>


                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="review-content">

                                        <div class="row gap-20">

                                            <div class="col-sm-6">
                                                <h5>There are {{$tour->comments->count()}} reviews</h5>
                                            </div>

                                            <div class="col-sm-6 text-right text-left-xs">
                                                <a href="#leave-comment"
                                                   class="anchor btn btn-primary btn-inverse btn-sm">Leave comments</a>
                                            </div>

                                        </div>


                                        <ul class="review-list">

                                            @foreach($tour->comments as $comment)
                                                <li class="clearfix">
                                                    {{-- <div class="image img-circle">
                                                        <img class="img-circle" src="images/man/01.jpg" alt="Man"/>
                                                    </div> --}}
                                                    <div class="content">
                                                        <div class="row gap-20 mb-0">
                                                            <div class="col-sm-9">
                                                                <h6>{{$comment->name}} {{-- <span>/ from Spain</span> --}}</h6>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="review-date">{{$comment->created_at}}</p>
                                                            </div>
                                                        </div>

                                                        <div class="rating-wrapper">
                                                            <div class="raty-wrapper">
                                                                <div class="star-rating-12px" data-rating-score="{{$comment->rating}}"></div>
                                                            </div>
                                                        </div>

                                                        <div class="review-text">

                                                            <p>{{$comment->text}}</p>

                                                        </div>

                                                        <div class="review-other">

                                                            <div class="row gap-20 mb-0">

                                                                <div class="col-sm-6">

                                                                    <ul class="social-share-sm">

                                                                        <li>
                                                                            <span><i class="fa fa-share-square"></i> share</span>
                                                                        </li>
                                                                        <li class="the-label"><a href="#">Facebook</a></li>
                                                                        <li class="the-label"><a href="#">Twitter</a></li>
                                                                        <li class="the-label"><a href="#">Google Plus</a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </div>

                                                        </div>

                                                    </div>
                                                </li>
                                            @endforeach

                                        </ul>

                                       {{--  <div class="bt text-center pt-30">
                                            <a href="#" class="btn btn-primary">Load More</a>
                                        </div> --}}

                                    </div>

                                </div>

                            </div>

                            <div id="leave-comment" class="detail-content">

                                <div class="section-title text-left">
                                    <h4>Leave Your Review</h4>
                                </div>

                                <div class="review-form" id="form-err">

                                    <form class="" action="{{ route('comment', $tour->id) }}" method="post">
                                        {{csrf_field()}}
                                        <div class="row">

                                            <div class="col-sm-6 col-md-4">

                                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                    <label>Your Name: </label>
                                                    <input type="text" class="form-control name-err" name="name" value="{{ old('name') }}" required/>
                                                    @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                

                                            </div>

                                            <div class="clear"></div>

                                            <div class="col-sm-6 col-md-4">

                                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <label>Your Email Address: </label>
                                                    <input type="email" class="form-control email-err" name="email" value="{{ old('email') }}" required/>
                                                    @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>

                                                

                                            </div>

                                            <div class="clear"></div>

                                            <div class="col-sm-6 col-md-4">

                                                <div class="form-group{{ $errors->has('rating') ? ' has-error' : '' }}">
                                                    <label>Your Rating: </label>
                                                    <div class="rating-wrapper">
                                                        <div class="raty-wrapper">
                                                            <div class="star-rating rating-err" data-rating-score="{{old('rating') != null ? old('rating') : 5}}"></div>
                                                        </div>
                                                    </div>
                                                    @if ($errors->has('rating'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('rating') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>

                                                
                                            </div>

                                            <div class="clear"></div>

                                            <div class="col-sm-12 col-md-8">

                                                <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                                                    <label>Your Message: </label>
                                                    <textarea class="form-control form-control-sm text-err" rows="5" name="text" data-error="Your message is required and must not less than 50 characters" required>{{old('text')}}</textarea>
                                                    @if ($errors->has('text'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('text') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                
                                            </div>

                                            <div class="clear"></div>

                                            <div class="col-sm-12 col-md-8 mt-10">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>

                                        </div>

                                    </form>

                                </div>

                            </div>

                            <div class="call-to-action">

                                Question? <a href="#" class="btn btn-primary btn-sm btn-inverse">Make an inquiry</a> or
                                call +66 28 878 5452

                            </div>

                        </div>

                    </div>

                    <div class="col-sm-3 hidden-sm hidden-xs">

                        <div class="scrollspy-sidebar sidebar-detail" role="complementary">

                            <ul class="scrollspy-sidenav">

                                <li>
                                    <ul class="nav">
                                        <li><a href="#section-0" class="anchor">Highlights</a></li>
                                        <li><a href="#section-1" class="anchor">Gallery</a></li>
                                        <li><a href="#section-2" class="anchor">Itinerary</a></li>
                                        <li><a href="#section-3" class="anchor">Tour Accommodation</a></li>
                                        <li><a href="#section-4" class="anchor">What's Included</a></li>
                                        <li><a href="#section-5" class="anchor">Availabilitylities</a></li>
                                        <li><a href="#section-6" class="anchor">Information &amp; FAQ</a></li>
                                        <li><a href="#section-7" class="anchor">Reviews</a></li>
                                    </ul>
                                </li>

                            </ul>

                            <a href="#" class="btn btn-primary">Change Search</a>

                            <div style="width: 100%; height: 20px;"></div>

                        </div>

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

@section('error_script')
    @if ($errors->any())
        @if($errors->has('name'))
            $('html, body').animate({ scrollTop: $('.name-err').offset().top - 300}, 1000);
        @elseif($errors->has('email'))
            $('html, body').animate({ scrollTop: $('.email-err').offset().top - 300 }, 1000);
        @elseif($errors->has('rating'))
            $('html, body').animate({ scrollTop: $('.rating-err').offset().top - 300}, 1000);
        @else
            $('html, body').animate({ scrollTop: $('.text-err').offset().top - 300}, 1000);
        @endif
    @endif
@endsection