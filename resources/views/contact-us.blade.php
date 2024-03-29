@extends('header.header')
    @section('content')
            <!-- Content area -->
            <div class="content-area">

                <section class="page-section image breadcrumbs overlay">
                    <div class="container">
                        <h1>Contacts</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Pages</a></li>
                            <li class="active">Contact us</li>
                        </ul>
                    </div>
                </section>


                <!-- PAGE -->
                <section class="page-section with-sidebar sidebar-right first-section">
                    <div class="container">

                        <!-- Content -->
                        <section id="content" class="content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h1 class="section-title">
                                        <span data-animation="flipInY" data-animation-delay="100" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                                        <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">Contact Us <small>/ lorem ipsum</small></span>
                                    </h1>
                                    <p>Pellentesque rutrum at sapien at sollicitudin. Nam quis orci at orci fermentum mollis maximus at justo. Duis elit felis, congue egestas tristique quis, dictum vitae massa. Suspendisse at justo enim.</p>
                                    <p data-animation="fadeInUp" data-animation-delay="200" class="text-uppercase">Apple Store SOHO‎ <br/>
                                        103 Prince St New York, <br/>
                                        NY 10012, United States <br/>
                                        +1 212-226-3126</p>
                                    <p><a href="mailto:youremail@domain.com">hello@imevent.com</a></p>
                                </div>
                                <div class="col-sm-6">
                                    <!-- Google map -->
                                    <div class="google-map">
                                        <div id="map-canvas"></div>
                                    </div>
                                    <!-- /Google map -->
                                </div>
                            </div>
                        </section>
                        <!-- /Content -->

                    </div>
                </section>
                <!-- /PAGE -->

                <!-- PAGE CONTACT -->
                <section class="page-section color">
                    <div class="container">

                        <!-- Contact form -->
                        <form name="af-form" method="post" action="#contact" class="af-form row" id="af-form">

                            <div class="col-sm-12 af-outer af-required">
                                <div class="form-group af-inner">
                                    <input
                                        type="text" name="name" id="name" placeholder="Type Your Name..." value="" size="30"
                                        data-toggle="tooltip" title="Name is required"
                                        class="form-control placeholder"/>
                                </div>
                            </div>

                            <div class="col-sm-12 af-outer af-required">
                                <div class="form-group af-inner">
                                    <input
                                        type="text" name="email" id="email" placeholder="Type Your Email..." value="" size="30"
                                        data-toggle="tooltip" title="Email is required"
                                        class="form-control placeholder"/>
                                </div>
                            </div>

                            <div class="col-sm-12 af-outer af-required">
                                <div class="form-group af-inner">
                                    <textarea
                                        name="message" id="input-message" placeholder="Type Your Message..." rows="4" cols="50"
                                        data-toggle="tooltip" title="Message is required"
                                        class="form-control placeholder"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-12 af-outer af-required text-center">
                                <div class="form-group af-inner">
                                    <input type="submit" name="submit" class="form-button form-button-submit btn btn-theme btn-theme-lg btn-theme-transparent" id="submit_btn" value="Send message" />
                                </div>
                            </div>

                        </form>
                        <!-- /Contact form -->

                    </div>
                </section>
                <!-- /PAGE CONTACT -->

            </div>
            <!-- /Content area -->
@endsection