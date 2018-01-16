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

        /*  .cover {
              height: 600px;
              background-size: contain;
              background: no-repeat center center;
              padding: 32px;
          }*/

        .card-center {
            object-fit: none; /* Do not scale the image */
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

        .card-body{padding: 10px 15px;}
        .card-title{font-size: 1em;}
        .star-rating .fa-star-o{color: dodgerblue;}
        .star-rating .fa-star{color: dodgerblue;}
        .button{
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
                     src="https://www.tcsworldtravel.com/sites/default/files/styles/grid_hero_desktop_1x/public/imce/Destinations/Uzbekistan/superstock_1566-360927.jpg?t=1C2Eth&itok=18O6HFcA"
                     alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                     src="https://www.tcsworldtravel.com/sites/default/files/styles/grid_hero_desktop_1x/public/imce/Destinations/Uzbekistan/superstock_1566-360927.jpg?t=1C2Eth&itok=18O6HFcA"
                     alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                     src="https://www.tcsworldtravel.com/sites/default/files/styles/grid_hero_desktop_1x/public/imce/Destinations/Uzbekistan/superstock_1566-360927.jpg?t=1C2Eth&itok=18O6HFcA"
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
                        <img style="max-height: 15rem;" class="card-img-top" src="{{asset('maxresdefault.jpg')}}"
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
                            <img style="height: 15rem; " class="card-img-top " src="{{asset('maxresdefault.jpg')}}"
                                 alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title">TASHKENT</h4>
                                <p class="card-text">Starting from $300</p>
                            </div>
                        </div>
                        <div class="card card-inverse" style="margin-left: 1rem; border: none;">
                            <img style="height: 15rem; " class="card-img-top "
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
                                    <span class="pull-right fa fa-dollar text-orange" data-rating="1"><strong>1422</strong></span>
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
                                    <span class="pull-right fa fa-dollar text-orange" data-rating="1"><strong>1422</strong></span>
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
                                    <span class="pull-right fa fa-dollar text-orange" data-rating="1"><strong>1422</strong></span>
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
                                <h5 class="card-title">Card title<span class="pull-right fa fa-heart-o"></span></h5>
                                <div class="star-rating">
                                    <span class="fa fa-star" data-rating="1"></span>
                                    <span class="fa fa-star" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="pull-right fa fa-dollar text-orange" data-rating="1"><strong>1422</strong></span>
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
                                    <span class="pull-right fa fa-dollar text-orange" data-rating="1"><strong>1422</strong></span>
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
                                    <span class="pull-right fa fa-dollar text-orange" data-rating="1"><strong>1422</strong></span>
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
    <div class="row" style="height: 200px">

    </div>
@endsection