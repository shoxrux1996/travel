@extends('layouts.app')

@section('styles')
    <style>
        .crop {
            overflow: hidden;
        }

        .crop img {
            object-fit: cover;
            width: 100%;
            height: 300px;
        }

        .text-orange {
            color: #FF5F49;
        }

        .p-header {
            color: #222;
            display: table-cell;
            vertical-align: middle;
            font-weight: normal;
        }

        .icon {
            width: 72px;
            margin: 8px;
        }

        .bg-grey {
            background-color: #eee;
        }

        /*   .cover {
                 height: 600px;
                 background-size: contain;
                 background: no-repeat center center;
                 padding: 32px;
             }*/

        .card-center {
            object-fit: cover; /* Do not scale the image */
            object-position: center; /* Center the image within the element */
        }

        .card-text {
            color: white;
        }

        .card-badge {
            background: #FF5F49;
            color: white;
        }

        .rating label {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            cursor: pointer;
        }

        .rating label:last-child {
            position: static;
        }

        .rating label:nth-child(1) {
            z-index: 5;
        }

        .rating label:nth-child(2) {
            z-index: 4;
        }

        .rating label:nth-child(3) {
            z-index: 3;
        }

        .rating label:nth-child(4) {
            z-index: 2;
        }

        .rating label:nth-child(5) {
            z-index: 1;
        }

        .rating label input {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
        }

        .card-body {
            padding: 10px 15px;
        }

        .card-title {
            font-size: 1em;
        }

        .star-rating .fa-star-o {
            color: dodgerblue;
        }

        .star-rating .fa-star {
            color: dodgerblue;
        }

        .button {
            background-color: #FF5F49;
            padding: 5px 80px;
            color: white;
            cursor: hand;
        }
    </style>
@endsection

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100"
                     src="{{asset('superstock_1566-360927.jpg')}}"
                     alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                     src="{{asset('superstock_1566-360927.jpg')}}"
                     alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                     src="{{asset('superstock_1566-360927.jpg')}}"
                     alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container-fluid bg-grey">
        <div class="container">
            <br>
            <div class="row">
                <div class="col-md-4">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <img class="icon" src="{{asset('resources/navigation.svg')}}" alt="navigation">
                            </td>
                            <td>
                                <p class="p-header">
                                    <strong>300+ Destination</strong>
                                    <br>
                                    Tastes giving in passed direct me valley supply
                                </p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <img class="icon" src="{{asset('resources/user.svg')}}" alt="navigation">
                            </td>
                            <td>
                                <p class="p-header">
                                    <strong>500+ Travel Guides</strong>
                                    <br>
                                    Tastes giving in passed direct me valley supply
                                </p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <img class="icon" src="{{asset('resources/happy.svg')}}" alt="navigation">
                            </td>
                            <td>
                                <p class="p-header">
                                    <strong>20000+ Happy Customers</strong>
                                    <br>
                                    Tastes giving in passed direct me valley supply
                                </p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
        </div>
    </div>
    <div class="container text-center" style="padding-bottom: 30px;">
        <br>
        <h2 class="text-orange">
            TOP DESTINATIONS
        </h2>
        <br>
        <div class="row">
            <div class="col-md-6">
                <a href="#">
                    <div class="card card-inverse">
                        <img class="card-center" style="height: 32rem;" src="{{asset('Uzbekistan.jpg')}}"
                             alt="Card image">
                        <div class="card-img-overlay">
                            <h4 class="card-title">TASHKENT</h4>
                            <p class="card-text">Starting from $300</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6" style="">
                <a href="#">
                    <div class="card card-inverse" style="margin-bottom: 2rem;">
                        <img style="max-height: 15rem;" class="card-img-top card-center"
                             src="{{asset('maxresdefault.jpg')}}"
                             alt="Card image">
                        <div class="card-img-overlay">
                            <h4 class="card-title">TASHKENT</h4>
                            <p class="card-text">Starting from $300</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="card-group">
                        <div class="card card-inverse" style="">
                            <img style="height: 15rem; " class="card-img-top card-center"
                                 src="{{asset('maxresdefault.jpg')}}"
                                 alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title">TASHKENT</h4>
                                <p class="card-text">Starting from $300</p>
                            </div>
                        </div>
                        <div class="card card-inverse" style="margin-left: 1rem; border: none;">
                            <img style="height: 15rem; " class="card-img-top card-center"
                                 src="{{asset('registan-ensemble-samarkand-at-night.jpg')}}" alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title">TASHKENT</h4>
                                <p class="card-text">Starting from $300</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-grey">
        <div class="container text-center">
            <br>
            <h2 class="text-orange">
                SPECIAL PACKAGES
            </h2>
            <br>
            <div class="row text-left">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img-overlay" style="max-height: 50px;">
                                <span class="badge card-badge">4 days 3 nights</span>
                            </div>
                            <div class="crop">
                                <img src="{{asset('Uzbekistan.jpg')}}" alt="Card image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title<span class="pull-right fa fa-heart-o"></span></h5>
                                <div class="star-rating">
                                    <span class="fa fa-star" data-rating="1"></span>
                                    <span class="fa fa-star" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span>/ 7</span>
                                    <span class="pull-right fa fa-dollar text-orange"
                                          data-rating="1"><strong>1422</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img-overlay" style="max-height: 50px;">
                                <span class="badge card-badge">4 days 3 nights</span>
                            </div>
                            <div class="crop">
                                <img src="{{asset('registan-ensemble-samarkand-at-night.jpg')}}" alt="Card image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title<span class="pull-right fa fa-heart-o"></span></h5>
                                <div class="star-rating">
                                    <span class="fa fa-star" data-rating="1"></span>
                                    <span class="fa fa-star" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span>/ 7</span>
                                    <span class="pull-right fa fa-dollar text-orange"
                                          data-rating="1"><strong>1422</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img-overlay" style="max-height: 50px;">
                                <span class="badge card-badge">4 days 3 nights</span>
                            </div>
                            <div class="crop">
                                <img src="{{asset('maxresdefault.jpg')}}" alt="Card image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title<span class="pull-right fa fa-heart-o"></span></h5>
                                <div class="star-rating">
                                    <span class="fa fa-star" data-rating="1"></span>
                                    <span class="fa fa-star" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span>/ 7</span>
                                    <span class="pull-right fa fa-dollar text-orange"
                                          data-rating="1"><strong>1422</strong></span>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img-overlay" style="max-height: 50px;">
                                <span class="badge card-badge">4 days 3 nights</span>
                            </div>
                            <div class="crop">
                                <img src="{{asset('Uzbekistan.jpg')}}" alt="Card image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title<span
                                            class="pull-right fa fa-heart text-orange"></span></h5>
                                <div class="star-rating">
                                    <span class="fa fa-star" data-rating="1"></span>
                                    <span class="fa fa-star" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span>/ 7</span>
                                    <span class="pull-right fa fa-dollar text-orange"
                                          data-rating="1"><strong>1422</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img-overlay" style="max-height: 50px;">
                                <span class="badge card-badge">4 days 3 nights</span>
                            </div>
                            <div class="crop">
                                <img src="{{asset('registan-ensemble-samarkand-at-night.jpg')}}" alt="Card image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title<span class="pull-right fa fa-heart-o"></span></h5>
                                <div class="star-rating">
                                    <span class="fa fa-star" data-rating="1"></span>
                                    <span class="fa fa-star" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span>/ 7</span>
                                    <span class="pull-right fa fa-dollar text-orange"
                                          data-rating="1"><strong>1422</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img-overlay" style="max-height: 50px;">
                                <span class="badge card-badge">4 days 3 nights</span>
                            </div>
                            <div class="crop">
                                <img src="{{asset('maxresdefault.jpg')}}" alt="Card image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title<span
                                            class="pull-right fa fa-heart text-orange"></span></h5>
                                <div class="star-rating">
                                    <span class="fa fa-star" data-rating="1"></span>
                                    <span class="fa fa-star" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span>/ 7</span>
                                    <span class="pull-right fa fa-dollar text-orange"
                                          data-rating="1"><strong>1422</strong></span>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <button class="btn button">SEE ALL</button>
            <br>
            <br>
        </div>

    </div>
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <br>
                <h3 class="text-orange">
                    WHY BOOKING WITH US
                </h3>
                <p class="p-header">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque cum dolore eveniet fugit inventore
                    labore maxime nemo quisquam, quod repudiandae velit voluptas voluptatem voluptatum
                </p>
                <br>
                <h4 style="font-weight: 600">
                    Experts On Tour
                </h4>
                <div class="media">
                    <img class="align-self-start mr-3" src="{{ asset('resources/users.svg') }}" alt="image" width="72">
                    <div class="media-body">
                        <p style="text-align: justify">
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                            sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce
                            condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </p>
                    </div>
                </div>
                <br>
                <h4 style="font-weight: 600">
                    Quality Accommodation
                </h4>
                <div class="media">
                    <img class="align-self-start mr-3" src="{{ asset('resources/home.svg') }}" alt="image" width="72">
                    <div class="media-body">
                        <p style="text-align: justify">
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                            sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce
                            condimentum nunc ac nisi vulputate fringilla.
                        </p>
                    </div>
                </div>
                <br>
                <h4 style="font-weight: 600">
                    Comfortable Transport
                </h4>
                <div class="media">
                    <img class="align-self-start mr-3" src="{{ asset('resources/car.svg') }}" alt="image" width="72">
                    <div class="media-body">
                        <p style="text-align: justify">
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                            sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce
                            condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="crop" style="height: 100%;">
                    <img src="{{ asset('superstock_1566-360927.jpg') }}" alt="Image" style="height: 100%;">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background: #FF5F49;">
        <div class="container">
            <br>
            <div class="row text-center">
                <div class="col-md-3 text-light">
                    <img src="{{ asset('resources/customer.svg') }}" alt="happy" width="72">
                    <h3><strong>1331</strong></h3>
                    <p>Happy clients</p>
                </div>
                <div class="col-md-3 text-light">
                    <img src="{{ asset('resources/departures.svg') }}" alt="happy" width="72">
                    <h3><strong>515</strong></h3>
                    <p>Awesome tours</p>
                </div>
                <div class="col-md-3 text-light">
                    <img src="{{ asset('resources/case.svg') }}" alt="happy" width="72">
                    <h3><strong>120</strong></h3>
                    <p>Partners</p>
                </div>
                <div class="col-md-3 text-light">
                    <img src="{{ asset('resources/bubbles.svg') }}" alt="happy" width="72">
                    <h3><strong>750</strong></h3>
                    <p>Comments</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-grey">
        <div class="container text-center">
            <br>
            <h3 class="text-orange">
                TESTIMONIAL
            </h3>
            <h4>What our customers say about</h4>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('resources/user1.svg') }}" width="128" class="rounded-circle" alt="Alex" style="background-color: white; padding: 12px;">
                    <h4>Alex</h4>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('resources/user2.svg') }}" width="128" class="rounded-circle" alt="Alex" style="background-color: white; padding: 12px;">
                    <h4>Alisher</h4>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('resources/user3.svg') }}" width="128" class="rounded-circle" alt="Alex" style="background-color: white; padding: 12px;">
                    <h4>Naseer</h4>
                </div>
            </div>
            <br>
        </div>
    </div>
    <div class="container text-center">
        <br>
        <br>
        <img src="{{ asset('resources/Logo.png') }}" alt="Logo" width="156">
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
@endsection