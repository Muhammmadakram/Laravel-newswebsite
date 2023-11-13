<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Latest News Today, Breaking News, Tech News, Entertainment News">
    <meta name="keywords" content="Latest News Today, Breaking News, Tech News, Entertainment News">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="Abuzaid">
    <meta name="distribution" content="global" />
    <meta http-equiv="content-language" content="English">


    <meta property="og:image" content="{{ asset('img/logos.png') }}" />
    <title> Abuzaid News</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/logos.png')}}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('abuzaid/theme2/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Abel|Anton|Cherry+Bomb|Teko&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('abuzaid/css/harstyle.css ') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148993417-1"></script>


</head>

<body>

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
                                                style="height: 55px; width:100px;" "></a>
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
                                                    <a href="{{ url('/Category_details', $item->id) }}"
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
                                    <div class="p-2" id="google_translate_element"></div>
                                    <div class="container text-center">
                                        <div class="row">

                                            <div class="col-md-3 col-sm-3 col-xs-3"><a
                                                    href="{{ url('/Authur') }}">Authors</a></div>


                                        </div>

                                        <p class="mt-2" style="font-size:60%"> Copyright &copy; 2020
                                            <a href="/" class="text-info">www.abuzaidnews.com</a>
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
        <div class="container-fluid mt-3">
            <div class="row justify-content-center">
                @foreach ($authors as $name)
                    <div class="col-12 col-lg-12">
                        <div class="post-details-content mb-30 h-col">
                            <div class="card-body row">

                                <div class="col-md-4">
                                    <img style="height: 80%;" class="img-thumbnail img-fluid p-2"
                                        src="{{ asset('Authors/' . $name->image) }}">
                                </div>

                                <div class="col-md-8">

                                    <h4 class="hfont display-3 text-primary">{{ $name->author }}</h4>


                                    <h6 class="text-left">
                                        {{-- <a href="mailto:Abhishekroytakeiteasy@gmail.com" class="m-1 p-1" target="_blank"><i class="fa fa-envelope"></i></a> --}}
                                        <a href="#" class="m-1 p-1" target="_blank"><i
                                                class="fa fa-facebook-square fa-3x" style="color: #3b5998;"></i></a>
                                        <a href="#" class="m-1 p-1" target="_blank"><i
                                                class="fa fa-linkedin fa-3x" style="color: #0077B5;"></i></a>
                                        <a href="#" class="m-1 p-1" target="_blank"><i
                                                class="fa  fa-instagram fa-3x" style="color: #E1306C;"></i></a>
                                        <a href="#" class="m-1 p-1" target="_blank"><i
                                                class="fa fa-twitter fa-3x" style="color: #1DA1F2;"></i></a>
                                    </h6>
                                </div>
                                <hr />

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget-area mt-80">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="/"><img src="{{ asset('img/logos.png') }}" alt=""
                                    class="img-fluid small-logo"></a>
                        </div>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="/">info@abuzaid.com</a></li>
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
                            <li><a href="{{ url('/Authur') }}">Authors</a></li>
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
                            &copy; 2020 <a href="/" class="text-white">www.abuzaidnews.com</a>

                        </p>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('abuzaid/theme2/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <!-- Bootstrap js -->
    <script src="{{ asset('abuzaid/theme2/js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('abuzaid/theme2/js/active.js') }}"></script>

    <script src="{{ asset('abuzaid/js/slick.min.js') }}"></script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
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
    </style>
</body>

</html>
