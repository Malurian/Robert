<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>im Event</title>

        <!-- Favicons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">

        <!-- CSS Global -->
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-rtl-master/dist/css/bootstrap-rtl.min.css" rel="stylesheet">
        <link href="assets/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
        <link href="assets/plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
        <link href="assets/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
        <link href="assets/plugins/animate/animate.min.css" rel="stylesheet">
        <link href="assets/plugins/countdown/jquery.countdown.css" rel="stylesheet">

        <link href="assets/css/theme.css" rel="stylesheet">
        <link href="assets/css/custom.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="home" class="wide body-light multipage multipage-sub">

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
                <div class="top-line">
                    <div class="container">
                        <ul class="user-menu">
                            <li><a href="#popup-login"  data-toggle="modal"><i class="fa fa-file-text-o"></i> Register Now</a></li>
                            <li><a href="#popup-login" data-toggle="modal"><i class="fa fa-user"></i> Login</a></li>
                        </ul>
                        <div class="hot-line"><span><i class="fa fa-calendar"></i> <strong>Latest Event:</strong></span>  Standart Event Name Here  "15 October at 20:00 - 22:00 on Manhattan / New York"</div>
                    </div>
                </div>
                <!-- /Top Line -->

                <div class="container">
                    <div class="header-wrapper clearfix">

                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html" class="scroll-to">
                                <span class="fa-stack">
                                    <i class="fa logo-hex fa-stack-2x"></i>
                                    <i class="fa logo-fa fa-map-marker fa-stack-1x"></i>
                                </span>
                                im Event
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
                                <a href="{{url('view-events')}}">View Events</a>                                   
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

            <!-- Content area -->
            <div class="content-area">

                <section class="page-section image breadcrumbs overlay">
                    <div class="container">
                        <h1>EVENT DETAIL PAGE</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Events</a></li>
                            <li class="active">Event Detail Page</li>
                        </ul>
                    </div>
                </section>


                <!-- PAGE -->
                <section class="page-section with-sidebar sidebar-right first-section">
                    <div class="container">

                        <!-- Sidebar -->
                        <aside id="sidebar" class="sidebar col-sm-4 col-md-3">

                            <div class="widget google-map-widget">
                                <!-- Google map -->
                                <div class="google-map1">
                                    <div id="map-canvas1"></div>
                                </div>
                                <!-- /Google map -->
                                <a href="#" class="link"><i class="fa fa-map-marker"></i> ISTANBUL, TURKEY</a>
                            </div>

                            <div class="widget">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    Category
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Event Type
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Date
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFour">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    Price
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                            <div class="panel-body">
                                                <p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </aside>
                        <!-- /Sidebar -->

                        <hr class="page-divider transparent visible-xs"/>

                        <!-- Content -->
                        <section id="content" class="content col-sm-8 col-md-9">

                            <div class="listing-meta">

                                <div class="filters">
                                    <a href="#">Business <i class="fa fa-times"></i></a>
                                    <a href="#">Networking <i class="fa fa-times"></i></a>
                                    <a href="#">Free <i class="fa fa-times"></i></a>
                                </div>

                                <div class="options">
                                    <a class="byrevelance" href="#">Revelance</a>
                                    <a class="bydate active" href="#">DATE</a>
                                    <ul class="list-grid-tabs" role="tablist">                                    
                                        <li  class="active" role="presentation"> <a class="view-list" href="#list-view" data-toggle="tab" role="tab" ><i class="fa fa-th-list"></i></a></li>
                                        <li  role="presentation"><a class="view-th " href="#grid-view" data-toggle="tab" role="tab"><i class="fa fa-th"></i></a></li>
                                    </ul>
                                </div>

                            </div>

                            <div class="tab-content">
                                <div id="list-view"  class="tab-pane fade active in" role="tabpanel">
                                    <div class="thumbnails events vertical">

                                        
                                        @foreach ($events as $event)

                                            <div class="thumbnail no-border no-padding">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-3 col-xs-4">
                                                        <div class="media">
                                                            <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                                            <img src="assets/img/preview/event-1.jpg" alt="">
                                                            <div class="caption hovered"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9 col-sm-9 col-xs-8">
                                                        <div class="caption">
                                                            <a href="#" class="pull-left">
                                                                <span class="fa-stack fa-lg">
                                                                    <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                    <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                </span>
                                                            </a>
                                                            <h3 class="caption-title"><a href="#">{{ $event->name }}</a></h3>
                                                            <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 - 22:00 on Manhattan / New York</p>
                                                            <p class="caption-price">Tickets from R49,99</p>
                                                            <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis. Bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                                                            <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <hr class="page-divider half"/>
                                            
                                        @endforeach
                                       

                                    </div>

                                    <!-- Pagination -->
                                    <div class="pagination-wrapper">
                                        <ul class="pagination">
                                            <li class="disabled"><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- /Pagination -->
                                </div>
                                <div id="grid-view"  class="tab-pane fade " role="tabpanel">
                                    <div class="row thumbnails events">

                                        <div class="col-md-4 col-sm-6 isotope-item festival">
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                                    <div class="date">
                                                        <span>25</span>
                                                        <span>Jan</span>
                                                    </div>
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered"></div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                                    <p class="caption-price">Tickets from R49,99</p>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 isotope-item conference">
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                                    <div class="date">
                                                        <span>25</span>
                                                        <span>Jan</span>
                                                    </div>
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered"></div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                                    <p class="caption-price">Tickets from R49,99</p>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 isotope-item miscellaneous">
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                                    <div class="date">
                                                        <span>25</span>
                                                        <span>Jan</span>
                                                    </div>
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered"></div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                                    <p class="caption-price">Tickets from R49,99</p>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 isotope-item festival playground">
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                                    <div class="date">
                                                        <span>25</span>
                                                        <span>Jan</span>
                                                    </div>
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered"></div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                                    <p class="caption-price">Tickets from R49,99</p>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 isotope-item festival conference">
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                                    <div class="date">
                                                        <span>25</span>
                                                        <span>Jan</span>
                                                    </div>
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered"></div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                                    <p class="caption-price">Tickets from R49,99</p>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 isotope-item conference playground">
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                                    <div class="date">
                                                        <span>25</span>
                                                        <span>Jan</span>
                                                    </div>
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered"></div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                                    <p class="caption-price">Tickets from R49,99</p>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 isotope-item festival conference">
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                                    <div class="date">
                                                        <span>25</span>
                                                        <span>Jan</span>
                                                    </div>
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered"></div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                                    <p class="caption-price">Tickets from R49,99</p>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 isotope-item playground">
                                            <div class="thumbnail no-border no-padding">
                                                <div class="media">
                                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                                    <div class="date">
                                                        <span>25</span>
                                                        <span>Jan</span>
                                                    </div>
                                                    <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                    <div class="caption hovered"></div>
                                                </div>
                                                <div class="caption">
                                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                                    <p class="caption-price">Tickets from R49,99</p>
                                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pagination -->
                                    <div class="pagination-wrapper">
                                        <ul class="pagination">
                                            <li class="disabled"><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- /Pagination -->
                                </div>
                            </div>
                        </section>
                        <!-- /Content -->

                    </div>
                </section>
                <!-- /PAGE -->

            </div>
            <!-- /Content area -->

            <!-- FOOTER -->
            <footer class="footer">
                <div class="footer-widgets">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="widget widget-about">
                                    <h4 class="widget-title">About Us</h4>
                                    <p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.</p>
                                    <address>
                                        <div><i class="fa fa-phone"></i>+90 555 55 55</div>
                                        <div><i class="fa fa-envelope"></i> <a href="mailto:info@example.com">info@example.com</a></div>
                                    </address>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget widget-categories">
                                    <h4 class="widget-title">Popular searches</h4>
                                    <ul>
                                        <li><a href="#">Online Registration</a></li>
                                        <li><a href="#">Sell Event Tickets</a></li>
                                        <li><a href="#">Post Events</a></li>
                                        <li><a href="#">Event Planning Software</a></li>
                                        <li><a href="#">Online Event Management</a></li>
                                        <li><a href="#">Event Management Software</a></li>
                                        <li><a href="#">Event Payment</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget widget-twitter">
                                    <h4 class="widget-title">Recent Tweets</h4>
                                    <ul>
                                        <li>
                                            <a href="#">@isamercan</a> Cupcake chocolate cake sweet roll. Gummies macaroon biscuit cupcake candy dragée. <a href="#">#Conference about 2 hours ago</a>
                                        </li>
                                        <li>
                                            <a href="#">@isamercan</a> Cupcake chocolate cake sweet roll. Gummies macaroon biscuit cupcake candy dragée. <a href="#">#Conference about 2 hours ago</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget widget-flickr-feed">
                                    <h4 class="widget-title"><span>Instagram Photos</span></h4>
                                    <ul>
                                        <li><a href="#"><img src="assets/img/preview/sidebar-1.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/preview/sidebar-2.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/preview/sidebar-3.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/preview/sidebar-4.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/preview/sidebar-5.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/preview/sidebar-6.jpg" alt=""></a></li>
                                        <!--li><a href="#"><img src="assets/img/preview/sidebar-7.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/preview/sidebar-8.jpg" alt=""></a></li-->
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="footer-meta footer-meta-alt">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-9 col-sm-6">
                                <ul class="footer-menu">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Press</a></li>
                                    <li><a href="#">Developers</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Cookies</a></li>
                                    <li>All Rights Reserved</li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <form action="#" class="country-select">
                                    <div class="form-group">
                                        <select class="selectpicker" data-width="100%">
                                            <option>Select Your Country</option>
                                            <option>Select Your Country</option>
                                            <option>Select Your Country</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </footer>
            <!-- /FOOTER -->

            <div class="to-top"><i class="fa fa-angle-up"></i></div>

        </div>
        <!-- /Wrap all content -->

        <!-- Popup: Login -->
        <div class="modal fade login-register" id="popup-login" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">                 
                <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                <div class="form-background">
                    <div class="col-sm-6 popup-form">
                        <div class="form-header color">
                            <h1 class="section-title">
                                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                                <span class="title-inner">Login</span>
                            </h1>
                        </div>
                        <form method="post" action="#" class="registration-form alt" name="registration-form-alt" id="registration-form-alt">
                            <div class="row">
                                <div class="col-sm-12 form-alert"></div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="User Name" title="" data-toggle="tooltip" class="form-control input-name" data-original-title="Name is required">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text"  placeholder="Password"  title="" data-toggle="tooltip" class="form-control input-password" data-original-title="Password">
                                    </div>
                                </div>                                  
                                <div class="col-sm-12">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-theme btn-block submit-button" data-animation-delay="100" data-animation="flipInY"> Log in <i class="fa fa-arrow-circle-left"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>     
                        <div class="form-footer color">
                            <a href="#" class="popup-password"> Lost your password?</a>                        
                        </div>
                    </div> 

                    <div class="popup-form col-sm-6">
                        <div class="form-header color">
                            <h1 class="section-title">
                                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                                <span class="title-inner">Register</span>
                            </h1>
                        </div>
                        <form method="post" action="#" class="registration-form alt" name="registration-form-alt" id="registration-form-alt">
                            <div class="row">
                                <div class="col-sm-12 form-alert"></div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="User Name" title="" data-toggle="tooltip" class="form-control input-name" data-original-title="Name is required">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text"  placeholder="E-mail"  title="" data-toggle="tooltip" class="form-control input-password" data-original-title="Password">
                                    </div>
                                </div>                                  
                                <div class="col-sm-12">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-theme btn-block submit-button" data-animation-delay="100" data-animation="flipInY"> Register Now <i class="fa fa-arrow-circle-left"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>                         
                    </div> 

                </div>
            </div>

        </div>
        <!-- /Popup: Login -->

        <!-- JS Global -->

        <!--[if lt IE 9]><script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script><![endif]-->
        <script src="assets/plugins/jquery/jquery-2.1.1.min.js"></script>
        <script src="assets/plugins/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
        <script src="assets/plugins/modernizr.custom.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <script src="assets/plugins/superfish/js/superfish.js"></script>
        <script src="assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
        <script src="assets/plugins/placeholdem.min.js"></script>
        <script src="assets/plugins/jquery.smoothscroll.min.js"></script>
        <script src="assets/plugins/jquery.easing.min.js"></script>
        <script src="assets/plugins/smooth-scrollbar.min.js"></script>

        <!-- JS Page Level -->
        <script src="assets/plugins/owlcarousel2/owl.carousel.min.js"></script>
        <script src="assets/plugins/waypoints/waypoints.min.js"></script>
        <script src="assets/plugins/countdown/jquery.plugin.min.js"></script>
        <script src="assets/plugins/countdown/jquery.countdown.min.js"></script>
        <script src="assets/plugins/isotope/jquery.isotope.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

        <!--<script src="assets/js/theme-ajax-mail.js"></script>-->
        <script src="assets/js/theme.js"></script>

        <script type="text/javascript">
            "use strict";
            jQuery(document).ready(function () {
                theme.init();
                theme.initMainSlider();
                theme.initCountDown();
                theme.initPartnerSlider2();
                theme.initImageCarousel();
                theme.initTestimonials();
                theme.initGoogleMap();
            });
            jQuery(window).load(function () {
                theme.initAnimation();
            });

            jQuery(window).load(function () {
                jQuery('body').scrollspy({offset: 100, target: '.navigation'});
            });
            jQuery(window).load(function () {
                jQuery('body').scrollspy('refresh');
            });
            jQuery(window).resize(function () {
                jQuery('body').scrollspy('refresh');
            });

            jQuery(document).ready(function () {
                theme.onResize();
            });
            jQuery(window).load(function () {
                theme.onResize();
            });
            jQuery(window).resize(function () {
                theme.onResize();
            });

            jQuery(window).load(function () {
                if (location.hash != '') {
                    var hash = '#' + window.location.hash.substr(1);
                    if (hash.length) {
                        jQuery('html,body').delay(0).animate({
                            scrollTop: jQuery(hash).offset().top - 44 + 'px'
                        }, {
                            duration: 1200,
                            easing: "easeInOutExpo"
                        });
                    }
                }
            });

        </script>

    </body>
</html>