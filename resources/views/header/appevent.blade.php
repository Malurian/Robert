<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Event Sponsors</title>

        <!-- Favicons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="shortcut icon" href="assets/img/logo.jpeg">

        <!-- CSS Global -->
    <link href="{{ URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/bootstrap-rtl-master/dist/css/bootstrap-rtl.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/jquery-ui-1.11.4.custom/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('assets/plugins/prettyphoto/css/prettyPhoto.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet">

        <link href="{{ URL::asset('assets/plugins/owlcarousel2/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/owlcarousel2/assets/owl.theme.default.min.css') }}" rel="stylesheet">        
        <link href="{{ URL::asset('assets/plugins/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/countdown/jquery.countdown.css') }}" rel="stylesheet">

        <link href="{{ URL::asset('assets/css/theme.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/css/custom.css') }}" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="home" class="wide body-light multipage">

        <!-- Preloader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner"></div>
            </div>
        </div>

        <!-- Wrap all content -->
        <div class="wrapper">
            <!-- HEADER -->
            <header class="header fixed">
                <!-- Top Line -->
                @guest
                <div class="top-line">
                    <div class="container">
                        <ul class="user-menu">
                            <li><a href="#popup-login"  data-toggle="modal"><i class="fa fa-file-text-o"></i> Register Now</a></li>
                            <li><a href="#popup-login" data-toggle="modal"><i class="fa fa-user"></i> Login</a></li>
                        </ul>
                        <div class="hot-line"><span><i class="fa fa-calendar"></i> <strong>Latest Event:</strong></span>  Standart Event Name Here  "15 October at 20:00 - 22:00 on Manhattan / New York"</div>
                    </div>
                </div>
                @else
                <div class="top-line">
                        <div class="container">
                            <ul class="user-menu">
                                <li><a href="{{ url('/dash') }}"  data-toggle="modal"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                                <li><a href="{{ url('logout')}}" data-toggle="modal"><i class="fa fa-sign-out"></i> Logout</a></li>
                            </ul>
                            @guest
                            <div class="hot-line"><span><i class="fa fa-calendar"></i> <strong>Latest Event:</strong></span>  Standart Event Name Here  "15 October at 20:00 - 22:00 on Manhattan / New York"</div>
                            @else
                            <div class="hot-line"><span><i class="fa fa-user"></i> <strong>Welcome: </strong></span><span class="text-uppercase">{{{isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->name }}}</span>
                            <span><i class="fa fa-credit-card"></i> <strong>| Wallet: </strong></span>R{{ auth::user()->wallet }}</div>
                            @endguest
                        </div>
                    </div>
                @endguest
                <!-- /Top Line -->

                <div class="container">
                    <div class="header-wrapper clearfix">

                        <!-- Logo -->
                        <div class="logo">
                        <a href="{{ url('/') }}" class="scroll-to">
                                    <img src="assets/img/logo.jpeg" style="width: 60px;" alt=""/>
                                Event Sponsors
                            </a>
                        </div>
                        <!-- /Logo -->

                        <!-- Navigation -->
                        <div id="mobile-menu"></div>
                        <nav class="navigation closed clearfix">
                            <a href="#" class="menu-toggle btn"><i class="fa fa-bars"></i></a>
                            <ul class="sf-menu nav">
                                <li class="active">
                                <a href="{{ url('/') }}">Home</a>                                   
                                </li>
                                <li>
                                <a href="{{ url('about-us') }}">About Us</a>                                   
                                </li>
                                <li>
                                <a href="{{url('view-events')}}">View Events</a>                                   
                                </li>
                                <li>
                                <a href="{{ url('event-hosts') }}">Event Hosts</a>                                   
                                </li>
                            <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                                <li class="header-search-wrapper">
                                    <form action="#" class="header-search-form">
                                        <input type="text" class="form-control header-search" placeholder="Search"/>
                                        <input type="submit" hidden="hidden"/>
                                    </form>
                                </li>
                                <li><a href="#" class="btn-search-toggle"><i class="fa fa-search"></i></a></li>
                                <li><a href="#" class="btn btn-theme btn-submit-event">SUBMIT EVENT <i class="fa fa-plus-circle"></i></a></li>
                            </ul>
                        </nav>
                        <!-- /Navigation -->
                       
                    </div>
                </div>
            </header>
            
            <!-- /HEADER -->
            @yield('content')

            <!-- FOOTER -->
            <footer class="footer">
                <div class="footer-meta">
                    <div class="container text-center">
                        <div class="clearfix">
                            <ul class="social-line list-inline">
                                <li data-animation="flipInY" data-animation-delay="100"><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li data-animation="flipInY" data-animation-delay="200"><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
                                <li data-animation="flipInY" data-animation-delay="300"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li data-animation="flipInY" data-animation-delay="400"><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                <li data-animation="flipInY" data-animation-delay="500"><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li data-animation="flipInY" data-animation-delay="600"><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                <li data-animation="flipInY" data-animation-delay="700"><a href="#" class="skype"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                        <span class="copyright" data-animation="fadeInUp" data-animation-delay="100">&copy; copyright &#8212; The Event Manager Mink Strings</span>
                    </div>
                </div>
            </footer>
            <!-- /FOOTER -->




    <!-- /Wrap all content -->

    <!-- JS Global -->

    <!--[if lt IE 9]><script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script><![endif]-->
    
    <script src="{{ URL::asset('assets/plugins/jquery/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-ui-1.11.4.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/modernizr.custom.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/superfish/js/superfish.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/prettyphoto/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/placeholdem.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jquery.smoothscroll.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jquery.easing.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/smooth-scrollbar.min.js') }}"></script>

    <!-- JS Page Level -->
    <script src="{{ URL::asset('assets/plugins/owlcarousel2/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/countdown/jquery.plugin.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/countdown/jquery.countdown.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/isotope/jquery.isotope.min.js') }}"></script>
    <script src="{{ URL::asset('https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false') }}"></script>

    <!--<script src="assets/js/theme-ajax-mail.js"></script>-->
    <script src="{{ URL::asset('assets/js/theme.js') }}"></script>
    


   
</body>
</html>
