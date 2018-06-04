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
                    <li><a href="{{ route('tour.list') }}">@lang('confirmation.result')</a></li>
                    <li><a href="{{ route('tour.show', $book->tour->slug) }}">@lang('confirmation.detail')</a></li>
                    <li><a>@lang('confirmation.payment')</a></li>
                    <li><span>@lang('confirmation.confirmation')</span></li>
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

                                    <h2 class="heading uppercase mt-0 text-success">@lang('confirmation.thank_you')</h2>
                                    <p>@lang('confirmation.your_confirmation')<span class="text-primary font700"> {{sprintf('%06d',$book->id)}}</span></p>

                                </div>

                            </div>

                            <div class="confirmation-content">

                                <div class="section-title text-left">
                                    <h4>@lang('confirmation.book_info')</h4>
                                </div>

                                <ul class="book-sum-list">
                                    <li><span class="font600">@lang('confirmation.booking_number'): </span>{{sprintf('%06d',$book->id)}}</li>
                                    <li><span class="font600">@lang('confirmation.traveller_name'): </span>{{$book->firstName}} {{$book->lastName}}</li>
                                    <li><span class="font600">@lang('confirmation.package_name'): </span>{{$book->tour->getTranslatedAttribute('title', App::getLocale(), 'ru')}} ({{$book->tour->days}} days {{$book->tour->nights}} nights)</li>
                                    <li><span class="font600">@lang('confirmation.destination'): </span> {{$book->tour->destination->getTranslatedAttribute('name', App::getLocale(), 'ru')}}</li>
                                    <li><span class="font600">@lang('confirmation.travellers'): </span> {{$book->travellers->count() + 1}}</li>
                                    <li><span class="font600">@lang('confirmation.total_price'): </span> ${{$book->price}}</li>
                                    <li><span class="font600">@lang('confirmation.billing_email'): </span>{{$book->email}}</li>
                                    <li><span class="font600">@lang('confirmation.billing_address'): </span>{{$book->address}}, {{$book->city}}, {{$book->country}} {{$book->postal}} </li>
                                    <li><span class="font600">@lang('confirmation.phone_number'): </span>{{$book->phone}}</li>
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
                                    <h4>@lang('confirmation.additional_info')</h4>
                                </div>

                                <p>@lang('confirmation.additional_info_body')</p>

                            </div>
                            {{--<button class="btn btn-primary"><i class="fa fa-print"></i> Print</button>
                            <button class="btn btn-primary btn-inverse"><i class="fa fa-envelope-o"></i> Sent to</button>--}}
                            <a class="btn btn-primary" href="{{route('home')}}"><i class="fa fa-home"></i> @lang('confirmation.home')</a>
                        </div>

                    </div>

                    <div class="col-sm-4 col-md-3 mt-50-xs">

                        <aside class="sidebar with-filter">

                            <div class="sidebar-inner">

                                <div class="sidebar-module">
                                    <h4 class="heading mt-0">@lang('confirmation.need_help')</h4>
                                    <div class="sidebar-module-inner">
                                        <p class="mb-10">@lang('confirmation.need_help_header')</p>
                                        <ul class="help-list">
                                            <li><span class="font600">@lang('confirmation.hotline')</span>: {{setting('site.phone')}}</li>
                                            <li><span class="font600">@lang('confirmation.email')</span>: {{setting('site.email')}}</li>
                                            <li><span class="font600">@lang('confirmation.livechat')</span>: {{setting('site.skype')}} (Skype)</li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="sidebar-module">
                                    <h4 class="heading mt-0">@lang('confirmation.why_booking')</h4>
                                    <div class="sidebar-module-inner">
                                        <ul class="featured-list-sm">
                                            <li>
                                                <span class="icon"><i class="fa fa-thumbs-up"></i></span>
                                                <h6 class="heading mt-0">@lang('confirmation.booking_charges')</h6>
                                                @lang('confirmation.booking_charges_header')
                                            </li>
                                            <li>
                                                <span class="icon"><i class="fa fa-credit-card"></i></span>
                                                <h6 class="heading mt-0">@lang('confirmation.cancellation_sees')</h6>
                                                @lang('confirmation.cancellation_sees_header')
                                            </li>
                                            <li>
                                                <span class="icon"><i class="fa fa-inbox"></i></span>
                                                <h6 class="heading mt-0">@lang('confirmation.instant_confirmation')</h6>
                                                @lang('confirmation.instant_confirmation_header')
                                            </li>
                                            <li>
                                                <span class="icon"><i class="fa fa-calendar"></i></span>
                                                <h6 class="heading mt-0">@lang('confirmation.flexible_booking')</h6>
                                                @lang('confirmation.flexible_booking_header')
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

