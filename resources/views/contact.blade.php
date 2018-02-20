@extends('layouts.main')
@section('title')
    <title>Silk Road Asia Travel Uz</title>
    <meta name="description"
          content="Туристическая агенства Silk Road Asia Travel Uzbekistan"/>
    <meta name="keywords" content="silkroadasiatravel.uz, silkroad, silk road asia travel ,тур агенства, tour package, hotel, vocation, booking, trip, travel, tourism, tourist"/>
@endsection
@section('content')
    <!-- start Main Wrapper -->
    <div class="main-wrapper">

        <!-- start end Page title -->
        <div class="page-title" style="background-image:url({{asset('dist/images/hero-header/breadcrumb.jpg')}});">

            <div class="container">

                <div class="row">

                    <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">

                        <h1 class="hero-title">Contact Us</h1>

                        <ol class="breadcrumb-list">
                            <li><a href="{{route('home')}}">Homepage</a></li>
                            <li><span>Contact Us</span></li>
                        </ol>

                    </div>

                </div>

            </div>

        </div>
        <!-- end Page title -->

        <div class="content-wrapper">

            <div class="container">

                <div class="row">

                    <div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 pb-20">

                        <div class="section-title">

                            <h3>Our Offices are worldwide</h3>

                            <p>Expression acceptance imprudence particular had eat unsatiable.</p>

                        </div>

                    </div>

                </div>

            </div>

            <div id="map_5" class="mapbox"></div>
{{--
            <div class="bg-light section pt-40 pb-20">

                <div class="container">

                    <div class="map-contact">

                        <div class="top-place-inner">

                            <div id="map_5_list" class="list row gap-0">

                               --}}{{-- <div class="col-sm-4">
                                </div>--}}{{--

                                --}}{{--<div class="col-sm-4">
                                    <div class="maplocation map-top-destination-item"
                                         data-name="Koh Sire"
                                         data-lat="1.290270"
                                         data-cat="place2"
                                         data-lng="103.851959">

                                        <div class="top-place-item mb-30 maplink">
                                            <div class="icon"><img src="{{asset('dist/images/map-marker/02.png')}}" alt="map" /></div>
                                            <div class="content">
                                                <h5 class="heading mt-0">Branch @ Singapore</h5>
                                                <ul class="address-list">
                                                    <li><i class="fa fa-map-marker"></i> 6985, Pasir Panjang Road #01-01 Citilink Warehouse Complex, Singapore, 118529</li>
                                                    <li><i class="fa fa-phone"></i> +65-6375-8560 </li>
                                                    <li><i class="fa fa-envelope"></i> dubai-singapore@tourpacker.com</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="infobox">
                                            <div class="infobox-inner">
                                                <div class="image">
                                                    <img src="{{asset('dist/images/contact/singapore.jpg')}}" alt="Images" />
                                                </div>
                                                <div class="content">
                                                    <h6 class="heading">Our office at Singapore</h6>
                                                    <ul class="address-list">
                                                        <li><i class="fa fa-map-marker"></i> 6985, Pasir Panjang Road #01-01 Citilink Warehouse Complex, Singapore, 118529</li>
                                                        <li><i class="fa fa-phone"></i> +65-6375-8560 </li>
                                                        <li><i class="fa fa-envelope"></i> dubai-singapore@tourpacker.com</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="maplocation map-top-destination-item"
                                         data-name="Berline, Germany"
                                         data-lat="52.518623"
                                         data-cat="place3"
                                         data-lng="13.376198">

                                        <div class="top-place-item mb-30 maplink">
                                            <div class="icon"><img src="{{asset('dist/images/map-marker/03.png')}}" alt="map" /></div>
                                            <div class="content">
                                                <h5 class="heading mt-0">Branch @ Berlin, Germany</h5>
                                                <ul class="address-list">
                                                    <li><i class="fa fa-map-marker"></i> Tour Packer Company, Charlottenstraße 49, 10117 Berlin, Germany</li>
                                                    <li><i class="fa fa-phone"></i> +49(30)26050</li>
                                                    <li><i class="fa fa-envelope"></i> Berlin-support@tourpacker.com</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="infobox">
                                            <div class="infobox-inner">
                                                <div class="image">
                                                    <img src="{{asset('dist/images/contact/berlin.jpg')}}" alt="Images" />
                                                </div>
                                                <div class="content">
                                                    <h6 class="heading">Our office at Berlin, Germany</h6>
                                                    <ul class="address-list">
                                                        <li><i class="fa fa-map-marker"></i> Tour Packer Company, Charlottenstraße 49, 10117 Berlin, Germany</li>
                                                        <li><i class="fa fa-phone"></i> +49(30)26050</li>
                                                        <li><i class="fa fa-envelope"></i> Berlin-support@tourpacker.com</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>--}}{{--

                            </div>

                        </div>

                    </div>

                </div>

            </div>--}}

            <div class="section pt-60 pb-0">

                <div class="container">

                    <div class="row">

                        <div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

                            <div class="section-title">

                                <h3>Keep in touch</h3>

                            </div>

                        </div>

                    </div>

                    <form class="contact-form-wrapper" data-toggle="validator" action="{{route('message')}}" method="POST">

                        {{csrf_field()}}
                        <div class="row">

                            <div class="col-sm-4">


                                <div class="maplocation map-top-destination-item"
                                     data-name="Dubai, UAE"
                                     data-lat=" 25.276987"
                                     data-cat="place1"
                                     data-lng="55.2708">
                                    <div class="top-place-item maplink">
                                        <div class="icon"><img src="{{asset('dist/images/map-marker/01.png')}}" alt="map" /></div>
                                        <div class="content">
                                            <h5 class="heading mt-0"> @ Tashkent, Uzbekistan</h5>
                                            <ul class="address-list">
                                                <li><i class="fa fa-map-marker"></i> {{setting('site.address')}}</li>
                                                <li><i class="fa fa-phone"></i> {{setting('site.phone')}}</li>
                                                <li><i class="fa fa-envelope"></i> {{setting('site.email')}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    {{--<div class="infobox">
                                        <div class="infobox-inner">
                                            <div class="image">
                                                <img src="{{asset('dist/images/contact/dubai.jpg')}}" alt="Images" />
                                            </div>
                                            <div class="content">
                                                <h6 class="heading">Our Office At Dubai</h6>
                                                <ul class="address-list">
                                                    <li><i class="fa fa-map-marker"></i> 545, Marina Rd., Mohammed Bin Rashid Boulevard, Dubai 123234,</li>
                                                    <li><i class="fa fa-phone"></i> + 971 4 436 4784</li>
                                                    <li><i class="fa fa-envelope"></i> dubai-support@tourpacker.com</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>--}}
                                </div>
                                <div class="boxed-social clearfix">
                                    <a href="{{setting('site.facebook')}}" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="{{setting('site.telegram')}}" data-toggle="tooltip" data-placement="top" title="Telegram"><i class="fa fa-telegram"></i></a>
                                    <a href="{{setting('site.telegram')}}" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                    <a href="{{setting('site.instagram')}}" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>

                            <div class="col-sm-8">

                                <div class="row">


                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputName">Your Name <span class="font10 text-danger">(required)</span></label>
                                            <input id="inputName" type="text" class="form-control" name="name" data-error="Your name is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputEmail">Your Email <span class="font10 text-danger">(required)</span></label>
                                            <input id="inputEmail" type="email" class="form-control" name="email" data-error="Your email is required and must be a valid email address" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" class="form-control" name="subject" />
                                        </div>

                                    </div>

                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="inputMessage">Message <span class="font10 text-danger">(required)</span></label>
                                            <textarea id="inputMessage" class="form-control" rows="9" name="message" data-minlength="50" data-error="Your message is required and must not less than 50 characters" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                    </div>

                                    <div class="col-sm-12 text-right text-left-sm">
                                        <button type="submit" class="btn btn-primary mt-5">Send Message</button>
                                    </div>


                                </div>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>


    </div>
    <!-- end Main Wrapper -->

@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('dist/js/jquery.raty.js')}}"></script>
    <script>

      function initMap() {

        var map = new google.maps.Map(document.getElementById('map_5'), {
          zoom: 16,
          center: {lat: 41.276965, lng: 69.2050518},
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          maxZoom: 18
        });

        var markers = [];
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(41.276965,69.2050518),
            icon: new google.maps.MarkerImage('{{ asset('dist/images/map-marker/01-marker.png') }}', new google.maps.Size(35, 50))
        });
  
        markers.push(marker);
       
        var options = {
            maxZoom: 18
        };
        
        var markerCluster = new MarkerClusterer(map, markers, options);
      }
    </script>
    <script src="{{asset('dist/js/markerclusterer1.js')}}">
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVrhGvvKi22o6riRW9YXrUygRVYZt77YU&callback=initMap">
    </script>
@endsection
