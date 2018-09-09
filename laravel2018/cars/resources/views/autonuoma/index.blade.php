@extends('layouts.app')

@section('content')
<!DOCTYPE html>



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>AUTONUOMA</title>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Animate CSS ===-->
    <link href="assets/css/plugins/animate.css" rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="assets/css/plugins/vegas.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="assets/css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">
        
    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i> Jakšto g. 6, Kaunas
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> +370 6 987 9876
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> 24/7 :)
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Social Icons Start ==-->
                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <!--== Social Icons End ==-->
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="http://localhost:83/laravel2018/cars/public" class="logo">AUTONUOMA</a>
                            <!-- <img src="assets/img/logo.png" alt="JSOFT"> -->
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class="active"> <a href="http://localhost:83/laravel2018/cars/public">Home</a>
                                </li>
                                <li><a href="http://localhost:83/laravel2018/cars/public/apiemus">Apie mus</a></li>
                                <li><a href="services.html">Servisas</a></li>
                                <li><a href="#">AUTOMOBILIAI</a>
                                    <ul>
                                        <li><a href="car-left-sidebar.html">Nuomojami automobiliai</a></li>
                                        
                                    </ul>
                                </li>
                                @if(Auth::User())
                                @if(Auth::User()->admin == 1)
                                <li><a href="index.html">Redaguoti</a>
                                    <ul>
                                    <a href="http://localhost:83/laravel2018/cars/public/cars">AUTOMOBILIAI</a>
                                    <a href="http://localhost:83/laravel2018/cars/public/owners">NUOMOTOJAI</a>
                                    </ul>
                                </li>

                                @endif
                                @endif
                                <li><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="article.html">ATSILIEPIMAI</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Kontaktai</a></li>
                             </ul>
                                    @if (Route::has('login'))
                                    <div class="top-right links">
                                    @auth
                                        <a href="{{ url('/home') }}">Prisijungti</a>
                                    @else
                                        <a href="{{ route('login') }}">Prisijungti</a>
                                        <a href="{{ route('register') }}">Registruotis</a>
                                    @endauth
                                </div>
                            @endif
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->
 <!--== Choose Car Area Start ==-->
 <section id="choose-car" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Choose your Car</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Choose Area Content Start -->
                <div class="col-lg-12">
                    <div class="choose-content-wrap">
                        <!-- Choose Area Tab Menu -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular_cars" role="tab" aria-selected="true">popular Cars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#newest_cars" role="tab" aria-selected="false">newest cars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#office_map" role="tab" aria-selected="false">Our Office</a>
                            </li>
                        </ul>
                        <!-- Choose Area Tab Menu -->

                        <!-- Choose Area Tab content -->
                        <div class="tab-content" id="myTabContent">
                            <!-- Popular Cars Tab Start -->
                            <div class="tab-pane fade show active" id="popular_cars" role="tabpanel" aria-labelledby="home-tab">
                                <!-- Popular Cars Content Wrapper Start -->
                                <div class="popular-cars-wrap">
                                    <!-- Filtering Menu -->
                                    <div class="popucar-menu text-center">
                                        <a href="#" data-filter="*" class="active">all</a>
                                        <a href="#" data-filter=".con">Conver</a>
                                        <a href="#" data-filter=".hat">Truck</a>
                                        <a href="#" data-filter=".mpv">MPV</a>
                                        <a href="#" data-filter=".sedan">Sedan</a>
                                        <a href="#" data-filter=".suv">SUV</a>
                                    </div>

                                    <!-- Filtering Menu -->

                                    <!-- PopularCars Tab Content Start -->
                                    <div class="row popular-car-gird">
                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 con suv mpv">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-1.jpg">
                                                      <img src="assets/img/car/car-1.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 hat sedan">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-2.jpg">
                                                      <img src="assets/img/car/car-2.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 suv con mpv">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-3.jpg">
                                                      <img src="assets/img/car/car-3.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 con hat">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-4.jpg">
                                                      <img src="assets/img/car/car-4.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 con sedan mpv">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-5.jpg">
                                                      <img src="assets/img/car/car-5.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 hat suv mpv">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-6.jpg">
                                                      <img src="assets/img/car/car-6.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->
                                    </div>
                                    <!-- PopularCars Tab Content End -->
                                </div>
                                <!-- Popular Cars Content Wrapper End -->
                            </div>
                            <!-- Popular Cars Tab End -->

                            <!-- Newest Cars Tab Start -->
                            <div class="tab-pane fade" id="newest_cars" role="tabpanel" aria-labelledby="profile-tab">
                                <!-- Newest Cars Content Wrapper Start -->
                                <div class="popular-cars-wrap">
                                    <!-- Filtering Menu -->
                                    <div class="newcar-menu text-center">
                                        <a href="#" data-filter="*" class="active">all</a>
                                        <a href="#" data-filter=".toyota">toyota</a>
                                        <a href="#" data-filter=".bmw">bmw</a>
                                        <a href="#" data-filter=".audi">audi</a>
                                        <a href="#" data-filter=".tata">Tata</a>
                                    </div>

                                    <!-- Filtering Menu -->

                                    <!-- NewestCars Tab Content Start -->
                                    <div class="row newest-car-gird">
                                        <!-- Single Newest Car Start -->
                                        <div class="col-lg-4 col-md-6 tata audi">
                                            <div class="single-new-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-6.jpg">
                                                      <img src="assets/img/car/car-6.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Toyota RAV4 EV</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $35/day</span>
                                                    </h3>

                                                    <h5>Toyota</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2018</a>
                                                        <a href="#">Auto</a>
                                                        <a href="#">Non AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Newest Car End -->

                                        <!-- Single Newest Car Start -->
                                        <div class="col-lg-4 col-md-6 bmw tata toyota">
                                            <div class="single-new-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-5.jpg">
                                                      <img src="assets/img/car/car-5.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Toyota RAV4 EV</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $35/day</span>
                                                    </h3>

                                                    <h5>Toyota</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2018</a>
                                                        <a href="#">Auto</a>
                                                        <a href="#">Non AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Newest Car End -->

                                        <!-- Single Newest Car Start -->
                                        <div class="col-lg-4 col-md-6 bmw">
                                            <div class="single-new-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-4.jpg">
                                                      <img src="assets/img/car/car-4.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Toyota RAV4 EV</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $35/day</span>
                                                    </h3>

                                                    <h5>Toyota</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2018</a>
                                                        <a href="#">Auto</a>
                                                        <a href="#">Non AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Newest Car End -->
                                    </div>
                                    <!-- NewestCars Tab Content End -->
                                </div>
                                <!-- Newest Cars Content Wrapper End -->
                            </div>
                            <!-- Newest Cars Tab End -->

                            <!-- Office Map Tab -->
                            <div class="tab-pane fade" id="office_map" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="map-area">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.6538067244583!2d90.37092511435942!3d23.79533919297639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0cce3251ab1%3A0x7a2aa979862a9643!2sJSoft!5e0!3m2!1sen!2sbd!4v1516771096779"></iframe>
                                </div>
                            </div>
                            <!-- Office Map Tab -->
                        </div>
                        <!-- Choose Area Tab content -->
                    </div>
                </div>
                <!-- Choose Area Content End -->
            </div>
        </div>
    </section>
    <!--== Choose Car Area End ==-->