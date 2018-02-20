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
                    <li><span>Confirmation</span></li>
                </ol>

            </div>

        </div>

        <div class="content-wrapper">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 visible-xs mb-50">

                        <div class="price-summary-wrapper">

                            <h4 class="heading mt-0 text-primary uppercase">My Trip</h4>

                            <ul class="price-summary-list">

                                <li>
                                    <h6 class="heading mt-0 mb-0">{{$tour->getTranslatedAttribute('title', App::getLocale(),'ru')}}</h6>
                                    <p class="font12 text-light">{{$tour->days}} days {{$tour->nights}} nights</p>
                                </li>

                                <li>
                                    <h6 class="heading mt-0 mb-0">Period from</h6>
                                    <p class="font12 text-light">{{\Carbon\Carbon::parse($tour->from)->formatLocalized('%A')}}</p>
                                </li>

                                <li>
                                    <h6 class="heading mt-0 mb-0">Period to</h6>
                                    <p class="font12 text-light">{{\Carbon\Carbon::parse($tour->to)->formatLocalized('%A')}}</p>
                                </li>

                                <li>
                                    <h6 class="heading mt-0 mb-0">Country</h6>
                                    <p class="font12 text-light">{{$tour->destination->getTranslatedAttribute('name', App::getLocale(),'ru')}}</p>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <h6 class="heading mt-20 mb-5 text-primary uppercase">Price per person</h6>
                                    <div class="row gap-10 mt-10">
                                        <div class="col-xs-7 col-sm-7">
                                            Brochure Price
                                        </div>
                                        <div class="col-xs-5 col-sm-5 text-right">
                                            ${{$tour->price}}
                                        </div>
                                    </div>
                                    <div class="row gap-10 mt-10">
                                        <div class="col-xs-7 col-sm-7">
                                            Tax &amp; fee
                                        </div>
                                        <div class="col-xs-5 col-sm-5 text-right">
                                            $0
                                        </div>
                                    </div>
                                </li>

                                <li class="divider"></li>

                                <li class="text-right font600 font14">
                                    ${{$tour->price}}
                                </li>

                                <li class="divider"></li>

                                <li>

                                    <div class="row gap-10 font600 font14">
                                        <div class="col-xs-9 col-sm-9">
                                            Number of Travellers
                                        </div>
                                        <div class="col-xs-3 col-sm-3 text-right numberOfTraveller">
                                            1
                                        </div>
                                    </div>

                                </li>

                                <li class="total-price">

                                    <div class="row gap-10">
                                        <div class="col-xs-6 col-sm-6">
                                            <h5 class="heading mt-0 mb-0 text-white">Amount due</h5>
                                            <p class="font12">before departure</p>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 text-right">
                                            <span class="block font20 font600 mb-5 tourPrice">${{$tour->price}}</span>
                                            <span class="font10 line10 block">**Best Price Guarantee </span>
                                        </div>
                                    </div>

                                </li>

                            </ul>

                        </div>

                    </div>

                    <div class="col-sm-8 col-md-9" role="main">

                        <div class="section-title text-left">

                            <h3>{{$tour->getTranslatedAttribute('title', App::getLocale(),'ru')}}<small> / {{$tour->days}} days {{$tour->nights}} nights</small></h3>

                        </div>

                        <div class="payment-container">

                            <form action="{{route('book', $tour->id)}}" method="post" onsubmit="return bookSubmit();">
                                {{csrf_field()}}
                                <div class="payment-box">

                                    <div class="payment-header clearfix">

                                        <div class="number">
                                            1
                                        </div>

                                        <div class="row gap-10">

                                            <div class="col-sm-9">
                                                <h5 class="heading mt-0">Your selected departure date</h5>
                                            </div>

                                            <div class="col-sm-3">
                                                <a href="#" class="btn btn-primary btn-inverse btn-sm pull-right pull-left-xs mb-20-xss">change</a>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="payment-content">

                                        <div class="payment-content">
                                            <p>Your departure date: {{\Carbon\Carbon::parse($tour->from)->formatLocalized('%B')}} - {{\Carbon\Carbon::parse($tour->to)->formatLocalized('%B')}}</p>
                                        </div>

                                    </div>

                                </div>

                                <div class="payment-box">

                                    <div class="payment-header clearfix">

                                        <div class="number">
                                            2
                                        </div>

                                        <h5 class="heading mt-0">Traveller Details</h5>

                                    </div>

                                    <div class="payment-content">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="payment-traveller">
                                            <a style="display: none;" href="" class="pull-right font12 traveller-remove" ><i class="fa fa-times-circle"></i></a>

                                            <div class="row gap-0">

                                                <div class="col-sm-9 col-sm-offser-3 col-md-10 col-md-offset-2">
                                                    <h6 class="heading" id="heading">Traveller 1</h6>
                                                </div>

                                            </div>

                                          {{--  <div class="form-horizontal">
                                                <div class="form-group gap-20 select2-input-hide">
                                                    <label class="col-sm-3 col-md-2 control-label">Title:</label>
                                                    <div class="col-sm-3 col-md-2">
                                                        <select class="select2-no-search form-control" data-placeholder="Title" name="gender_1" id="gender_1" >
                                                            <option value="">Title</option>
                                                            <option value="mr">Mr.</option>
                                                            <option value="mrs">Mrs.</option>
                                                            <option value="miss">Miss</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>--}}

                                            <div class="form-horizontal">
                                                <div class="form-group gap-20">
                                                    <label class="col-sm-3 col-md-2 control-label">First Name:</label>
                                                    <div class="col-sm-5 col-md-4">
                                                        <input type="text" class="form-control" value="" name="firstName[]" id="firstName_1" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-horizontal">
                                                <div class="form-group gap-20">
                                                    <label class="col-sm-3 col-md-2 control-label">Last Name:</label>
                                                    <div class="col-sm-5 col-md-4">
                                                        <input type="text" class="form-control" value="" name="lastName[]" id="lastName_1" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-horizontal">
                                                <div class="form-group gap-20 select2-input-hide">
                                                    <label class="col-sm-3 col-md-2 control-label">Gender:</label>
                                                    <div class="col-sm-3 col-md-2">
                                                        <select class="select2-no-search form-control" data-placeholder="Gender" name="gender[]" id="gender_1" required>
                                                            <option value="">Gender</option>
                                                            <option value="m">Male.</option>
                                                            <option value="f">Female.</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-horizontal">
                                                <div class="form-group gap-20 select2-input-hide">
                                                    <label class="col-sm-3 col-md-2 control-label">Date:</label>
                                                    <div class="col-sm-8 col-md-6">
                                                        <div class="row gap-15">
                                                            <div class="col-xs-4 col-sm-4">
                                                                <select class="select2-no-search form-control" data-placeholder="Date" id="date_1" name="date[]" required>
                                                                    <option value="">Date</option>
                                                                    <option value="01">01</option>
                                                                    <option value="02">02</option>
                                                                    <option value="03">03</option>
                                                                    <option value="04">04</option>
                                                                    <option value="05">05</option>
                                                                    <option value="06">06</option>
                                                                    <option value="07">07</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-xs-4 col-sm-4">
                                                                <select class="select2-no-search form-control" data-placeholder="Month" id="month_1" name="month[]" required>
                                                                    <option value="">Month</option>
                                                                    <option value="jan">Jan</option>
                                                                    <option value="feb">Feb</option>
                                                                    <option value="mar">Mar</option>
                                                                    <option value="apr">Apr</option>
                                                                    <option value="may">May</option>
                                                                    <option value="jun">Jun</option>
                                                                    <option value="jul">Jul</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-xs-4 col-sm-4">
                                                                <select class="select2-no-search form-control" data-placeholder="Year" name="year_1" id="year[]" required>
                                                                    <option value="">Year</option>
                                                                    <option value="1985">1985</option>
                                                                    <option value="1986">1986</option>
                                                                    <option value="1987">1987</option>
                                                                    <option value="1988">1988</option>
                                                                    <option value="1900">1900</option>
                                                                    <option value="1901">1901</option>
                                                                    <option value="1902">1902</option>
                                                                </select>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-horizontal">
                                                <div class="form-group gap-20">
                                                    <label class="col-sm-3 col-md-2 control-label">Email:</label>
                                                    <div class="col-sm-5 col-md-4">
                                                        <input type="email" class="form-control" value="" name="email" id="email_1" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-horizontal">
                                                <div class="form-group gap-20">
                                                    <label class="col-sm-3 col-md-2 control-label">Phone Number:</label>
                                                    <div class="col-sm-5 col-md-4">
                                                        <input type="text" class="form-control" value="" name="phone" id="phone_1" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-horizontal">
                                                <div class="form-group gap-20">
                                                    <label class="col-sm-3 col-md-2 control-label">Nationality:</label>
                                                    <div class="col-sm-5 col-md-4">
                                                        <select class="select2-single form-control" data-placeholder="Nationality" name="nationality" id="nationality_1" required>
                                                            <option value="">Nationality</option>
                                                            <option value="Thai">Thai</option>
                                                            <option value="Malaysian">Malaysian</option>
                                                            <option value="Indonesian">Indonesian</option>
                                                            <option value="American">American</option>
                                                            <option value="England">England</option>
                                                            <option value="German">German</option>
                                                            <option value="Polish">Polish</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        {{--<div class="payment-traveller">

                                            <a href="#" class="pull-right font12 traveller-remove"><i class="fa fa-times-circle"></i></a>

                                            <div class="row gap-0 gap-15">

                                                <div class="col-sm-9 col-sm-offser-3 col-md-10 col-md-offset-2">
                                                    <h6 class="heading">Traveller 2</h6>
                                                </div>

                                            </div>

                                            <div class="form-horizontal">
                                                <div class="form-group gap-20 select2-input-hide">
                                                    <label class="col-sm-3 col-md-2 control-label">Title:</label>
                                                    <div class="col-sm-3 col-md-2">
                                                        <select class="select2-no-search form-control" data-placeholder="Title">
                                                            <option value="">Title</option>
                                                            <option value="mr">Mr.</option>
                                                            <option value="mrs">Mrs.</option>
                                                            <option value="miss">Miss</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-horizontal">
                                                <div class="form-group gap-20">
                                                    <label class="col-sm-3 col-md-2 control-label">First Name:</label>
                                                    <div class="col-sm-5 col-md-4">
                                                        <input type="text" class="form-control" value="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-horizontal">
                                                <div class="form-group gap-20">
                                                    <label class="col-sm-3 col-md-2 control-label">Last Name:</label>
                                                    <div class="col-sm-5 col-md-4">
                                                        <input type="text" class="form-control" value="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-horizontal">
                                                <div class="form-group gap-20 select2-input-hide">
                                                    <label class="col-sm-3 col-md-2 control-label">Gender:</label>
                                                    <div class="col-sm-3 col-md-2">
                                                        <select class="select2-no-search form-control" data-placeholder="Gender">
                                                            <option value="">Gender</option>
                                                            <option value="male">Male.</option>
                                                            <option value="female">Female.</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-horizontal">
                                                <div class="form-group gap-20 select2-input-hide">
                                                    <label class="col-sm-3 col-md-2 control-label">Gender:</label>
                                                    <div class="col-sm-8 col-md-6">

                                                        <div class="row gap-15">

                                                            <div class="col-xs-4 col-sm-4">
                                                                <select class="select2-no-search form-control" data-placeholder="Date">
                                                                    <option value="">Date</option>
                                                                    <option value="01">01</option>
                                                                    <option value="02">02</option>
                                                                    <option value="03">03</option>
                                                                    <option value="04">04</option>
                                                                    <option value="05">05</option>
                                                                    <option value="06">06</option>
                                                                    <option value="07">07</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-xs-4 col-sm-4">
                                                                <select class="select2-no-search form-control" data-placeholder="Month">
                                                                    <option value="">Month</option>
                                                                    <option value="jan">Jan</option>
                                                                    <option value="feb">Feb</option>
                                                                    <option value="mar">Mar</option>
                                                                    <option value="apr">Apr</option>
                                                                    <option value="may">May</option>
                                                                    <option value="jun">Jun</option>
                                                                    <option value="jul">Jul</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-xs-4 col-sm-4">
                                                                <select class="select2-no-search form-control" data-placeholder="Year">
                                                                    <option value="">Year</option>
                                                                    <option value="1985">1985</option>
                                                                    <option value="1986">1986</option>
                                                                    <option value="1987">1987</option>
                                                                    <option value="1988">1988</option>
                                                                    <option value="1900">1900</option>
                                                                    <option value="1901">1901</option>
                                                                    <option value="1902">1902</option>
                                                                </select>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-horizontal">
                                                <div class="form-group gap-20">
                                                    <label class="col-sm-3 col-md-2 control-label">Nationality:</label>
                                                    <div class="col-sm-5 col-md-4">
                                                        <select class="select2-single form-control" data-placeholder="Nationality">
                                                            <option value="">Nationality</option>
                                                            <option value="Thai">Thai</option>
                                                            <option value="Malaysian">Malaysian</option>
                                                            <option value="Indonesian">Indonesian</option>
                                                            <option value="American">American</option>
                                                            <option value="England">England</option>
                                                            <option value="German">German</option>
                                                            <option value="Polish">Polish</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>--}}

                                        <div class="text-center">
                                            <button onclick="addTraveler();" type="button" class="btn btn-primary btn-sm btn-inverse">Add another traveller</button>
                                        </div>

                                    </div>

                                </div>

                                <div class="payment-box">

                                    <div class="payment-header clearfix">

                                        <div class="number">
                                            3
                                        </div>

                                        <h5 class="heading mt-0">Billing Address</h5>

                                    </div>

                                    <div class="payment-content">

                                        <div class="form-horizontal">
                                            <div class="form-group gap-20">
                                                <label class="col-sm-3 col-md-2 control-label">Address:</label>
                                                <div class="col-sm-5 col-md-4">
                                                    <input type="text" name="address" class="form-control" value="" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-horizontal">
                                            <div class="form-group gap-20">
                                                <label class="col-sm-3 col-md-2 control-label">City:</label>
                                                <div class="col-sm-5 col-md-4">
                                                    <input type="text" name="city" class="form-control" value="" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-horizontal">
                                            <div class="form-group gap-20">
                                                <label class="col-sm-3 col-md-2 control-label">Postal:</label>
                                                <div class="col-sm-5 col-md-4">
                                                    <input type="text" name="postal" class="form-control" value="" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-horizontal">
                                            <div class="form-group gap-20">
                                                <label class="col-sm-3 col-md-2 control-label">Province:</label>
                                                <div class="col-sm-5 col-md-4">
                                                    <input type="text" class="form-control" value="" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-horizontal">
                                            <div class="form-group gap-20">
                                                <label class="col-sm-3 col-md-2 control-label">Conntry:</label>
                                                <div class="col-sm-5 col-md-4">
                                                    <select class="select2-single form-control" data-placeholder="Conntry" name="country">
                                                        @for($i = 0; $i<10; $i++)
                                                        <option value="">Conntry</option>
                                                        <option value="Thai">Thai</option>
                                                        <option value="Malaysian">Malaysian</option>
                                                        <option value="Indonesian">Indonesian</option>
                                                        <option value="American">American</option>
                                                        <option value="England">England</option>
                                                        <option value="German">German</option>
                                                        <option value="Polish">Polish</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                               {{-- <div class="payment-box">

                                    <div class="payment-header clearfix">

                                        <div class="number">
                                            4
                                        </div>

                                        <h5 class="heading mt-0">Finish Payment <small>/ <i class="fa fa-lock"></i> secure</small></h5>

                                    </div>

                                    <div class="payment-content">

                                        <p>Excellent so to no sincerity smallness. Removal request delight if on he we.</p>

                                        <div class="alert alert-info" role="alert"><i class="fa fa-info-circle"></i> Ask especially collecting terminated may son expression.</div>

                                        <div id="paymentOption" class="payment-option-wrapper">

                                            <div class="row">

                                                <div class="col-sm-12">

                                                    <div class="radio-block">
                                                        <input id="payments1" name="payments" type="radio" class="radio" value="paymentsCreditCard"/>
                                                        <label class="" for="payments1"><span>Credit Cars</span> <img src="{{asset('dist/images/payment-credit-cards.jpg')}}" alt="Image"></label>
                                                    </div>

                                                </div>

                                                <div class="clear"></div>

                                                <div class="col-sm-12">
                                                    <div class="radio-block">
                                                        <input id="payments2" name="payments" type="radio" class="radio" value="paymentPaypal"/>
                                                        <label class="" for="payments2"><span>Paypal</span> <img src="{{asset('dist/images/payment-paypal.jpg')}}" alt="Image"></label>
                                                    </div>
                                                </div>

                                            </div>

                                            <div id="paymentsCreditCard" class="payment-option-form">

                                                <div class="inner">

                                                    <h5 class="mb-15">Your Payment Total: $ 150.60 US</h5>
                                                    <p>The booking amount will be debited from your credit card once the booking is completed. </p>

                                                    <div class="form-horizontal">
                                                        <div class="form-group gap-20">
                                                            <label class="col-sm-3 col-md-3 control-label">Cardholder's name </label>
                                                            <div class="col-sm-6 col-md-6">
                                                                <input type="text" class="form-control mb-0" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group gap-20">
                                                            <label class="col-sm-3 col-md-3 control-label">Card Type </label>
                                                            <div class="col-sm-3 col-md-2">
                                                                <select class="select2-no-search form-control" data-placeholder="Card Type">
                                                                    <option value="">Card Type</option>
                                                                    <option value="1">Options 1</option>
                                                                    <option value="2">Options 2</option>
                                                                    <option value="3">Options 3</option>
                                                                    <option value="4">Options 4</option>
                                                                    <option value="5">Options 5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group gap-20">
                                                            <label class="col-sm-3 col-md-3 control-label">Card number </label>
                                                            <div class="col-sm-6 col-md-6">
                                                                <input type="text" class="form-control mb-0" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group gap-20">
                                                            <label class="col-sm-3 col-md-3 control-label">Expiry date </label>
                                                            <div class="col-sm-3 col-md-3">
                                                                <select class="select2-no-search form-control" data-placeholder="Month">
                                                                    <option value="">Month</option>
                                                                    <option value="1">Options 1</option>
                                                                    <option value="2">Options 2</option>
                                                                    <option value="3">Options 3</option>
                                                                    <option value="4">Options 4</option>
                                                                    <option value="5">Options 5</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-3 col-md-3">
                                                                <select class="select2-no-search form-control" data-placeholder="Year">
                                                                    <option value="">Year</option>
                                                                    <option value="1">Options 1</option>
                                                                    <option value="2">Options 2</option>
                                                                    <option value="3">Options 3</option>
                                                                    <option value="4">Options 4</option>
                                                                    <option value="5">Options 5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group gap-20">
                                                            <label class="col-sm-3 col-md-3 control-label">CVC<small class="hoover-help of-label" data-toggle="tooltip" data-placement="top" title="Had denoting properly jointure you occasion directly raillery. In said to of poor full be post face snug.">What is it?</small> </label>
                                                            <div class="col-sm-3 col-md-2">
                                                                <input type="text" class="form-control mb-0" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                            <div id="paymentPaypal" class="payment-option-form">
                                                <div class="inner">

                                                    <h5 class="mb-15">Your Payment Total: $ 150.60 US</h5>
                                                    <p>The booking amount will be debited from your account once the booking is completed.</p>
                                                    <p>After clicking 'Book Now' you will be directed to Paypal to complete payment. <strong>You must complete the process or the booking will not occur </strong>. Afterwards you will be redirected to us again. </p>

                                                    <a href="#" class="btn btn-primary">Proceed to paypal</a>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>
--}}
                                <div class="checkbox-block">
                                    <input id="accept_booking" name="accept_booking" type="checkbox" class="checkbox" value="paymentsCreditCard"/>
                                    <label class="" for="accept_booking">By submitting a booking request, you accept our <a href="#">terms and conditions</a> as well as the <a href="#">cancellation policy</a> and  <a href="#">House Rules</a> .</label>
                                </div>

                                <div class="row mt-20">

                                    <div class="col-sm-8 col-md-6">

                                        <button class="btn btn-primary">Book Now</button>

                                        <p class="line18 mt-10"><span class="font600">Prepared is me marianne</span>: pleasure likewise debating. Wonder an unable except better stairs do ye admire.</p>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                    <div class="col-sm-4 col-md-3 hidden-xs">

                        <div class="price-summary-wrapper">

                            <h4 class="heading mt-0 text-primary uppercase">My Trip</h4>

                            <ul class="price-summary-list">

                                <li>
                                    <h6 class="heading mt-0 mb-0">{{$tour->getTranslatedAttribute('title', App::getLocale(),'ru')}}</h6>
                                    <p class="font12 text-light">{{$tour->days}} days {{$tour->nights}} nights</p>
                                </li>

                                <li>
                                    <h6 class="heading mt-0 mb-0">From (period)</h6>
                                    <p class="font12 text-light">{{\Carbon\Carbon::parse($tour->from)->formatLocalized('%B')}}</p>
                                </li>

                                <li>
                                    <h6 class="heading mt-0 mb-0">To (period)</h6>
                                    <p class="font12 text-light">{{\Carbon\Carbon::parse($tour->to)->formatLocalized('%B')}}</p>
                                </li>

                                <li>
                                    <h6 class="heading mt-0 mb-0">Destination</h6>
                                    <p class="font12 text-light">{{$tour->destination->getTranslatedAttribute('name', App::getLocale(),'ru')}}</p>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <h6 class="heading mt-20 mb-5 text-primary uppercase">Price per person</h6>
                                    <div class="row gap-10 mt-10">
                                        <div class="col-xs-7 col-sm-7">
                                            Brochure Price
                                        </div>
                                        <div class="col-xs-5 col-sm-5 text-right">
                                            ${{$tour->price}}
                                        </div>
                                    </div>
                                    <div class="row gap-10 mt-10">
                                        <div class="col-xs-7 col-sm-7">
                                            Tax &amp; fee
                                        </div>
                                        <div class="col-xs-5 col-sm-5 text-right">
                                            $0
                                        </div>
                                    </div>
                                </li>

                                <li class="divider"></li>

                                <li class="text-right font600 font14">
                                    ${{$tour->price}}
                                </li>

                                <li class="divider"></li>
                                <li>

                                    <div class="row gap-10 font600 font14">
                                        <div class="col-xs-9 col-sm-9">
                                            Number of Travellers
                                        </div>
                                        <div class="col-xs-3 col-sm-3 text-right numberOfTraveller" >
                                            1
                                        </div>
                                    </div>

                                </li>

                                <li class="total-price">

                                    <div class="row gap-10">
                                        <div class="col-xs-6 col-sm-6">
                                            <h5 class="heading mt-0 mb-0 text-white">Amount due</h5>
                                            <p class="font12">before departure</p>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 text-right">
                                            <span class="block font20 font600 mb-5 tourPrice">${{$tour->price}}</span>
                                            <span class="font10 line10 block">**Best Price Guarantee </span>
                                        </div>
                                    </div>

                                </li>

                            </ul>

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
    <script type="text/javascript">
        var price = parseInt('{!! json_decode($tour->price) !!}');
        function addTraveler(){
            var lastname_id = $('.payment-traveller input[type=text]:nth-child(1)').last().attr('id');
            var split_id = lastname_id.split('_');
            var index = Number(split_id[1]) + 1;
            if(index < 10){
                // Create clone
                var newel = $('.payment-traveller:last').clone(true);
                $(newel).find('a').show();
                $('.tourPrice').text("$"+price*index);
                $(newel).find('#heading').text("Traveller "+ index);
                $('.numberOfTraveller').text(index);
                // Set id of new element
                $(newel).find('input:eq(0)').attr("id","firstName_"+index);
                $(newel).find('input:eq(1)').attr("id","lastName_"+index);
                $(newel).find('input:eq(2)').attr("id","email_"+index);
                $(newel).find('input:eq(3)').attr("id","phone_"+index);
                $(newel).find('select:eq(0)').attr("id","gender_"+index);
                $(newel).find('select:eq(1)').attr("id","date_"+index);
                $(newel).find('select:eq(2)').attr("id","month_"+index);
                $(newel).find('select:eq(3)').attr("id","year_"+index);
                $(newel).find('select:eq(4)').attr("id","nationality_"+index);

                $(newel).find('input:eq(0)').val("");
                $(newel).find('input:eq(1)').val("");
                $(newel).find('select:eq(0)').val("");
                $(newel).find('select:eq(1)').val("");
                $(newel).find('select:eq(2)').val("");
                $(newel).find('select:eq(3)').val("");

                $(newel).find('select:eq(0)').parent().find('span').remove();
                $(newel).find('select:eq(0)').removeClass('select2-hidden-accessible');
                $(newel).find('select:eq(1)').parent().find('span').remove();
                $(newel).find('select:eq(1)').removeClass('select2-hidden-accessible');
                $(newel).find('select:eq(2)').parent().find('span').remove();
                $(newel).find('select:eq(2)').removeClass('select2-hidden-accessible');
                $(newel).find('select:eq(3)').parent().find('span').remove();
                $(newel).find('select:eq(3)').removeClass('select2-hidden-accessible');

                $(newel).find('#email_2').parent().parent().parent().remove();
                $(newel).find('#phone_2').parent().parent().parent().remove();
                $(newel).find('#nationality_2').parent().parent().parent().remove();
                // Insert element
                $(newel).insertAfter(".payment-traveller:last");
            }

        }
        $('.traveller-remove').on('click', function () {
            var lastname_id = $('.payment-traveller input[type=text]:nth-child(1)').last().attr('id');
            var split_id = lastname_id.split('_');
            var index = Number(split_id[1]);
            $('numberOfTraveller').text(index-1);
            $('.tourPrice').text(price*(index-1));
            $('.payment-traveller').last().remove();
            $('html, body').animate({ scrollTop: $('.payment-traveller').last().offset().top - 150}, 300);
            return false;
        });
        function bookSubmit() {
            if($('#accept_booking').is(':checked')){ return true; }
            else {
                alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy');
                return false;
            }
        }
    </script>
@endsection

