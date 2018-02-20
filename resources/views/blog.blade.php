@extends('layouts.main')
@section('title')
    <title>Посты</title>
    <meta name="description"
          content="Silk Road Asia Travel - posts"/>
    <meta name="keywords" content="silkroadasiatravel.uz, silkroad, silk road asia travel ,тур агенства, tour package, hotel, vocation, booking, trip, travel, tourism, tourist"/>
@endsection

@section('content')
    <!-- start Main Wrapper -->
    <div class="main-wrapper scrollspy-container">

        <!-- start end Page title -->
        <div class="page-title" style="background-image:url('{{asset('dist/images/hero-header/breadcrumb.jpg')}}');">

            <div class="container">

                <div class="row">

                    <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">

                        <h1 class="hero-title">Blog</h1>

                        <ol class="breadcrumb-list">
                            <li><a href="index-2.html">Homepage</a></li>
                            <li><span>Blog</span></li>
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
                            @foreach($posts as $key=> $post)
                            <div class="blog-item">

                                <div class="blog-media">
                                    <div class="overlay-box">
                                        <a class="blog-image" href="{{route('blog.show',$post->slug)}}">
                                            <img src="{{asset('storage/'.$post->image)}}" alt="" />
                                            <div class="image-overlay">
                                                <div class="overlay-content">
                                                    <div class="overlay-icon"><i class="pe-7s-link"></i></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="blog-content">
                                    <h3><a href="{{route('blog.show',$post->slug)}}" class="inverse">{{$post->getTranslatedAttribute('title', \App::getLocale(),'ru')}}</a></h3>
                                    <ul class="blog-meta clearfix">
                                        <li>by <a href="#">{{$post->authorId->name}}</a></li>
                                        <li>by {{\Carbon\Carbon::parse($post->created_at)->formatLocalized('%B %d, %Y')}}</li>
                                        {{-- <li>in <a href="#">Adventure</a>, <a href="#">Backpack</a></li> --}}
                                        <li>{{$post->commentsCount()}} comments</li>
                                    </ul>
                                    <div class="blog-entry">
                                        {{ substr(strip_tags($post->getTranslatedAttribute('body', \App::getLocale(),'ru')),0,300)}} {{strlen(strip_tags($post->getTranslatedAttribute('body', \App::getLocale(),'ru')))>300 ? '...' : ""}}
                                    </div>
                                    <a href="{{route('blog.show',$post->slug)}}" class="btn-blog">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>

                            </div>
                            @endforeach
                        {{--
                            <div class="blog-item">

                                <div class="blog-media">
                                    <div class="overlay-box">
                                        <a class="blog-image" href="blog-single.html">
                                            <img src="{{asset('dist/images/blog/blog-02.jpg')}}" alt="" />
                                            <div class="image-overlay">
                                                <div class="overlay-content">
                                                    <div class="overlay-icon"><i class="pe-7s-link"></i></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="blog-content">
                                    <h3><a href="blog-single.html" class="inverse">Another blog title post with a featured image</a></h3>
                                    <ul class="blog-meta clearfix">
                                        <li>by <a href="#">Admin</a></li>
                                        <li>by January 09, 2016</li>
                                        <li>in <a href="#">Adventure</a>, <a href="#">Backpack</a></li>
                                        <li>32 comments</li>
                                    </ul>
                                    <div class="blog-entry">
                                        Up branch to easily missed by do. Admiration considered acceptance too led one melancholy expression. Are will took form the nor true. Winding enjoyed minuter her letters evident use eat colonel. He attacks observe mr cottage inquiry am examine gravity. Are dear but near left was. Year kept on over so as this of. She steepest doubtful betrayed formerly him. Active one called uneasy our seeing see cousin tastes its. Ye am it formed indeed agreed relied piqued.
                                    </div>
                                    <a href="blog-single.html" class="btn-blog">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>

                            </div>
                             
                            <div class="blog-item">

                                <div class="blog-media">
                                    <div id="bootstrap-carousel-slider" class="carousel slide" data-ride="carousel" data-interval="5000">

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">

                                            <!-- First slide -->
                                            <div class="item active">
                                                <div class="image">
                                                    <img src="{{asset('dist/images/blog/blog-03.jpg')}}" alt="Image" />
                                                </div>
                                                <div class="carousel-caption">
                                                    <p>This is the caption for slide 1</p>
                                                </div>
                                            </div> <!-- /.item -->

                                            <!-- Second slide -->
                                            <div class="item">
                                                <div class="image">
                                                    <img src="{{asset('dist/images/blog/blog-02.jpg')}}" alt="Image" />
                                                </div>
                                                <div class="carousel-caption">
                                                    <p>This is the caption for slide 2</p>
                                                </div>
                                            </div><!-- /.item -->

                                            <!-- Third slide -->
                                            <div class="item">
                                                <div class="image">
                                                    <img src="{{asset('dist/images/blog/blog-01.jpg')}}" alt="Image" />
                                                </div>
                                                <div class="carousel-caption">
                                                    <p>This is the caption for slide 3</p>
                                                </div>
                                            </div><!-- /.item -->

                                        </div><!-- /.carousel-inner -->

                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#bootstrap-carousel-slider" role="button" data-slide="prev">
                                            <span class="carousel-control-left"><i class="pe-7s-angle-left" aria-hidden="true"></i></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#bootstrap-carousel-slider" role="button" data-slide="next">
                                            <span class="carousel-control-right"><i class="pe-7s-angle-right" aria-hidden="true"></i></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div><!-- /.carousel -->

                                </div>

                                <div class="blog-content">
                                    <h3><a href="blog-single.html" class="inverse">Blog Title Post With a Slider</a></h3>
                                    <ul class="blog-meta clearfix">
                                        <li>by <a href="#">Admin</a></li>
                                        <li>by January 09, 2016</li>
                                        <li>in <a href="#">Adventure</a>, <a href="#">Backpack</a></li>
                                        <li>32 comments</li>
                                    </ul>
                                    <div class="blog-entry">
                                        Up branch to easily missed by do. Admiration considered acceptance too led one melancholy expression. Are will took form the nor true. Winding enjoyed minuter her letters evident use eat colonel. He attacks observe mr cottage inquiry am examine gravity. Are dear but near left was. Year kept on over so as this of. She steepest doubtful betrayed formerly him. Active one called uneasy our seeing see cousin tastes its. Ye am it formed indeed agreed relied piqued.
                                    </div>
                                    <a href="blog-single.html" class="btn-blog">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>

                            </div>

                           <div class="blog-item">

                                <div class="blog-content">
                                    <h3><a href="blog-single.html" class="inverse">Blog Title Post Without any Image</a></h3>
                                    <ul class="blog-meta clearfix">
                                        <li>by <a href="#">Admin</a></li>
                                        <li>by January 09, 2016</li>
                                        <li>in <a href="#">Adventure</a>, <a href="#">Backpack</a></li>
                                        <li>32 comments</li>
                                    </ul>
                                    <div class="blog-entry">
                                        Up branch to easily missed by do. Admiration considered acceptance too led one melancholy expression. Are will took form the nor true. Winding enjoyed minuter her letters evident use eat colonel. He attacks observe mr cottage inquiry am examine gravity. Are dear but near left was. Year kept on over so as this of. She steepest doubtful betrayed formerly him. Active one called uneasy our seeing see cousin tastes its. Ye am it formed indeed agreed relied piqued.
                                    </div>
                                    <a href="blog-single.html" class="btn-blog">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>

                            </div>

                            <div class="blog-item">

                                <div class="blog-media">
                                    <div class="flex-video vimeo">
                                        <iframe src="http://player.vimeo.com/video/71319358" allowfullscreen></iframe>
                                    </div>
                                </div>

                                <div class="blog-content">
                                    <h3><a href="blog-single.html" class="inverse">Blog Title Post Viemo Video</a></h3>
                                    <ul class="blog-meta clearfix">
                                        <li>by <a href="#">Admin</a></li>
                                        <li>by January 09, 2016</li>
                                        <li>in <a href="#">Adventure</a>, <a href="#">Backpack</a></li>
                                        <li>32 comments</li>
                                    </ul>
                                    <div class="blog-entry">
                                        Up branch to easily missed by do. Admiration considered acceptance too led one melancholy expression. Are will took form the nor true. Winding enjoyed minuter her letters evident use eat colonel. He attacks observe mr cottage inquiry am examine gravity. Are dear but near left was. Year kept on over so as this of. She steepest doubtful betrayed formerly him. Active one called uneasy our seeing see cousin tastes its. Ye am it formed indeed agreed relied piqued.
                                    </div>
                                    <a href="blog-single.html" class="btn-blog">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>

                            </div>

                            <div class="blog-item">

                                <div class="blog-media">
                                    <div class="flex-video youtube">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/LGvvfOQWyHo" allowfullscreen></iframe>
                                    </div>
                                </div>

                                <div class="blog-content">
                                    <h3><a href="blog-single.html" class="inverse">Blog Title Post Youtube Video</a></h3>
                                    <ul class="blog-meta clearfix">
                                        <li>by <a href="#">Admin</a></li>
                                        <li>by January 09, 2016</li>
                                        <li>in <a href="#">Adventure</a>, <a href="#">Backpack</a></li>
                                        <li>32 comments</li>
                                    </ul>
                                    <div class="blog-entry">
                                        Up branch to easily missed by do. Admiration considered acceptance too led one melancholy expression. Are will took form the nor true. Winding enjoyed minuter her letters evident use eat colonel. He attacks observe mr cottage inquiry am examine gravity. Are dear but near left was. Year kept on over so as this of. She steepest doubtful betrayed formerly him. Active one called uneasy our seeing see cousin tastes its. Ye am it formed indeed agreed relied piqued.
                                    </div>
                                    <a href="blog-single.html" class="btn-blog">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>

                            </div>--}}

                            <div class="clear"></div>

                            <div class="pager-wrappper mt-0 clearfix">

                                <div class="pager-innner">

                                    <div class="flex-row flex-align-middle">
                                        @if($posts->total() > $posts->perPage())
                                        <div class="flex-column flex-sm-12">
                                            Showing reslut {{$posts->currentPage()}} to {{$posts->perPage()}} from {{$posts->total()}}
                                        </div>
                                        @endif
                                        <div class="flex-column flex-sm-12">
                                            <nav class="pager-right">
                                             {!! $posts->links('pagination') !!}
                                            </nav>
                                        </div>

                                    </div>

                                </div>

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
                                                    <input type="text" name="search" class="form-control" placeholder="Search for...">
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
                                    <h4 class="sidebar-title">Категория</h4>
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
                                    <h4 class="sidebar-title">Popular Posts</h4>
                                    <div class="sidebar-module-inner">

                                        <ul class="sidebar-post">
                                            @foreach($popular as $post)
                                            <li class="clearfix">
                                                <a href="{{route('blog.show',$post->slug)}}">
                                                    <div class="image">
                                                        <img src="{{asset('storage/'.$post->thumbnail('small'))}}" alt="Popular Post" />
                                                    </div>
                                                    <div class="content">
                                                        <h6>{{$post->getTranslatedAttribute('title',\App::getLocale(),'ru')}}</h6>
                                                        <p class="recent-post-sm-meta"><i class="fa fa-comments mr-5"></i>{{$post->commentsCount()}} comments</p>
                                                    </div>
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>

                                    </div>
                                </div>

                                <div class="clear"></div>

                                {{--<div class="sidebar-module">
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

                                <div class="clear"></div>--}}

                                <div class="sidebar-module">
                                    <h4 class="sidebar-title">Tags</h4>
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

                              {{--  <div class="clear"></div>

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
                                    <h4 class="sidebar-title">Meta</h4>
                                    <div class="sidebar-module-inner">
                                        <ul class="sidebar-list">
                                            <li><a href="#">Log in</a></li>
                                            <li><a href="#">Entries RSS</a></li>
                                            <li><a href="#">Comments RSS</a></li>
                                            <li><a href="#">WordPress.org</a></li>
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
@endsection

