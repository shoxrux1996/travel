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

        <div class="breadcrumb-wrapper bg-light-2">

            <div class="container">

                <ol class="breadcrumb-list booking-step">
                    <li><a href="#">Search</a></li>
                    <li><a href="#">Result</a></li>
                    <li><a href="#">Detail</a></li>
                    <li><a href="#">Payment</a></li>
                    <li><span>Confirmation</span></li>
                </ol>

            </div>

        </div>

        <div class="content-wrapper">

            <div class="container">

                <div class="row">

                    <div class="col-sm-8 col-md-9">

                        <div class="confirmation-wrapper">

                            <div class="payment-success">

                                <div class="icon">
                                    <i class="pe-7s-check text-success"></i>
                                </div>

                                <div class="content">

                                    <h2 class="heading uppercase mt-0 text-success">Thank you, your booking is complete!</h2>
                                    <p>Your confirmation number is <span class="text-primary font700">{{sprintf('%06d',$book->id)}}</span></p>

                                </div>

                            </div>

                            <div class="confirmation-content">

                                <div class="section-title text-left">
                                    <h4>Booking Information</h4>
                                </div>

                                <ul class="book-sum-list">
                                    <li><span class="font600">Booking Number: </span>{{sprintf('%06d',$book->id)}}</li>
                                    <li><span class="font600">Traveller Name: </span>{{$book->firstName}} {{$book->lastName}}</li>
                                    <li><span class="font600">Package Name: </span>{{$book->tour->getTranslatedAttribute('title', App::getLocale(), 'ru')}} ({{$book->tour->days}} days {{$book->tour->nights}} nights)</li>
                                    <li><span class="font600">Destination: </span> {{$book->tour->destination->getTranslatedAttribute('name', App::getLocale(), 'ru')}}</li>
                                    <li><span class="font600">Travellers: </span> {{$book->travellers->count() + 1}}</li>
                                    <li><span class="font600">Total Price: </span> ${{$book->price}}</li>
                                    <li><span class="font600">Billing Email: </span>{{$book->email}}</li>
                                    <li><span class="font600">Billing Address: </span>{{$book->address}}, {{$book->city}}, {{$book->country}} {{$book->postal}} </li>
                                    <li><span class="font600">Phone Number: </span>{{$book->phone}}</li>
                                </ul>

                            </div>

                            {{--<div class="confirmation-content">

                                <div class="section-title text-left">
                                    <h4>Payment</h4>

                                </div>

                                <p>Prepared do an dissuade be so whatever steepest. Yet her beyond looked either day wished nay. By doubtful disposed do juvenile an. Now curiosity you explained immediate why behaviour. An dispatched impossible of of melancholy favourable. Our quiet not heart along scale sense timed. Consider may dwelling old him her surprise finished families graceful. Gave led past poor met fine was new.</p>
                                <p>Talking chamber as shewing an it minutes. Trees fully of blind do. Exquisite favourite at do extensive listening. Improve up musical welcome he. Gay attended vicinity prepared now diverted. Esteems it ye sending reached as. Longer lively her design settle tastes advice mrs off who. </p>

                            </div>--}}

                            <div class="confirmation-content">

                                <div class="section-title text-left">
                                    <h4>Additional Information</h4>
                                </div>

                                <p>Abilities or he perfectly pretended so strangers be exquisite. Oh to another chamber pleased imagine do in. Went me rank at last loud shot an draw. Excellent so to no sincerity smallness. Removal request delight if on he we. Unaffected in we by apartments astonished to decisively themselves. Offended ten old consider speaking.</p>

                            </div>
                            {{--<button class="btn btn-primary"><i class="fa fa-print"></i> Print</button>
                            <button class="btn btn-primary btn-inverse"><i class="fa fa-envelope-o"></i> Sent to</button>--}}
                            <a class="btn btn-primary" href="{{route('home')}}"><i class="fa fa-home"></i> Home</a>
                        </div>

                    </div>

                    <div class="col-sm-4 col-md-3 mt-50-xs">

                        <aside class="sidebar with-filter">

                            <div class="sidebar-inner">

                                <div class="sidebar-module">
                                    <h4 class="heading mt-0">Need Booking Help?</h4>
                                    <div class="sidebar-module-inner">
                                        <p class="mb-10">Paid was hill sir high 24/7. For him precaution any advantages dissimilar.</p>
                                        <ul class="help-list">
                                            <li><span class="font600">Hotline</span>: +1900 12 213 21</li>
                                            <li><span class="font600">Email</span>: support@tourpacker.com</li>
                                            <li><span class="font600">Livechat</span>: tourpacker (Skype)</li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="sidebar-module">
                                    <h4 class="heading mt-0">Why booking with us?</h4>
                                    <div class="sidebar-module-inner">
                                        <ul class="featured-list-sm">
                                            <li>
                                                <span class="icon"><i class="fa fa-thumbs-up"></i></span>
                                                <h6 class="heading mt-0">No Booking Charges</h6>
                                                We don't charge you an extra fee for booking a hotel room with us
                                            </li>
                                            <li>
                                                <span class="icon"><i class="fa fa-credit-card"></i></span>
                                                <h6 class="heading mt-0">No Cancellation Sees</h6>
                                                We don't charge you a cancellation or modification fee in case plans change
                                            </li>
                                            <li>
                                                <span class="icon"><i class="fa fa-inbox"></i></span>
                                                <h6 class="heading mt-0">Instant Confirmation</h6>
                                                Instant booking confirmation whether booking online or via the telephone
                                            </li>
                                            <li>
                                                <span class="icon"><i class="fa fa-calendar"></i></span>
                                                <h6 class="heading mt-0">Flexible Booking</h6>
                                                You can book up to a whole year in advance or right up until the moment of your stay
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </aside>

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

