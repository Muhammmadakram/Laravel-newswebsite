<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Latest News Today, Breaking News, Tech News, Entertainment News">
    <meta name="keywords" content="Latest News Today, Breaking News, Tech News, Entertainment News">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta property="fb:ch.akram.127648" content="{https://www.facebook.com/ch.akram.127648}" />

    <meta name="author" content="Abuzaid">
    <meta name="distribution" content="global" />
    <meta http-equiv="content-language" content="English">


    <meta property="og:image" content="{{ asset('img/logos.png') }}" />
    <title> Abuzaid News</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/logos.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- Core Stylesheet -->

    <link rel="stylesheet" href="{{ asset('abuzaid/theme2/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Abel|Anton|Cherry+Bomb|Teko&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('abuzaid/css/harstyle.css ') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148993417-1"></script>


</head>

<body>
    {{-- comment cdn link --}}
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v18.0" nonce="fRePI85m"></script>
{{-- end cdn --}}
    <!-- ##### Header Area Start ##### -->
    <header class="header-area ">

        <!-- Top Header Area -->
        <div class="top-header-area  d-none d-sm-none d-md-none d-lg-block ">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Logo -->
                            <div class="logo col-3">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('img/logos.png') }} " class="img-responsive"
                                        style="height: 55px; width:100px;"></a>
                            </div>

                            <!-- Login Search Area -->
                            <div class="login-search-area d-flex align-items-center">
                                <!-- Login -->
                                <div class="search-form">
                                    <div class="harsubm">

                                        <input type="text" class="harsubt" placeholder="Support Aznews" />
                                        <input type="submit" class="harsub" value="Subscribe" />
                                    </div>
                                </div>
                                <div class="login d-flex">
                                    <ul class="topsi">
                                        <li> <a href="https://www.facebook.com/mohd.jamil.96995" target="_blank">
                                                <i class="fa fa-facebook text-white fa-2x"></i></a></li>

                                        <li> <a href="https://www.instagram.com/mohdjamil44/" target="_blank">
                                                <i class="fa fa-twitter text-white fa-2x"></i></a>
                                        </li>
{{--
                                        <li> <a href="https://www.linkedin.com/company/thestreakshot" target="_blank">
                                                <i class="fa fa-linkedin text-white fa-2x"></i></a>
                                        </li> --}}

                                        {{-- <li> <a href="https://www.youtube.com/c/StreakShotNews" target="_blank"><i
                                                    class="fa fa-youtube text-white fa-2x"></i></a>
                                        </li> --}}
                                        <li> <a href="https://www.instagram.com/mohdjamil44/" target="_blank">
                                                <i class="fa fa-instagram text-white fa-2x"></i></a></li>
                                        <li class="clr"></li>
                                    </ul>
                                </div>
                                <!-- Search Form -->
                                <div class="p-2" id="google_translate_element"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="newspaper-main-menu" id="stickyMenu">
            <div class="classy-nav-container breakpoint-off">

                <div class="d-lg-none">
                    <div class="container">
                        <!-- Menu -->
                        <nav class="classy-navbar justify-content-between" id="newspaperNav">

                            <!-- Logo -->
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('img/logos.png') }} " class="img-responsive"
                                        style="height: 55px; width:100px !important;"></a>
                            </div>

                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>

                            <!-- Menu -->
                            <div class="classy-menu" style="background:#efefef">

                                <!-- close btn -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span>
                                    </div>
                                </div>

                                <!-- Nav Start -->

                                <div class="classynav" style="display:none;">
                                    <div class="col-md-12">

                                        <a href="{{ url('/') }}">
                                            <img src="{{ asset('img/logos.png') }} " class="img-responsive"
                                                style="height: 55px; width:100px;" ></a>
                                    </div>
                                    <ul>
                                        @php
                                            $visitedCategories = [];
                                        @endphp
                                            @foreach ($categories as $item)
                                            @if (!in_array($item->Category, $visitedCategories))
                                                @php
                                                    $visitedCategories[] = $item->Category;
                                                @endphp
                                                <li>
                                                    <a href=" {{ url('/Category_details', $item->id) }}"
                                                        style="border:none; color:#000">
                                                        <i class="fa fa-star"></i>
                                                        {{ $item->Category }}
                                                    </a>
                                                </li>
                                            @endif
                                            @endforeach
                                            </ul>

                                    </div>
                                    <br />

                                    <div class="container text-center">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3 col-xs-3 ">
                                                <a

                                                    href="{{ url('/Authur')}}">Authors</a>
                                                </div>

                                        </div>

                                        <p class="mt-2" style="font-size:60%"> Copyright &copy; 2020
                                            <a href="/" class="text-info">www.Abuzaid.com</a>
                                        </p>
                                    </div>
                                </div>

                        </nav>

                    </div>
                </div>
                <div class="d-none d-lg-block">
                    <div class="container ">
                        <!-- Menu -->
                        <nav class="classy-navbar justify-content-between" id="newspaperNav">

                            <!-- Logo -->
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('img/logos.png') }} " class="img-responsive"
                                        style="height: 55px;" width="80px;"></a>
                            </div>

                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>

                            <!-- Menu -->
                            <div class="classy-menu">
                                <!-- close btn -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span>
                                    </div>
                                </div>

                                <!-- Nav Start -->
                                <!-- Nav Start -->
                                <div class="classynav">
                                    <ul>
                                        @php
                                            $visitedCategories = [];
                                        @endphp
                                        @foreach ($categories as $item)
                                            @if (!in_array($item->Category, $visitedCategories))
                                                @php
                                                    $visitedCategories[] = $item->Category;
                                                @endphp
                                                <li>
                                                    <a
                                                        href="{{ url('/Category_details', $item->id) }}">{{ $item->Category }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>


                            </div>
                            <!-- Nav End -->
                    </div>
                    </nav>
                </div>
            </div>

        </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-100-0 mb-70">
        <div class="container-fluid">
            <div class="row justify-content-center ">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-12 ">
                    <div class="post-details-content mb-100 h-col">
                        <div class="card-body">
                            <br />
                            <div class="row">

                                <div class="col-md-8 col-sm-12 col-xs-12 ccg" id="fdd">

                                    <h1 style="color:#6DD047;" class="display-5 hch mt-2 p-2 ">{{ $posts->Title }}
                                    </h1>


                                    <div style="width:100%; min-height:200px">
                                        <img src="{{ asset('postnews/' . $posts->Image) }}" width="100%" />
                                    </div>

                                    <div class="mt-4 pl-1 mb-4 row">
                                        <div class="col-md-1 col-2 text-center">
                                            <img src="{{ asset('Authors/' . $posts->author->image) }}"
                                                alt="{{ $posts->author->author }}" class="img-fluid"
                                                style="border-radius: 100%; max-width: 100%; height: auto;" />
                                        </div>
                                        <div class="col-md-3 col-10 d-flex align-items-center">
                                            <div class="border-right text-left">
                                                <a href="" class="text-success">
                                                    <b>{{ $posts->author->author }}</b>
                                                </a>
                                                <br />
                                                <a href="#"
                                                    class="text-info">{{ date('Y-m-d h:i A', strtotime($posts->created_at)) }}</a>
                                            </div>
                                        </div>


                                        <div class="social-btn-sp mt-3">
                                            {!! $shareButtons !!}
                                        </div>
                                    </div>
                                    <p class="fw-bold"> {!! $posts->Description !!}</p>
                                </div>

<div class="fb-comments" data-href="http://127.0.0.1:8000/postdetails/index.html" data-width="" data-numposts="10"></div>




                                <div class=" col-md-3 offset-md-1 col-sm-12 col-xs-12 d-none d-md-block">
                                    <div class="sidebar-area">

                                        <div class="single-widget-area">
                                            @foreach ($relatedPosts as $relatedPost)
                                                <!-- Single News Area -->
                                                <div class="single-blog-post d-flex style-4 mb-30 panel border p-2">

                                                    <div class="panel-body">

                                                            <a href="{{ url('/postdetails', $relatedPost->id) }}">
                                                                <img src="{{ asset('postnews/' . $relatedPost->Image) }}"
                                                                    alt="">
                                                            </a>

                                                        <div class="mt-1">
                                                            <a
                                                                href="{{ url('/postdetails', $relatedPost->id) }}">
                                                                <h6
                                                                    style="font-weight:normal; font-size:1.1em; line-height:18px;">
                                                                    {{ $relatedPost->Title }}</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>




                </div>

            </div>

        </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget-area mt-80">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="/"><img src="{{ asset('img/logos.png') }}"
                                    alt="" class="img-fluid small-logo"></a>
                        </div>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="">info@Abuzaidnews.com</a></li>
                            <li><a href="/">www.abuzaid.com</a></li>
                        </ul>
                    </div>
                </div>



                @php
                    $visitedCategories = [];
                @endphp

                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h6 class="widget-title">Quick Links</h6>
                        <!-- List -->
                        <ul class="list">
                            @foreach ($categories as $item)
                                @if (!in_array($item->Category, $visitedCategories))
                                    @php
                                        $visitedCategories[] = $item->Category;
                                    @endphp
                                    <li>
                                        <a href="{{ url('/Category_details', $item->id) }}">{{ $item->Category }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h6 class="widget-title">Social Links</h6>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="https://www.facebook.com/mohd.jamil.96995" target="_blank">Facebook</a></li>

                            <li><a href="https://twitter.com/mohdjamil44" target="_blank">Twitter</a></li>

                            <li><a href="https://www.instagram.com/mohdjamil44/" target="_blank">Instagram</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget-area mt-80">
                        <h6 class="widget-title">@Aznews</h6>
                        <ul class="list">
                            <li><a href="{{ url('/Authur')}}">Authors</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            &copy; 2020 <a href="/" class="text-white">www.Aznews.com</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
     <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="{{ asset('abuzaid/theme2/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <!-- Bootstrap js -->
    <script src="{{ asset('abuzaid/theme2/js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('abuzaid/theme2/js/active.js') }}"></script>

    <script src="{{ asset('abuzaid/js/slick.min.js') }}"></script>
    <script>
     function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                    pageLanguage: 'en',
                    layout: google.translate.TranslateElement.InlineLayout.NARROW
                },
                'google_translate_element'
            );
        }



        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: true,
            focusOnSelect: true
        });

        $('a[data-slide]').click(function(e) {
            e.preventDefault();
            var slideno = $(this).data('slide');
            $('.slider-nav').slick('slickGoTo', slideno - 1);
        });

        $(function() {
            setTimeout(function() {
                $('.classynav').show();
            }, 1000);
        });
    </script>

    <style>

        i.fa-angle-up {
            color: #efefef !important;
        }

        .d-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .topsi {
            list-style: none;
            display: flex;
            gap: 10px;
        }

        .topsi li {
            display: flex;
            align-items: center;
        }

        /* CSS for responsiveness */
        @media only screen and (max-width: 768px) {
            .col-12 {
                width: 100%;
            }

            .sftitle {
                display: block;
            }
        }

        /* Custom style for small logo on small devices */
        @media (max-width: 576px) {
            .small-logo {
                max-width: 100px;
                /* Adjust the size as needed */
            }
        }

        .social-btn-sp #social-links {
            margin: 0 auto;
            max-width: 500px;
        }

        .social-btn-sp #social-links ul li {
            display: inline-block;
        }

        .social-btn-sp #social-links ul li a {
            padding: 15px;
            border: 1px solid #ccc;
            margin: 1px;
            font-size: 30px;
        }

        table #social-links {
            display: inline-table;
        }

        table #social-links ul li {
            display: inline;
        }

        table #social-links ul li a {
            padding: 5px;
            border: 1px solid #ccc;
            margin: 1px;
            font-size: 15px;
            background: #e3e3ea;
        }
    </style>
</body>

</html>
