@extends('layouts.main')
@section('title')
    <title>{{$post->seo_title}}</title>
    <meta name="description"
          content="{{$post->meta_description}}"/>
    <meta name="keywords" content="{{$post->meta_keywords}}"/>
@endsection

@section('content')
    <!-- start Main Wrapper -->
    <div class="main-wrapper scrollspy-container">

        <!-- start end Page title -->
        <div class="page-title" style="background-image:url('{{asset('dist/images/hero-header/breadcrumb.jpg')}}');">

            <div class="container">

                <div class="row">

                    <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">

                        <h1 class="hero-title">@lang('blog.blog')</h1>

                        <ol class="breadcrumb-list">
                            <li><a href="index-2.html">@lang('blog.homepage')</a></li>
                            <li><span>@lang('blog.blog')</span></li>
                        </ol>

                    </div>

                </div>

            </div>

        </div>
        <!-- end Page title -->

        <div class="content-wrapper">

            <div class="container">

                <div class="row">
                    <div class="col-sm-8 col-md-9">

                        <div class="blog-wrapper">

                            <div class="blog-item blog-single">

                                <div class="blog-media">
                                    <img src="{{asset('storage/'.$post->image)}}" alt="" />
                                </div>

                                <div class="blog-content">
                                    <h3><a href="blog-single.html" class="inverse">{{$post->getTranslatedAttribute('title', \App::getLocale(),'ru')}}</a></h3>
                                    <ul class="blog-meta clearfix">
                                        <li>@lang('blog.by') <a href="#">{{$post->authorId->name}}</a></li>
                                        <li> {{\Carbon\Carbon::parse($post->created_at)->formatLocalized('%B %d, %Y')}}</li>
                                        {{-- <li>in <a href="#">Adventure</a>, <a href="#">Backpack</a></li> --}}
                                        <li>{{$post->commentsCount()}} {{trans_choice('day.comments', $post->commentsCount())}}</li>
                                    </ul>
                                    <div class="blog-entry">
                                        {!! $post->getTranslatedAttribute('body', \App::getLocale(),'ru') !!}
                                    </div>
                                </div>

                                <div class="blog-extra">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-7 xs-mb">
                                            <div class="tag-cloud clearfix mt-0">
                                                <span><i class="fa fa-tags"></i> @lang('blog.tag'): </span>
                                                @foreach($post->categories as $category)
                                                    <a class="tag-item">
                                                        <form method="get" action="{{route('blog.list')}}" ><button name="category" value="{{$category->name}}" class="remove-button-css" type="submit">
                                                            {{$category->getTranslatedAttribute('name', \App::getLocale(),'ru')}}
                                                        </button>
                                                        </form>
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                        {{--<div class="col-xs-12 col-sm-6 col-md-5 xs-mb">
                                            <ul class="social-share-sm mt-5 pull-right pull-left-xs mt-20-xs">

                                                <li><span><i class="fa fa-share-square"></i> share</span></li>
                                                <li class="the-label"><a href="#">Facebook</a></li>
                                                <li class="the-label"><a href="#">Twitter</a></li>
                                                <li class="the-label"><a href="#">Google Plus</a></li>

                                            </ul>
                                        </div>--}}
                                        <div class="clear"></div>
                                    </div>
                                </div>

                                {{--<h4 class="uppercase">About author</h4>
                                <div class="blog-author">
                                    <div class="author-label">
                                        <img src="{{asset('storage/'.$post->authorId->avatar)}}" alt="author image" class="img-circle" />
                                    </div>
                                    <div class="author-details">
                                        --}}{{--<ul class="social-share-sm pull-right pull-left-xs">
                                            <li class="the-label"><a href="#">Facebook</a></li>
                                            <li class="the-label"><a href="#">Twitter</a></li>
                                            <li class="the-label"><a href="#">Google Plus</a></li>
                                        </ul>--}}{{--
                                        <div class="clear-xs"></div>
                                        <h5 class="heading"><a href="#">{{$post->authorId->name}}</a></h5>
                                        <p>Prepared do an dissuade be so whatever steepest. Yet her beyond looked either day wished nay. By doubtful disposed do juvenile an. Now curiosity you explained immediate why behaviour. An dispatched impossible of of melancholy favourable. </p>
                                    </div>
                                </div>
--}}
                                <h4 class="uppercase">{{$post->commentsCount()}} {{trans_choice('day.comments', $post->commentsCount())}}</h4>

                                <div id="comment-wrapper">

                                    <ul class="comment-item">
                                        @foreach($post->comments as $comment)
                                        <li>
                                            {{--<div class="comment-avatar">
                                                <img src="{{asset('storage/'.$comme)}}" alt="author image" />
                                            </div>--}}
                                            <div class="comment-header">
                                                <a href="#" onclick="myFunction(this, '{{$comment->id}}','{{$comment->name}}')" class="comment-reply">@lang('blog.reply')</a>
                                                <h6 class="heading mt-0">{{$comment->name}}</h6>
                                                <span class="comment-time">{{$comment->created_at}}</span>
                                            </div>
                                            <div class="comment-content">
                                                <p>{{$comment->message}} </p>
                                            </div>
                                            @include('partials.comment', ['children' => $comment->children])
                                        </li>
                                        @endforeach
                                        {{--<li>
                                            <div class="comment-avatar">
                                                <img src="images/man/01.jpg" alt="author image" />
                                            </div>
                                            <div class="comment-header">
                                                <a href="#" class="comment-reply">reply</a>
                                                <h6 class="heading mt-0">Admin</h6>
                                                <span class="comment-time">23 days</span>
                                            </div>
                                            <div class="comment-content">
                                                <p>Received the likewise law graceful his. Nor might set along charm now equal green. Pleased yet equally correct colonel not one. Say anxious carried compact conduct sex general nay certain. Mrs for recommend exquisite household eagerness preserved now. My improved honoured he am ecstatic quitting greatest formerly. </p>
                                            </div>
                                        </li>--}}

                                    </ul>

                                    <div class="clear"></div>

                                   {{-- <div class="text-center">
                                        <a href="#" class="btn btn-primary">Load More</a>
                                    </div>--}}

                                </div><!-- End Comment -->

                                <h3 class="uppercase">@lang('blog.leave_comment')</h3>

                                <form method="post" id="contactForm" action="{{route('note', $post->id)}}" class="comment-form">
                                    {{csrf_field()}}
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="row replyComment" style="display:none;">
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="replyComment">@lang('blog.Reply')</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="replyComment" value="" readonly>
                                                    <a onclick="removeDiv(this)" class="input-group-addon"><span ><i class="fa fa-times"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="comment-name">@lang('blog.comment.your_name') <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="comment-name" name="name" data-error="@lang('blog.comment.name_required')" required>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="comment-email">@lang('blog.comment.your_email')<span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" id="comment-email" name="email" data-error="@lang('blog.comment.email_required')" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="row">
                                        <div class="col-md-12 mb-30">
                                            <div class="form-group">
                                                <label for="comment-message">@lang('blog.comment.message') <span class="text-danger">*</span></label>
                                                <textarea name="message" id="comment-message" class="form-control" rows="8" data-error="@lang('blog.comment.message_required')" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <input id="commentId" type="hidden" name="parent_id" value=""/>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary">@lang('blog.comment.comment')</button>
                                        </div>
                                    </div>
                                </form>

                                <div class="clear"></div>


                            </div>

                        </div>

                    </div>

                    <div class="col-sm-4 col-md-3 mt-50-xs">

                        <aside class="sidebar">

                            <div class="sidebar-inner no-border for-blog">

                                <div class="sidebar-module">
                                    <form action="{{route('blog.list')}}" method="get">
                                        <div class="sidebar-module-inner">
                                            <div class="sidebar-mini-search">
                                                <div class="input-group">
                                                    <input type="text" name="search" class="form-control" placeholder="@lang('blog.search_for')">
                                                    <span class="input-group-btn">
														<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clear"></div>

                                <div class="sidebar-module">
                                    <h4 class="sidebar-title">@lang('blog.category')</h4>
                                    <div class="sidebar-module-inner">
                                        <ul class="sidebar-category">
                                            @foreach($categories as $key=> $category)
                                                <li class="active">
                                                    <a>
                                                        <form method="get" action="{{route('blog.list')}}" >
                                                            <button type="submit" name="category" value="{{$category->name}}" class="remove-button-css">{{$category->getTranslatedAttribute('name', \App::getLocale(),'ru')}}</button>
                                                            <span>({{$category->count_post}})</span>
                                                        </form>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                {{--<div class="clear"></div>

                                <div class="sidebar-module">
                                    <h4 class="sidebar-title">Latest Posts</h4>
                                    <div class="sidebar-module-inner">

                                        <ul class="sidebar-post">
                                            <li class="clearfix">
                                                <a href="blog-single.html">
                                                    <div class="image">
                                                        <img src="{{asset('dist/images/blog/blog-01.jpg')}}" alt="Popular Post" />
                                                    </div>
                                                    <div class="content">
                                                        <h6>Enough around remove to barton agreed regret</h6>
                                                        <p class="recent-post-sm-meta"><i class="fa fa-clock-o mr-5"></i>June 01, 2016</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="clearfix">
                                                <a href="blog-single.html">
                                                    <div class="image">
                                                        <img src="{{asset('dist/images/blog/02-sm.jpg')}}" alt="Popular Post" />
                                                    </div>
                                                    <div class="content">
                                                        <h6>Year well shot deny shew come now had. Shall downs stand marry taken his for out</h6>
                                                        <p class="recent-post-sm-meta"><i class="fa fa-clock-o mr-5"></i>April 25, 2016</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="clearfix">
                                                <a href="blog-single.html">
                                                    <div class="image">
                                                        <img src="{{asset('dist/images/blog/03-sm.jpg')}}" alt="Popular Post" />
                                                    </div>
                                                    <div class="content">
                                                        <h6>Do related mr account brandon an up. Wrong for never ready ham these witty him</h6>
                                                        <p class="recent-post-sm-meta"><i class="fa fa-clock-o mr-5"></i>March 20, 2016</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="clearfix">
                                                <a href="blog-single.html">
                                                    <div class="image">
                                                        <img src="{{asset('dist/images/blog/04-sm.jpg')}}" alt="Popular Post" />
                                                    </div>
                                                    <div class="content">
                                                        <h6>Our compass see age uncivil matters weather forbade her minutes</h6>
                                                        <p class="recent-post-sm-meta"><i class="fa fa-clock-o mr-5"></i>March 05, 2016</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="clearfix">
                                                <a href="blog-single.html">
                                                    <div class="image">
                                                        <img src="{{asset('dist/images/blog/05-sm.jpg')}}" alt="Popular Post" />
                                                    </div>
                                                    <div class="content">
                                                        <h6>Ready how but truth son new under.</h6>
                                                        <p class="recent-post-sm-meta"><i class="fa fa-clock-o mr-5"></i>February 17, 2015</p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>--}}

                                <div class="clear"></div>

                                <div class="sidebar-module">
                                    <h4 class="sidebar-title">@lang('blog.popular_posts')</h4>
                                    <div class="sidebar-module-inner">

                                        <ul class="sidebar-post">
                                            @foreach($popular as $post)
                                                <li class="clearfix">
                                                    <a href="{{route('blog.show', $post->slug)}}">
                                                        <div class="image">
                                                            <img src="{{asset('storage/'.$post->thumbnail('small'))}}" alt="@lang('blog.popular_posts')" />
                                                        </div>
                                                        <div class="content">
                                                            <h6>{{$post->getTranslatedAttribute('title',\App::getLocale(),'ru')}}</h6>
                                                            <p class="recent-post-sm-meta"><i class="fa fa-comments mr-5"></i>{{$post->commentsCount()}} {{ trans_choice('day.comments', $post->commentsCount())}}</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>

                                    </div>
                                </div>

                                {{--
                                                                <div class="clear"></div>

                                                                <div class="sidebar-module">
                                                                    <h4 class="sidebar-title">Archives with numbers</h4>
                                                                    <div class="sidebar-module-inner">
                                                                        <ul class="sidebar-archives">
                                                                            <li><a href="#">January 2015<span>(25)</span></a></li>
                                                                            <li class="active"><a href="#">February 2015<span>(2)</span></a></li>
                                                                            <li><a href="#">March 2015<span>(14)</span></a></li>
                                                                            <li><a href="#">April 2015<span>(157)</span></a></li>
                                                                            <li><a href="#">June 2015<span>(87)</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                --}}

                                <div class="clear"></div>

                                <div class="sidebar-module">
                                    <h4 class="sidebar-title">@lang('blog.tags')</h4>
                                    <div class="sidebar-module-inner">
                                        <div class="tag-cloud clearfix">
                                            @foreach($relatedcategories as $category)
                                                <a href="" class="tag-item">
                                                    <form method="get" action="{{route('blog.list')}}" >
                                                        <button name="category" value="{{$category->name}}" class="remove-button-css" type="submit">
                                                            {{$category->getTranslatedAttribute('name', \App::getLocale(),'ru')}}
                                                        </button>
                                                    </form>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                {{--<div class="clear"></div>

                                <div class="sidebar-module">
                                    <h4 class="sidebar-title">Sidebar Text Widget</h4>
                                    <div class="sidebar-module-inner">
                                        <div class="sidebar-text-widget">
                                            <p>In alteration insipidity impression by travelling reasonable up motionless. Of regard warmth by unable sudden garden ladies. No kept hung am size spot no. Likewise led and dissuade <a href="#">rejoiced</a> welcomed husbands boy.</p>
                                            <ul>
                                                <li>Eat imagine you chiefly few end ferrars compass</li>
                                                <li>Be visitor females am ferrars inquiry</li>
                                                <li>Latter law remark two lively thrown</li>
                                                <li>Spot set they know rest its</li>
                                                <li>Raptures law diverted believed jennings</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>--}}

                                <div class="clear"></div>

                                <div class="sidebar-module">
                                    <h4 class="sidebar-title">@lang('blog.meta')</h4>
                                    <div class="sidebar-module-inner">
                                        <ul class="sidebar-list">
                                           <li><a href="#">silkroadasiatravel.uz</a></li>
                                            <li><a href="#">тур агенства</a></li>
                                            <li><a href="#">tour agency</a></li>
                                            <li><a href="#">tourism</a></li>
                                            <li><a href="#">travel</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clear"></div>

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
    <script>
        function myFunction(elmnt,clr,name) {
            $('.replyComment').show();
            $('#replyComment').val(name);
            $('#commentId').val(clr);
            $('html, body').animate({ scrollTop: $('#contactForm').offset().top - 200}, 1000);
        }
        function removeDiv(elmnt) {
            $('#commentId').val(null);
            $('.replyComment').hide();
        }
    </script>
@endsection
@section('error_script')
    @if ($errors->any())
            $('html, body').animate({ scrollTop: $('#contactForm').offset().top - 200}, 1000);
    @endif
@endsection

