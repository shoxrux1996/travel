@extends('layouts.main')

@section('content')

		<!-- start Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- start end Page title -->
			<div class="page-title" style="background-image:url({{asset('dist/images/hero-header/breadcrumb.jpg')}});">
				
				<div class="container">
				
					<div class="row">
					
						<div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
						
							<h1 class="hero-title">@lang('result-list.tour_list')</h1>
							
							<ol class="breadcrumb-list">
								<li><a href="index-2.html">@lang('result-list.homepage')</a></li>
								<li><a>@lang('result-list.destinations')</a></li>
								<li><span>@lang('result-list.tour_list')</span></li>
							</ol>
							
						</div>
						
					</div>

				</div>
				
			</div>
			<!-- end Page title -->
			
			<div class="content-wrapper">
			
				<div class="container">
				<form action="{{ route('tour.list') }}" method="get">
					<div class="row">
						
						<div class="col-sm-4 col-md-3">
							
							<aside class="sidebar with-filter">
				
								<div class="sidebar-search-wrapper bg-light-2">
								
									<div class="sidebar-search-header">
										<h4>@lang('result-list.search_again')</h4>
									</div>
									
									<div class="sidebar-search-content">
										<div class="form-group">
											
											<select name="destinations[]" class="select2-multi form-control" data-placeholder="@lang('result-list.choose_destination')" multiple>
												<option value="">@lang('result-list.choose_destination')</option>
												@foreach($destinations as $key => $destination)
													<option value="{{$destination->name}}" 
														{{(collect(Request::get('destinations'))->contains($destination->name)) ? "selected" : ""}}>{{$destination->getTranslatedAttribute('name', \App::getLocale(),'ru') }}
													</option>
												@endforeach
											</select>

										</div>
								
										<div class="form-group">
														
											<select name="months[]" class="select2-multi form-control" data-placeholder="@lang('result-list.choose_departure_month')" multiple>
												<option value=""> @lang('result-list.choose_departure_month')</option>
												<option value="1" {{(collect(Request::get('months'))->contains(1)) ? "selected" : ""}}>@lang('result-list.January')</option>
												<option value="2" {{(collect(Request::get('months'))->contains(2)) ? "selected" : ""}} >@lang('result-list.February')</option>
												<option value="3" {{(collect(Request::get('months'))->contains(3)) ? "selected" : ""}}>@lang('result-list.March')</option>
												<option value="4" {{(collect(Request::get('months'))->contains(4)) ? "selected" : ""}} >@lang('result-list.April')</option>
												<option value="5" {{(collect(Request::get('months'))->contains(5)) ? "selected" : ""}} >@lang('result-list.May')</option>
												<option value="6"  {{(collect(Request::get('months'))->contains(6)) ? "selected" : ""}} >@lang('result-list.June')</option>
												<option value="7" {{(collect(Request::get('months'))->contains(7)) ? "selected" : ""}} >@lang('result-list.July')</option>
												<option value="8" {{(collect(Request::get('months'))->contains(8)) ? "selected" : ""}} >@lang('result-list.August')</option>
												<option value="9" {{(collect(Request::get('months'))->contains(9)) ? "selected" : ""}} >@lang('result-list.September')</option>
												<option value="10" {{(collect(Request::get('months'))->contains(10)) ? "selected" : ""}} >@lang('result-list.October')</option>
												<option value="11" {{(collect(Request::get('months'))->contains(11)) ? "selected" : ""}} >@lang('result-list.November')</option>
												<option value="12" {{(collect(Request::get('months'))->contains(12)) ? "selected" : ""}} >@lang('result-list.December')</option>
											</select>
											
										</div>
									
										<button href="#" class="btn btn-primary btn-block">@lang('result-list.search')</button>
									
									</div>
									
								</div>
								
								<div class="sidebar-header clearfix">
									<h4>@lang('result-list.filter_results')</h4>
									<a href="{{ route('tour.list') }}" class="sidebar-reset-filter"><i class="fa fa-times"></i> @lang('result-list.reset_filter')</a>
								</div>
								
								<div class="sidebar-inner">
									<div class="sidebar-module">
										<h6 class="sidebar-title">@lang('result-list.price_range')</h6>
										<div class="sidebar-module-inner">
											<input type="text" id="price_range"/>
											<input type="hidden" name="price_from" class="price-from" value="" />
    										<input type="hidden" name="price_to" class="price-to" value="" />
										</div>
									</div>
									
									<div class="clear"></div>
									
									<div class="sidebar-module">
										<h6 class="sidebar-title">@lang('result-list.star_range')</h6>
										<div class="sidebar-module-inner">
											<input id="star_range" />
											<input type="hidden" name="star_from" class="star-from" value="" />
    										<input type="hidden" name="star_to" class="star-to" value="" />
										</div>
									</div>
									<div class="clear"></div>

									<div class="sidebar-module">
										<h6 class="sidebar-title">@lang('result-list.name_contain')</h6>
										<div class="sidebar-module-inner">
											<div class="sidebar-mini-search">
												<div class="input-group">
													
													<input type="text" name="search" class="form-control" placeholder="@lang('result-list.search_for')" value="{{Request::get('search')}}">
													<span class="input-group-btn">
														<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
													</span>
													
												</div>
											</div>
										</div>
									</div>


									{{-- 
									<div class="sidebar-module">
										<h6 class="sidebar-title">Price Range</h6>
										<div class="sidebar-module-inner">
											<input type="text" id="price_range"/>
											<input type="hidden" name="price-from" class="price-from" value="" />
    										<input type="hidden" name="price-to" class="price-to" value="" />
										</div>
									</div>
									
									<div class="clear"></div>
									
									<div class="sidebar-module">
										<h6 class="sidebar-title">Star Range</h6>
										<div class="sidebar-module-inner">
											<input id="star_range" />
											<input type="hidden" name="star-from" class="star-from" value="" />
    										<input type="hidden" name="star-to" class="star-to" value="" />
										</div>
									</div>
									
									<div class="clear"></div>
									
									<div class="sidebar-module">
									
										<h6 class="sidebar-title">Starting Point</h6>
										<div class="sidebar-module-inner">
											<div class="checkbox-block">
												<input id="starting_point-1" name="starting_point" type="checkbox" class="checkbox"/>
												<label class="" for="starting_point-1">Berlin <span class="checkbox-count">(854)</span></label>
											</div>
											<div class="checkbox-block">
												<input id="starting_point-2" name="starting_point" type="checkbox" class="checkbox"/>
												<label class="" for="starting_point-2">Paris <span class="checkbox-count">(25)</span></label>
											</div>
											<div class="checkbox-block">
												<input id="starting_point-3" name="starting_point" type="checkbox" class="checkbox"/>
												<label class="" for="starting_point-3">Munich <span class="checkbox-count">(254)</span></label>
											</div>
											<div class="starting_point-block">
												<input id="property_type-4" name="starting_point" type="checkbox" class="checkbox"/>
												<label class="" for="property_type-4">Lyon<span class="checkbox-count">(22)</span></label>
											</div>
											<div class="starting_point-block">
												<input id="property_type-5" name="starting_point" type="checkbox" class="checkbox"/>
												<label class="" for="property_type-5">Vienna  <span class="checkbox-count">(9)</span></label>
											</div>
											
											<div class="more-less-wrapper">
												
												<div id="property_type_more_less" class="collapse"> 
													<div class="more-less-inner">
													
														<div class="checkbox-block">
															<input id="starting_point-6" name="starting_point" type="checkbox" class="checkbox"/>
															<label class="" for="starting_point-6">Toulouse <span class="checkbox-count">(3)</span></label>
														</div>
														<div class="checkbox-block">
															<input id="starting_point-7" name="starting_point" type="checkbox" class="checkbox"/>
															<label class="" for="starting_point-7">Graz  <span class="checkbox-count">(25)</span></label>
														</div>
														<div class="checkbox-block">
															<input id="starting_point-8" name="starting_point" type="checkbox" class="checkbox"/>
															<label class="" for="starting_point-8">Linz  <span class="checkbox-count">(2)</span></label>
														</div>
														
													</div>
												</div>
												<button class="btn btn-more-less collapsed" data-toggle="collapse" data-target="#property_type_more_less">Show more</button>
												
											</div>
											
										</div>
									
									</div>
									
									<div class="clear"></div>
									
									<div class="sidebar-module">
									
										<h6 class="sidebar-title">Ending Point</h6>
										<div class="sidebar-module-inner">
											<div class="checkbox-block">
												<input id="ending_point-1" name="ending_point" type="checkbox" class="checkbox"/>
												<label class="" for="ending_point-1">Berlin <span class="checkbox-count">(854)</span></label>
											</div>
											<div class="checkbox-block">
												<input id="ending_point-2" name="ending_point" type="checkbox" class="checkbox"/>
												<label class="" for="ending_point-2">Paris <span class="checkbox-count">(25)</span></label>
											</div>
											<div class="checkbox-block">
												<input id="ending_point-3" name="ending_point" type="checkbox" class="checkbox"/>
												<label class="" for="ending_point-3">Munich <span class="checkbox-count">(254)</span></label>
											</div>
											<div class="starting_point-block">
												<input id="ending_point-4" name="ending_point" type="checkbox" class="checkbox"/>
												<label class="" for="ending_point-4">Lyon<span class="checkbox-count">(22)</span></label>
											</div>
											<div class="starting_point-block">
												<input id="ending_point-5" name="ending_point" type="checkbox" class="checkbox"/>
												<label class="" for="ending_point-5">Vienna  <span class="checkbox-count">(9)</span></label>
											</div>
											
											<div class="more-less-wrapper">
												
												<div id="hotel_facilities_more_less" class="collapse"> 
													<div class="more-less-inner">
													
														<div class="checkbox-block">
															<input id="ending_point-6" name="ending_point" type="checkbox" class="checkbox"/>
															<label class="" for="ending_point-6">Toulouse <span class="checkbox-count">(3)</span></label>
														</div>
														<div class="checkbox-block">
															<input id="ending_point-7" name="ending_point" type="checkbox" class="checkbox"/>
															<label class="" for="ending_point-7">Graz  <span class="checkbox-count">(25)</span></label>
														</div>
														<div class="checkbox-block">
															<input id="ending_point-8" name="ending_point" type="checkbox" class="checkbox"/>
															<label class="" for="ending_point-8">Linz  <span class="checkbox-count">(2)</span></label>
														</div>
														
													</div>
												</div>
												<button class="btn btn-more-less collapsed" data-toggle="collapse" data-target="#hotel_facilities_more_less">Show more</button>
												
											</div>
											
										</div>
									
										
									</div>
									
									<div class="clear"></div>
								
									<div class="sidebar-module">
									
										<h6 class="sidebar-title">Filter Select</h6>
										<div class="sidebar-module-inner">
											<select class="select2-single form-control" data-placeholder="Select Placeholder">
												<option value="">Select Placeholder</option>
												<option value="0">Select One</option>
												<option value="1">Select Two</option>
												<option value="2">Select Three</option>
												<option value="3">Select Four</option>
												<option value="4">Select Five</option>
											</select>
										</div>
										
									</div>
									
									<div class="clear"></div>
									
									<div class="sidebar-module">
									
										<h6 class="sidebar-title">Filter Text Inside Sidebar Inner</h6>
										<div class="sidebar-module-inner">
											<p>Park fat she nor does play deal our. Procured sex material his offering humanity laughing moderate can.</p>
										</div>
										
									</div>
									
									<div class="clear"></div> --}}
									
								</div>
								
								{{-- <div class="sidebar-box">
									<h4 class="sidebar-title">Sidebar Text</h4>
									<p>Park fat she nor does play deal our. Procured sex material his offering humanity laughing moderate can. Unreserved had she nay dissimilar admiration interested.</p>
								</div>
							 --}}
							</aside>
							
							
						</div>
						
						<div class="col-sm-8 col-md-9">
							
							<div class="sorting-wrappper">
			
								<div class="sorting-header">
									<h3 class="sorting-title uppercase">{{$tourDestinations->count()}} {{trans_choice('day.destinations', $tourDestinations->count())}}: @foreach ($tourDestinations as $key =>$destination) {{$destination->getTranslatedAttribute('name', \App::getLocale(),'ru') }}{{$key < ($tourDestinations->count()-1) ? "," : ""}} @endforeach</h3>
									<p class="sorting-lead">{{$tours->total()}} {{trans_choice('day.results_found',$tours->total())}}</p>
								</div>
								
								<div class="sorting-content">
								
									<div class="row">
									
										<div class="col-sm-12 col-md-8">
											<div class="sort-by-wrapper">
												<label class="sorting-label">@lang('result-list.sort_by'): </label> 
												<div class="sorting-middle-holder">
													<ul class="sort-by">
														{{-- --}}
														<li class={{Request::get('filter') =="name" ? "active up" : ""}}>
															<button type="submit" name="filter" value="name"> 
																<a>@lang('result-list.name')
																	@if(Request::get('filter')=="name")
																	<i class="fa fa-long-arrow-{{Session::get('sort') ? "down" :"up" }}"></i>
																	@endif
																</a>	
															</button>
															
														</li>
														<li class={{Request::get('filter') =="price" ? "active up" : ""}}>
															<button type="submit" name="filter" value="price">
																<a>@lang('result-list.price') 
																	@if(Request::get('filter')=="price")
																	<i class="fa fa-long-arrow-{{Session::get('sort') ? "down" :"up" }}"></i>
																	@endif
																</a>
															</button>
														</li>
														<li class={{Request::get('filter') =="location" ? "active up" : ""}}>
															<button type="submit" name="filter" value="location"><a>@lang('result-list.location') 
																@if(Request::get('filter')=="location")
																<i class="fa fa-long-arrow-{{Session::get('sort') ? "down" :"up" }}"></i>
																@endif
															</a>
															</button>
														</li>
														<li class={{Request::get('filter') =="rating" ? "active up" : ""}}>
															<button type="submit" name="filter" value="rating">
																<a>@lang('result-list.rating')
																@if(Request::get('filter')=="rating")
																<i class="fa fa-long-arrow-{{Session::get('sort') ? "down" :"up" }}"></i>
																@endif
																</a>
															</button>
														</li>
								                        
														
													</ul>
												</div>
											</div>
										</div>
										
										<div class="col-sm-12 col-md-4">
											<div class="sort-by-wrapper mt pull-right pull-left-sm mt-10-sm">
												<label class="sorting-label">@lang('result-list.view_as'): </label> 
												<div class="sorting-middle-holder">
													<button type="submit" name="result" value="list">
														<a class="btn btn-sorting active"><i class="fa fa-th-list"></i></a>
													</button>
													<button type="submit" name="result" value="grid">
														<a class="btn btn-sorting"><i class="fa fa-th-large"></i></a>
													</button>
												</div>
											</div>
										</div>
										
									</div>
								
								</div>

							</div>
							
							<div class="package-list-item-wrapper on-page-result-page">
								@foreach($tours as $tour)
							
								<div class="package-list-item clearfix">
									<div class="image">
										@if(json_decode($tour->images) != null)
										<img src="{{asset('storage/'.json_decode($tour->images)[0])}}" alt="Tour Package" style="height: 184px !important;" />
                                        @else
                                        <img src="{{asset('default.jpg')}}" alt="Tour Package" style="height: 184px !important;" />
                                        @endif
										<div class="absolute-in-image">
											<div class="duration">
												<span>
												@if($tour->days != 0)
													{{$tour->days}} {{trans_choice('day.days',$tour->days)}}
												@endif 
												@if($tour->nights != 0)
													{{$tour->nights}} {{trans_choice('day.nights',$tour->nights)}}
												@endif
                                            	</span>
                                            </div>
										</div>
									</div>
									
									<div class="content">
										<h5>{{$tour->getTranslatedAttribute('title', \App::getLocale(),'ru')}}<button class="btn"><i class="fa fa-heart-o"></i></button></h5>
										<div class="row gap-10">
											<div class="col-sm-12 col-md-9">
												
												<p class="line18">{{ substr(strip_tags($tour->getTranslatedAttribute('intro', \App::getLocale(),'ru')),0,100)}} {{strlen(strip_tags($tour->getTranslatedAttribute('intro', \App::getLocale(),'ru')))>100 ? '...' : ""}}
												</p>
												
												<ul class="list-info">
													<li><span class="icon"><i class="fa fa-map-marker"></i></span> <span class="font600">@lang('result-list.country'): </span> {{$tour->destination->getTranslatedAttribute('name', \App::getLocale(),'ru')}}</li>
													@if($tour->startingPoint)<li><span class="icon"><i class="fa fa-flag"></i></span> <span class="font600">@lang('result-list.starting_point'):</span>{{$tour->startingPoint->getTranslatedAttribute('name', \App::getLocale(),'ru')}} </li>@endif
													@if($tour->endingPoint)<li><span class="icon"><i class="fa fa-flag"></i></span> <span class="font600">@lang('result-list.ending_point'):</span> {{$tour->endingPoint->getTranslatedAttribute('name', \App::getLocale(),'ru')}}</li>@endif
												</ul>
												
											</div>
											<div class="col-sm-12 col-md-3 text-right text-left-sm">
												
												<div class="rating-wrapper">
													<div class="raty-wrapper">
														<div class="star-rating-12px" data-rating-score="{{$tour->rating()}}"></div> <span> / {{$tour->comments->count()}} {{trans_choice('day.reviews', $tour->comments->count())}}</span>
													</div>
												</div>
												
												<div class="price">${{$tour->price}}</div>
												
												<a href="{{route('tour.show', $tour->slug)}}" class="btn btn-primary btn-sm">@lang('result-list.view')</a>
												
											</div>
										</div>
									</div>
									
								</div>
								@endforeach
								
							
							</div>

							<div class="pager-wrappper clearfix">
			
								<div class="pager-innner">
								
									<div class="flex-row flex-align-middle">
										@if($tours->total() > $tours->perPage())
										<div class="flex-column flex-sm-12">
											@lang('result-list.showing_result') {{$tours->currentPage()}} @lang('result-list.to') {{$tours->perPage()}} @lang('result-list.from') {{$tours->total()}} 
										</div>
										@endif
										
										<div class="flex-column flex-sm-12">
											<nav class="pager-right">
												{!! $tours->links('pagination') !!}
											</nav>
										</div>
									
									</div>
									
								</div>
								
							</div>
							
						</div>
						
					</div>
				</form>
				</div>

				
			</div>
			

		</div>
		<!-- end Main Wrapper -->
@endsection

@section('scripts')

<script type="text/javascript" src="{{asset('dist/js/jquery.raty2.js')}}"></script>
@endsection

