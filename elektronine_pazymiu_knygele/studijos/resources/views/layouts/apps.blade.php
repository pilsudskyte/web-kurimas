<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
 
    <title>Elektronine pazymiu knygele</title>

    <!--=== Bootstrap CSS ===-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }} " rel="stylesheet">
    <!--=== Animate CSS ===-->
    <link href="{{ asset('assets/css/plugins/animate.css') }} " rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="{{ asset('assets/css/plugins/vegas.min.css') }} " rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="{{ asset('assets/css/plugins/slicknav.min.css') }} " rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="{{ asset('assets/css/plugins/magnific-popup.css') }} " rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="{{ asset('assets/css/plugins/owl.carousel.min.css') }} " rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="{{ asset('assets/css/plugins/gijgo.css') }} " rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="{{ asset('assets/css/font-awesome.css') }} " rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="{{ asset('assets/css/reset.css') }} " rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="{{ asset('style.css') }} " rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="{{ asset('assets/css/responsive.css') }} " rel="stylesheet">
  
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>

</head>

<body class="loader-active">
    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
             
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
                        <a href="http://localhost:83/elektronine_pazymiu_knygele/studijos/public/" class="logo">Elektronine pazymiu knygute</a>
                            <!-- <img src="assets/img/logo.png" alt="JSOFT"> -->
                        </a>
                    </div>
                    <!--== Logo End ==-->                   

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-12 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class="active"> <a href="http://localhost:83/elektronine_pazymiu_knygele/studijos/public/">Home</a>
                                </li>
                                <li><a href="http://localhost:83/elektronine_pazymiu_knygele/studijos/public/students">Studentai</a></li>
                                <li><a href="http://localhost:83/elektronine_pazymiu_knygele/studijos/public/lectures">Paskaitos</a></li>
                                <li><a href="http://localhost:83/elektronine_pazymiu_knygele/studijos/public/grades">Įvertinimai</a></li>
                                
                                @guest
                  
                                <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                          
                        
                                <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                           
                                @else
                        
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                @endguest
                            </ul>                                    
                        </nav>                        
                    </div>
                    <!--== Main Menu End ==-->
                    <!-- Button trigger modal -->
                </div>
            </div>
        </nav>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->

    <main>
                @yield('content')
    </main>

</body>   
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
                                    <li><i class="fa fa-envelope"></i> egzaminas@gmail.com</li>
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

   <link href="{{ asset('assets/css/bootstrap.min.css') }} " rel="stylesheet">
    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="{{ asset('assets/js/jquery-migrate.min.js') }}"></script>
    <!--=== Popper Min Js ===-->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="{{ asset('assets/js/plugins/gijgo.js') }}"></script>
    <!--=== Vegas Min Js ===-->
    <script src="{{ asset('assets/js/plugins/vegas.min.js') }}"></script>
    <!--=== Isotope Min Js ===-->
    <script src="{{ asset('assets/js/plugins/isotope.min.js') }}"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="{{ asset('assets/js/plugins/owl.carousel.min.js') }}"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="{{ asset('assets/js/plugins/waypoints.min.js') }}"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="{{ asset('assets/js/plugins/counterup.min.js') }}"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="{{ asset('assets/js/plugins/mb.YTPlayer.js') }}"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="{{ asset('assets/js/plugins/magnific-popup.min.js') }}"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="{{ asset('assets/js/plugins/slicknav.min.js') }}"></script>

    <!--=== Mian Js ===-->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>

</html>


