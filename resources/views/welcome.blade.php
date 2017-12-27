@extends('layouts.app')

@section('styles')
    <style>
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

        .cover {
            height: 600px;
            background-size: contain;
            background: no-repeat center center;
            padding: 32px;
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
    <div class="container text-center">
        <br>
        <h2 class="text-orange">
            TOP DESTINATIONS
        </h2>
        <br>
        <div class="row">
            <div class="cover text-left"
                 style="width: 50%;
                 background-image: url('https://c1.staticflickr.com/8/7163/6519841459_9a17376267_b.jpg');">
                <h3 class="display-5 text-white">TASHKENT</h3>
                <h4 class="text-white">Starting from $300</h4>
            </div>
            <div style="width: 50%; height: 100%">
                <div class="col-md-12 text-left" style="height: 40%;">
                    <div style="position: absolute; margin: 32px;">
                        <h3 class="display-5 text-white">BUKHARA</h3>
                        <h4 class="text-white">Starting from $250</h4>
                    </div>
                    <img class="img-fluid"
                         src="http://gettingnowhere.net/wp-content/uploads/2012/07/Bukhara-at-night.jpg" alt="bukhara">
                </div>
                <div style="width: 100%; height: 60%">
                    <div class="text-left cover"
                         style="width: 50%; height: 100%;
                     background-image: url('http://static.panoramio.com/photos/large/46576059.jpg')">
                        <h3 class="display-5 text-white">BUKHARA</h3>
                        <h4 class="text-white">Starting from $250</h4>
                    </div>
                    <div class="text-left cover"
                         style="width: 50%; height: 100%;
                     background-image: url('http://static.panoramio.com/photos/large/46576059.jpg')">
                        <h3 class="display-5 text-white">BUKHARA</h3>
                        <h4 class="text-white">Starting from $250</h4>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
@endsection