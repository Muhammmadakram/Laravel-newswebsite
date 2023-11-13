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
    <link rel="icon" href="https://streakshot.com/public/img/favicon.ico">

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

                                        <li> <a href="https://twitter.com/mohdjamil44" target="_blank">
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
 <div class="container">
    <h2 class="bg-warning p-2 mt-1">NEWS FLASH</h2>
    <div class="marquee-container">
        <marquee class="bg-warning mt-1" id="news-marquee" onmouseover="this.stop();" onmouseout="this.start();"></marquee>
    </div>
</div>
<script>
    // Define an array of news flash items
    var newsItems = [
        @foreach ($flash as $row)
            "{{ $row->newsflash }}",
        @endforeach
    ];

    // Initialize variables
    var marquee = document.getElementById("news-marquee");
    var currentIndex = 0;
    var scrollPosition = 0;
    var newsText = "";

    // Function to update the marquee content
    function updateMarquee() {
        // Clear the current marquee content
        marquee.innerHTML = "";

        // Add the news items starting from the current index
        for (var i = currentIndex; i < newsItems.length; i++) {
        newsText += newsItems[i] + "&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;";
marquee.innerHTML = newsText;


            // Check if more than half of the content has scrolled off to the left
            if (marquee.scrollWidth - marquee.scrollLeft <= marquee.clientWidth / 2) {
                currentIndex = i + 1;
                newsText += " "; // Add a space after the second data item
                marquee.innerHTML = newsText;
                marquee.scrollLeft = 50;
                break;
            }
        }

        // Remove trailing " | "
        marquee.innerHTML = marquee.innerHTML.slice(0, -50);
    }

    // Call the updateMarquee function to initialize
    updateMarquee();

    // Set an interval to continuously update the marquee
    setInterval(updateMarquee, 1000); // Adjust the interval as needed
</script>


<style>
    .container {
        display: flex;
        align-items: center;
    }

   h2.bg-warning {
    flex: 0 0 auto; /* Prevent the h2 from growing */
    background: #F96D3E !important;
    font-size: 18px; /* Set the font size for h2 */
    color: white;
    font-family: 'Abel', sans-serif;
    border-radius: 3px 0 0 3px; /* Top-right and bottom-left corners rounded */
}


    .marquee-container {
        flex: 1; /* Allow the marquee container to grow and fill the remaining space */
    }

    marquee.bg-warning {
        background-color:#FFD76B !important;
        font-size:15.5px;
    font-family: 'Abel', sans-serif;
    font-weight:600;
    padding: 0.5rem !important;
    }
</style>

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
                                            <a href="/" class="text-info">Aznews.com</a>
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


    <!-- ##### Header Area End ##### -->
    <!-- index.blade.php -->
    <div class="hero-area">
        <!-- Hero Post Slides -->
        <div class="hero-post-slides">
            @foreach ($categories->chunk(2) as $postChunk)
                <!-- Row with Two Images -->
                <div class="row">
                    @foreach ($postChunk as $post)
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-1 mb-30 p-3" style="">
                                <!-- Blog Thumbnail -->
                                <a href="{{ url('/postdetails', $post->id) }}" class="post-title">
                                    <div class="sftitle"
                                        style="background-image: url('{{ asset('postnews/' . $post->Image) }}'); background-size: cover;">
                                    </div>
                                </a>

                                <!-- Blog Content -->
                                <div class="blog-content" style="background:#efefef; opacity:0.9; padding:5px">
                                    <a href="{{ url('/postdetails', $post->id) }}">
                                        <h5 class="Abel m-1">{{ $post->Title }}</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget-area mt-80">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="/"><img src="{{ asset('img/logos.png') }}" alt="streakshot.com"
                                    class="img-fluid small-logo"></a>
                        </div>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="/">info@Aznews.com</a></li>
                            <li><a href="/">www.Aznews.com</a></li>
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

                            <li><a href="https://twitter.com/thestreakshot" target="_blank">Twitter</a></li>

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
