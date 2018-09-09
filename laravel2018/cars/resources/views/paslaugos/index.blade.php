!DOCTYPE html>


<html lang="{{ app()->getLocale() }}">

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
                                <li><a href="http://localhost:83/laravel2018/cars/public/paslaugos">Paslaugos</a></li>
                                <li><a href="{{ route('cars.index') }}">AUTOMOBILIAI</a>
                                </li>
                                @if(Auth::User())
                                @if(Auth::User()->admin == 1)
                                <li><a class="text-danger">Redaguoti</a>
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
                                <li><a href="http://localhost:83/laravel2018/cars/public/kontaktai">Kontaktai</a></li>
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
 
 <!--== Services Area Start ==-->
 <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Paslaugos</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Automobilių nuoma Kaune ir visoje Lietuvoje. Siūlome tik kokybiškus ir techniškai tavrkingus automobilius. Didelės nuolaidos ilgalaikei automobilių nuomai. Ilgalaikė automobilių nuoma – automobilių rūpesčius patikėkite mums.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="media">
                            <div class="service-icon">
                                <span></span>
                                <img src="assets/img/services/service-icon-1.png" alt="JSOFT">
                            </div>
                            <div class="media-body">
                                <h4>Nuoma</h4>
                                <p>Siūlome automobilius ilgalaikei ir trumpalaikei nuomai</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Service Start -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="media">
                            <div class="service-icon">
                                <span></span>
                                <img src="assets/img/services/service-icon-2.png" alt="JSOFT">
                            </div>
                            <div class="media-body">
                                <h4>Remontas</h4>
                                <p>Mes visada orientuojamės į kokybę, profesionalumą ir tobulumą. Malonus aptarnavimas. Nemokamas pakaitinis auto. Visos remonto paslaugos.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Service Start -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="media">
                            <div class="service-icon">
                                <span></span>
                                <img src="assets/img/services/service-icon-3.png" alt="JSOFT">
                            </div>
                            <div class="media-body">
                                <h4>TAXI</h4>
                                <p>Labai didelį dėmesį skiriame paslaugų kokybei. Turėdami puikius vairuotojus ir užsakymų priėmimo sistemą, galime sutaupyti klientų laiką ir išlaikyti aukščiausius taksi standartus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Service Start -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="media">
                            <div class="service-icon">
                                <span></span>
                                <img src="assets/img/services/service-icon-4.png" alt="JSOFT">
                            </div>
                            <div class="media-body">
                                <h4>Draudimas</h4>
                                <p>Apsidrauskite neišėję iš namų vos per kelias minutes.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Service Start -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="media">
                            <div class="service-icon">
                                <span></span>
                                <img src="assets/img/services/service-icon-5.png" alt="JSOFT">
                            </div>
                            <div class="media-body">
                                <h4>Plovykla</h4>
                                <p>Pristatome visiškai naują paslaugą "Automobilio plovimas" kol esate išvykęs.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Service Start -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="media">
                            <div class="service-icon">
                                <span></span>
                                <img src="assets/img/services/service-icon-6.png" alt="JSOFT">
                            </div>
                            <div class="media-body">
                                <h4>Asmeninis vairuotojas</h4>
                                <p>Saugus keleivių vežimas prabangiu automobiliu iš anksto numatytu maršrutu.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Service Start -->
            </div>
        </div>
    </section>
    <!--== Services Area End ==-->
    

    <!--== Footer Area Start ==-->
    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Susisiekite</h2>
                           
                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> Jakšto g. 6, Kaunas, Lithuania</li>
                                    <li><i class="fa fa-mobile"></i> +370 6 987 9876</li>
                                    <li><i class="fa fa-envelope"></i> autonuoma@gmail.com</li>
                                </ul>
                                <a href="https://www.google.com.bd/maps/place/A.+Jak%C5%A1to+g.+6,+Kaunas+44275/@54.898158,23.8845572,17z/data=!3m1!4b1!4m5!3m4!1s0x46e7220570535735:0x2812cd75a3dc1afb!8m2!3d54.898158!4d23.8867459?hl=en" class="map-show" target="_blank">Rask mus:)</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.spec.lt/imone/socialines-globos-namai-krisvita-vsi/darbuotojai" target="_blank">KRISTINA</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="assets/js/main.js"></script>

</body>

</html>
