@extends('header.header')

    @section('content')
 <!-- Content area -->
 <div class="content-area">

    <section class="page-section image breadcrumbs overlay">
        <div class="container">
            <h1>{{$event->name}}</h1>
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Events</a></li>
                <li class="active">{{$event->name}}</li>
            </ul>
        </div>
    </section>

<!-- PAGE -->
<section class="page-section with-sidebar sidebar-right first-section light">
    <div class="container">

        <!-- Content -->
        <section id="content" class="content col-sm-12 col-md-8 col-lg-9">

            <div class="owl-carousel img-carousel">
                <div class="item">
                    <div class="img-responsive"><img class="img-responsive" src="{{ URL::asset('/images/'. $event->image ) }}" alt=""/></div>
                </div>
                <div class="item"><img class="img-responsive" src="{{ URL::asset('assets/img/preview/img-slider-1.jpg') }}" alt=""/></div>
                <div class="item"><img class="img-responsive" src="{{ URL::asset('assets/img/preview/img-slider-1.jpg') }}" alt=""/></div>
                <div class="item"><img class="img-responsive" src="{{ URL::asset('assets/img/preview/img-slider-1.jpg') }}" alt=""/></div>
            </div>

            <!-- -->
            <hr class="page-divider transparent half"/>
            <!-- -->

            <h1 class="section-title">
                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-star fa-stack-1x"></i></span></span>
                <span class="title-inner">What's this event about <small>/ {{$event->date}}</small></span>
            </h1>
            <p class="font_roboto font_size16">{{$event->description}}</p>
            
            @if ($event ?? '')
               
                @if ( auth::user()->wallet >= $event->amount)
                    <form method="POST" action="{{ url('subscribe') }}">
                        <input type="hidden" name="event_id" value="{{ $event->id }}">
                        <input type="hidden" name="user_id" value="{{ $event->user_id }}">
                        <input type="hidden" name="amount" value="{{ $event->amount }}">

                        {!! csrf_field() !!}
                        <button type="submit" class="btn btn-theme btn-theme-xl scroll-to">
                            Subscribe <i class="fa fa-arrow-circle-right"></i>
                        </button>
                    </form> <br>
                    <p class="section-title">                        
                        Your Current Wallet Ballance: R{{ auth::user()->wallet }}
                    </p>
                @else
                    {{ 'no' }}
                @endif

            @else
                something went wrong try again
            @endif

            <!-- -->
            <hr class="page-divider transparent"/>
            <!-- -->

            <!-- -->
            <hr class="page-divider transparent half2"/>
            <!-- -->

            <h1 class="section-title">
                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-thumbs-up fa-stack-1x"></i></span></span>
                <span class="title-inner">Event Sponsors <small> / dont forget it</small></span>
            </h1>
            <div class="partners-carousel-2">
                <div class="owl-carousel">
                    <div><a href="#"><img src="{{ URL::asset('assets/img/partner/light/partner-1.png') }}" alt=""/></a></div>
                    <div><a href="#"><img src="{{ URL::asset('assets/img/partner/light/partner-2.png') }}" alt=""/></a></div>
                    <div><a href="#"><img src="{{ URL::asset('assets/img/partner/light/partner-3.png') }}" alt=""/></a></div>
                    <div><a href="#"><img src="{{ URL::asset('assets/img/partner/light/partner-4.png') }}" alt=""/></a></div>
                    <div><a href="#"><img src="{{ URL::asset('assets/img/partner/light/partner-5.png') }}" alt=""/></a></div>
                    <div><a href="#"><img src="{{ URL::asset('assets/img/partner/light/partner-6.png') }}" alt=""/></a></div>
                    <div><a href="#"><img src="{{ URL::asset('assets/img/partner/light/partner-1.png') }}" alt=""/></a></div>
                    <div><a href="#"><img src="{{ URL::asset('assets/img/partner/light/partner-2.png') }}" alt=""/></a></div>
                    <div><a href="#"><img src="{{ URL::asset('assets/img/partner/light/partner-3.png') }}" alt=""/></a></div>
                    <div><a href="#"><img src="{{ URL::asset('assets/img/partner/light/partner-4.png') }}" alt=""/></a></div>
                    <div><a href="#"><img src="{{ URL::asset('assets/img/partner/light/partner-5.png') }}" alt=""/></a></div>
                    <div><a href="#"><img src="{{ URL::asset('assets/img/partner/light/partner-6.png') }}" alt=""/></a></div>
                </div>
            </div>
            <div class="text-center margin-top">
            <a href="{{ url('register') }}" class="btn btn-theme"><i class="fa fa-thumbs-up"></i> Become a sponsor</a>
            </div>

            

            <!-- -->
            <hr class="page-divider line"/>
            <!-- -->

            <h1 class="section-title clearfix">
                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-user fa-stack-1x"></i></span></span>
                <span class="title-inner">Event Package list <small> / perfect price for an event</small></span>
            </h1>
            <div class="row price-tables">
                <div class="col-xsp-6 col-sm-6 col-md-6 col-lg-4">
                    <div class="price-table">
                        <div class="price-table-header">
                            <div class="price-label">
                                <h2 class="price-label-title">Main Sponsor</h2>
                            </div>
                            <div class="price-value">
                                <span class="price-number">R</span><span class="price-unit">{{$event->amount}}</span><span class="price-per"></span>
                            </div>
                        </div>
                        <div class="price-table-rows">
                            <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Lorem ipsum dolor sit amet</div>
                            <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Consectetur adipiscing elit</div>
                            <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Sed vitae diam metus</div>
                            <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Donec cursus magna</div>
                            <div class="price-table-row-bottom">
                                <a class="btn btn-theme scroll-to" href="#">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xsp-6 col-sm-6 col-md-6 col-lg-4">
                    <div class="price-table featured">
                        <div class="price-table-header">
                            <div class="price-label">
                                <h2 class="price-label-title">Sponsor a Bar</h2>
                            </div>
                            <div class="price-value">
                                <span class="price-number">R</span><span class="price-unit">{{$event->amount}}</span><span class="price-per"></span>
                            </div>
                        </div>
                        <div class="price-table-rows">
                            <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Lorem ipsum dolor sit amet</div>
                            <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Consectetur adipiscing elit</div>
                            <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Sed vitae diam metus</div>
                            <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Donec cursus magna</div>
                            <div class="price-table-row-bottom">
                                <a class="btn btn-theme scroll-to" href="#">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xsp-6 col-sm-6 col-md-6 col-lg-4">
                    <div class="price-table">
                        <div class="price-table-header">
                            <div class="price-label">
                                <h2 class="price-label-title">Sponsor a Stage</h2>
                            </div>
                            <div class="price-value">
                                <span class="price-number">R</span><span class="price-unit">{{$event->amount}}</span><span class="price-per"></span>
                            </div>
                        </div>
                        <div class="price-table-rows">
                            <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Lorem ipsum dolor sit amet</div>
                            <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Consectetur adipiscing elit</div>
                            <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Sed vitae diam metus</div>
                            <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Donec cursus magna</div>
                            <div class="price-table-row-bottom">
                                <a class="btn btn-theme scroll-to" href="#">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!-- /Content -->

        <hr class="page-divider transparent visible-xs"/>

        <!-- Sidebar -->
        <aside id="sidebar" class="sidebar col-sm-12 col-md-4 col-lg-3">

            {{-- <div class="widget google-map-widget">
                <!-- Google map -->
                <div class="google-map">
                    <div id="map-canvas"></div>
                </div>
                <!-- /Google map -->
                <a href="#" class="link"><i class="fa fa-map-marker"></i> Go to LOCATION</a>
            </div> --}}

            <div class="widget">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    When & Where
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <ul>
                                    <li><a href="#">NYC - Financial Freedom Investor</a></li>
                                    <li>Madison Ave</li>
                                    <li>New York, NY 10010</li>
                                    <li>Thursday, January 8, 2015</li>
                                    <li>from 6:30 PM to 8:30 PM (EST)</li>
                                </ul>
                                <a href="#"><i class="fa fa-calendar"></i> Add to My Calendar</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Organizer
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis <a href="#">more...</a></p>
                                <ul>
                                    <li><i class="fa fa-facebook"></i> facebook.com/imorganiser</li>
                                    <li><i class="fa fa-twitter"></i> @imorganiser</li>
                                    <li><i class="fa fa-globe"></i> http://www.organiserweb.com</li>
                                </ul>
                                <a href="#" class="btn btn-theme btn-theme-grey-dark btn-theme-md">Send Message <i class="fa fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </aside>
        <!-- /Sidebar -->

    </div>
</section>
<!-- /PAGE -->


</div>
<!-- /Content area -->
    @endsection

