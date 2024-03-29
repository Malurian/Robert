@extends('header.header')
    @section('content')
            <!-- Content area -->
            <div class="content-area">

                <div id="main">
                    <!-- SLIDER -->
                    <section class="page-section no-padding background-img-slider">
                        <div class="container">

                            <div id="main-slider" class="owl-carousel owl-theme">
                                <!-- Slide -->
                                <div class="item page text-center slide5">
                                    <div class="caption">
                                        <div class="container">
                                            <div class="div-table">
                                                <div class="div-cell">
                                                    <p class="text-center avatar"><img src="assets/img/preview/slider-4-avatar.png" style="width: auto;" alt=""/></p>
                                                    <h2 data-animation="fadeInDown" data-animation-delay="100"><span>Adverts Here</span></h2>
                                                    <h2 data-animation="fadeInDown" data-animation-delay="100"><span>15 October at 20:00 - 22:00</span></h2>
                                                    <h3 class="caption-subtitle" data-animation="fadeInUp" data-animation-delay="300">PHP Conference ın Manhattan</h3>
                                                    <div class="countdown-wrapper">
                                                        <div id="defaultCountdown" class="defaultCountdown clearfix"></div>
                                                    </div>
                                                    <p class="caption-text">
                                                        <a class="btn btn-theme btn-theme scroll-to" href="#" data-animation="flipInY" data-animation-delay="600">Register</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide -->
                                <div class="item page text-center slide4">
                                    <div class="caption">
                                        <div class="container">
                                            <div class="div-table">
                                                <div class="div-cell">
                                                    <h3 class="caption-subtitle">We are Event professionals</h3>
                                                    <h4><span>You Can Find "<a href="#">Festivals</a>, <a href="#">Parties</a>, <a href="#">Conference</a>, <a href="#">Fairs</a>, <a href="#">Exhibitions</a>, <a href="#">Speakers</a> and more</span></h4>
                                                    <div class="row">
                                                        <div class="col-md-8 col-md-offset-2">
                                                            <form action="#" class="location-search">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control text" placeholder="FIND EXPERIENCES"/>
                                                                        <select class="selectpicker">
                                                                            <option>Location</option>
                                                                            <option>Time</option>
                                                                        </select>
                                                                        <button class="form-control button-search"><i class="fa fa-search"></i></button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <p class="caption-text">
                                                        <a class="btn btn-theme btn-theme btn-theme-dark scroll-to" href="#" data-animation="flipInY" data-animation-delay="600">Popular Events</a><!--
                                                        --><a class="btn btn-theme btn-theme btn-theme-transparent-white" href="http://www.youtube.com/watch?v=O-zpOMYRi0w"  rel="prettyPhoto" data-animation="flipInY" data-animation-delay="900">Latest Events</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </section>
                    <!-- /SLIDER -->
                </div>

                <!-- Featured Event -->
                <section class="page-section light featured-line xs-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="section-title two-lines">
                                    <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex dark fa-stack-2x"></i><i class="fa fa-calendar fa-stack-1x"></i></span></span>
                                    <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner"><span class="theme-color"> Featured Event </span><small>Dont Miss The Event. PHP Conference In ISTANBUL</small></span>
                                </h1>
                            </div>
                            <div class="col-md-4">
                                <div class="countdown-wrapper countdown-featured">
                                    <div id="defaultCountdown2" class="defaultCountdown clearfix"></div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="btn btn-theme btn-details">Tickets &amp; Details <i class="fa fa-arrow-circle-left"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /Featured Event -->
                <!-- PAGE -->
                <section class="page-section">
                    <div class="container">

                        <div class="clear clearfix overflowed">
                            
                                <h2 class="theme-color" ><strong><span>Featured Events</span></strong></h2>
                            <div class="section-title pull-right" style="width: auto;">
                                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-star fa-stack-1x"></i></span></span>
                            </div>
                            <ul id="filtrable-events" class="filtrable clearfix">
                                <li class="all"><a href="#" data-filter="*">All</a></li>
                                <li class="festival current"><a href="#" data-filter=".festival">Festivals</a></li>
                                <li class="playground"><a href="#" data-filter=".playground">Occasions</a></li>
                                <li class="conferance"><a href="#" data-filter=".conference">Conferences</a></li>
                            </ul>
                        </div>

                        <div class="row thumbnails events vertical isotope isotope-items">

                            @forelse ($events as $event)                                
                                <div class="col-md-6 col-sm-6 isotope-item festival">
                                        <div class="thumbnail no-border no-padding">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="media">
                                                        <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                                        <img src="{{ asset('/images/'. $event->image ) }}" alt="">
                                                        <div class="caption hovered"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="caption">
                                                        <h3 class="caption-title"><a href="#">{{$event->name}}</a></h3>
                                                        <p class="caption-category"><i class="fa fa-file-text-o"></i> {{$event->date}} on Manhattan / New York</p>
                                                        <p class="caption-price">Tickets from R{{$event->amount}}</p>
                                                        <p class="caption-text">{{$event->description}} </p>
                                                        <p class="caption-more">
                                                            <a href="{{ url('event/'.$event->id) }}" class="btn btn-theme">Subscribe</a>
                                                            <a href="{{ url('event/'.$event->id) }}" class="btn btn-theme">Event Details</a>
                                                            {{-- 
                                                            <form method="POST" action="{{ url('subscribe') }}">
                                                                <input type="hidden" name="event_id" value="{{ $event->id }}">
                                                                {!! csrf_field() !!}
                                                                <button type="submit" class="btn btn-theme">
                                                                    Subscribe
                                                                </button>
                                                            </form> 
                                                            --}}

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                           @empty
                               no events
                           @endforelse

                            

                            
                        </div>

                        <div class="text-center margin-top">
                            <a data-animation="fadeInUp" data-animation-delay="100" href="#" class="btn btn-theme btn-theme-grey-dark btn-theme-md"><i class="fa fa-file-text-o"></i> See all events</a>
                        </div>

                    </div>
                </section>
                <!-- /PAGE -->


                <!-- PAGE -->
                <section class="page-section">
                    <div class="container">

                        <h1 class="section-title">
                            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-h-square fa-stack-1x"></i></span></span>
                            <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">Hosts <small> / Become a host</small></span>
                        </h1>

                        <div class=" thumbnails hotels">
                            <div class="carousel-slider">
                                <div class="owl-carousel slide-4">
                                    <div>
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                <div class="caption hovered">
                                                    <div class="caption-wrapper div-table">
                                                        <div class="caption-inner div-cell">
                                                            <p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3 class="caption-title"><a href="#">Hosts Name Here</a></h3>
                                                <div class="caption-rating rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>
                                                <p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                <div class="caption hovered">
                                                    <div class="caption-wrapper div-table">
                                                        <div class="caption-inner div-cell">
                                                            <p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3 class="caption-title"><a href="#">Hosts Name Here</a></h3>
                                                <div class="caption-rating rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>
                                                <p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                <div class="caption hovered">
                                                    <div class="caption-wrapper div-table">
                                                        <div class="caption-inner div-cell">
                                                            <p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3 class="caption-title"><a href="#">Hosts Name Here</a></h3>
                                                <div class="caption-rating rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>
                                                <p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                <div class="caption hovered">
                                                    <div class="caption-wrapper div-table">
                                                        <div class="caption-inner div-cell">
                                                            <p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3 class="caption-title"><a href="#">Hosts Name Here</a></h3>
                                                <div class="caption-rating rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>
                                                <p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                <div class="caption hovered">
                                                    <div class="caption-wrapper div-table">
                                                        <div class="caption-inner div-cell">
                                                            <p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3 class="caption-title"><a href="#">Hosts Name Here</a></h3>
                                                <div class="caption-rating rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>
                                                <p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                <div class="caption hovered">
                                                    <div class="caption-wrapper div-table">
                                                        <div class="caption-inner div-cell">
                                                            <p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3 class="caption-title"><a href="#">Hosts Name Here</a></h3>
                                                <div class="caption-rating rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>
                                                <p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <img src="assets/img/preview/hotel-1.jpg" alt="">
                                                <div class="caption hovered">
                                                    <div class="caption-wrapper div-table">
                                                        <div class="caption-inner div-cell">
                                                            <p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3 class="caption-title"><a href="#">Hosts Name Here</a></h3>
                                                <div class="caption-rating rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>
                                                <p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center margin-top">
                            <a data-animation="fadeInUp" data-animation-delay="100" href="#" class="btn btn-theme btn-theme-grey-dark btn-theme-md"><i class="fa fa-h-square"></i> See all hosts</a>
                        </div>

                    </div>
                </section>
                <!-- /PAGE -->


                <!-- PAGE -->
                <section class="page-section">
                        <div class="container">
    
                            <div class="clear clearfix overflowed">
                                
                                    <h2 class="theme-color" ><strong><span>Upcoming Events</span></strong></h2>
                                <div class="section-title pull-right" style="width: auto;">
                                    <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-star fa-stack-1x"></i></span></span>
                                </div>
                                <ul id="filtrable-events" class="filtrable clearfix">
                                    <li class="all"><a href="#" data-filter="*">All</a></li>
                                    <li class="festival current"><a href="#" data-filter=".festival">Festivals</a></li>
                                    <li class="playground"><a href="#" data-filter=".playground">Occasions</a></li>
                                    <li class="conferance"><a href="#" data-filter=".conference">Conferences</a></li>
                                </ul>
                            </div>
    
                            <div class="row thumbnails events vertical isotope isotope-items">
    
                                @forelse ($events as $event)                                
                                    <div class="col-md-6 col-sm-6 isotope-item festival">
                                            <div class="thumbnail no-border no-padding">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="media">
                                                            <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                                            <img src="{{ asset('/images/'. $event->image ) }}" alt="">
                                                            <div class="caption hovered"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="caption">
                                                            <h3 class="caption-title"><a href="#">{{$event->name}}</a></h3>
                                                            <p class="caption-category"><i class="fa fa-file-text-o"></i> {{$event->date}} on Manhattan / New York</p>
                                                            <p class="caption-price">Tickets from R{{$event->amount}}</p>
                                                            <p class="caption-text">{{$event->description}} </p>
                                                            <p class="caption-more">
                                                                <a href="{{ url('event/'.$event->id) }}" class="btn btn-theme">Subscribe</a>
                                                                {{-- 
                                                                <form method="POST" action="{{ url('subscribe') }}">
                                                                    <input type="hidden" name="event_id" value="{{ $event->id }}">
                                                                    {!! csrf_field() !!}
                                                                    <button type="submit" class="btn btn-theme">
                                                                        Subscribe
                                                                    </button>
                                                                </form> 
                                                                --}}
    
                                                            </p>
                                                            <p class="caption-more">
                                                                <a href="{{ url('event/'.$event->id) }}" class="btn btn-theme">Event Details</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                               @empty
                                   no events
                               @endforelse
    
                                
    
                                
                            </div>
    
                            <div class="text-center margin-top">
                                <a data-animation="fadeInUp" data-animation-delay="100" href="#" class="btn btn-theme btn-theme-grey-dark btn-theme-md"><i class="fa fa-file-text-o"></i> See all events</a>
                            </div>
    
                        </div>
                    </section>
                    <!-- /PAGE -->
    
    

                <!-- PAGE -->
                <section class="page-section color">
                    <div class="container">
                        <h1 class="section-title">
                            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-comments-o fa-stack-1x"></i></span></span>
                            <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">Testimonials <small> / See What People Say About Us</small></span>
                        </h1>

                        <!-- Testimonials -->
                        <div id="testimonials" class="owl-carousel testimonials" data-animation="fadeInUp" data-animation-delay="100">

                            <div class="media testimonial">
                                <div class="media-object pull-left" data-animation="flipInY" data-animation-delay="300">
                                    <div class="rehex testimonial-avatar">
                                        <div class="rehex-deg">
                                            <div class="rehex-deg">
                                                <div class="rehex-inner">
                                                    <img class="img-responsive" src="assets/img/preview/avatar-1.jpg" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec
                                        cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper
                                        tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis
                                        in feugiat mollis, libero eros</p>
                                    <h4 class="media-heading">by jThemes Studio</h4>
                                </div>
                            </div>

                            <div class="media testimonial">
                                <div class="media-object pull-left" data-animation="flipInY" data-animation-delay="300">
                                    <div class="rehex testimonial-avatar">
                                        <div class="rehex-deg">
                                            <div class="rehex-deg">
                                                <div class="rehex-inner">
                                                    <img class="img-responsive" src="assets/img/preview/avatar-2.jpg" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec
                                        cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper
                                        tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis
                                        in feugiat mollis, libero eros</p>
                                    <h4 class="media-heading">by jThemes Studio</h4>
                                </div>
                            </div>

                            <div class="media testimonial">
                                <div class="media-object pull-left" data-animation="flipInY" data-animation-delay="300">
                                    <div class="rehex testimonial-avatar">
                                        <div class="rehex-deg">
                                            <div class="rehex-deg">
                                                <div class="rehex-inner">
                                                    <img class="img-responsive" src="assets/img/preview/avatar-3.jpg" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec
                                        cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper
                                        tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis
                                        in feugiat mollis, libero eros</p>
                                    <h4 class="media-heading">by jThemes Studio</h4>
                                </div>
                            </div>

                        </div>
                        <!-- Testimonials -->

                    </div>
                </section>
                <!-- /PAGE -->


                <!-- PAGE SPONSORS -->
                <section class="page-section" id="sponsors">
                    <div class="container">
                        <h1 class="section-title">
                            <span data-animation="flipInY" data-animation-delay="100" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-thumbs-up fa-stack-1x"></i></span></span>
                            <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">Event Sponsors <small> / dont forget it</small></span>
                        </h1>
                        <div class="partners-carousel" data-animation="fadeInUp" data-animation-delay="300">
                            <div class="owl-carousel">
                                <div><a href="#"><img src="assets/img/partner/light/partner-1.png" alt=""/></a></div>
                                <div><a href="#"><img src="assets/img/partner/light/partner-2.png" alt=""/></a></div>
                                <div><a href="#"><img src="assets/img/partner/light/partner-3.png" alt=""/></a></div>
                                <div><a href="#"><img src="assets/img/partner/light/partner-4.png" alt=""/></a></div>
                                <div><a href="#"><img src="assets/img/partner/light/partner-5.png" alt=""/></a></div>
                                <div><a href="#"><img src="assets/img/partner/light/partner-6.png" alt=""/></a></div>
                                <div><a href="#"><img src="assets/img/partner/light/partner-1.png" alt=""/></a></div>
                                <div><a href="#"><img src="assets/img/partner/light/partner-2.png" alt=""/></a></div>
                                <div><a href="#"><img src="assets/img/partner/light/partner-3.png" alt=""/></a></div>
                                <div><a href="#"><img src="assets/img/partner/light/partner-4.png" alt=""/></a></div>
                                <div><a href="#"><img src="assets/img/partner/light/partner-5.png" alt=""/></a></div>
                                <div><a href="#"><img src="assets/img/partner/light/partner-6.png" alt=""/></a></div>
                            </div>
                        </div>
                        <div class="text-center margin-top">
                            <a data-animation="flipInY" data-animation-delay="500" href="#" class="btn btn-theme btn-theme-grey-dark btn-theme-md"><i class="fa fa-thumbs-up"></i> Become a sponsor</a>
                        </div>
                    </div>
                </section>
                
                <section class="page-section light create-new-event">
                    <div class="container text-center">
                        <h1 class="section-title">Create Your Own New Event</h1>
                        <p>Bring people together, or turn your passion into a business. Eventbrite gives you everything you need to host your best event yet.</p>
                        <div><a href="#" class="btn btn-theme btn-theme-md">SUBMIT EVENT</a></div>
                    </div>
                </section>
                <!-- /PAGE -->

                <!-- PAGE LOCATION -->
                <section class="page-section" id="location">
                    <div class="container full-width gmap-background">

                        <div class="container">
                            <div class="on-gmap color">
                                <h1 class="section-title">
                                    <span data-animation="flipInY" data-animation-delay="100" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-map-marker fa-stack-1x"></i></span></span>
                                    <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">Event Location</span>
                                </h1>
                                <p data-animation="fadeInUp" data-animation-delay="200" class="text-uppercase">Apple Store SOHO‎ <br/>
                                    103 Prince St Pretoria, <br/>
                                    Pr 10012, South Africa <br/>
                                    +1 212-226-3126</p>
                                <p><a href="mailto:youremail@domain.com">hello@imevent.com</a></p>
                                <a href="#" class="btn btn-theme"
                                   data-animation="flipInY" data-animation-delay="300">Get Direction <i class="fa fa-arrow-circle-left"></i></a>
                            </div>
                        </div>

                        <!-- Google map -->
                        <div class="google-map">
                            <div id="map-canvas"></div>
                        </div>
                        <!-- /Google map -->

                    </div>
                </section>
                <!-- /PAGE LOCATION -->


            </div>
            <!-- /Content area -->
@endsection