<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-TileColor" content="#0061da">
		<meta name="theme-color" content="#1643a3">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

		<!-- Title -->
		<title>Event Sponsors - Manage your Events.</title>
		<link rel="stylesheet" href="dashboard\assets\fonts\fonts\font-awesome.min.css">

		<!-- Sidemenu Css -->
		<link href="dashboard\assets\plugins\fullside-menu\css\style.css" rel="stylesheet">
		<link href="dashboard\assets\plugins\fullside-menu\waves.min.css" rel="stylesheet">

		<!-- Dashboard Css -->
		<link href="dashboard\assets\css\dashboard.css" rel="stylesheet">

		<!-- Morris.js Charts Plugin -->
		<link href="dashboard\assets\plugins\morris\morris.css" rel="stylesheet">

		<!-- Custom scroll bar css-->
		<link href="dashboard\assets\plugins\scroll-bar\jquery.mCustomScrollbar.css" rel="stylesheet">

		<!---Font icons-->
		<link href="dashboard\assets\css\icons.css" rel="stylesheet">
	</head>
	<body class="n">
		<div id="global-loader"></div>
		<div class="page">
			<div class="page-main">
				<div class="app-header1 header py-1 d-flex">
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand" href="{{ url('/') }}">
								<img src="assets\img\logo.jpeg" class="header-brand-img" alt="Company Name">
							</a>
							<div class="menu-toggle-button">
								<a class="nav-link wave-effect" href="#" id="sidebarCollapse">
									<span class="fa fa-bars"></span>
								</a>
							</div>
							<div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
								<div class="p-2">
									<form class="input-icon ">
										<div class="input-icon-addon">
											<i class="fe fe-search"></i>
										</div>
										<input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
									</form>
								</div>

								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon full-screen-link nav-link-bg">
										<i class="fa fa-expand" id="fullscreen-button"></i>
									</a>
								</div>

								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fa fa-bell-o"></i>
										<span class="nav-unread bg-warning"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-thumbs-o-up"></i>
											</div>
											<div>
												<strong>Someone subscribed to your event.</strong>
												<div class="small text-muted">3 hours ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-commenting-o"></i>
											</div>
											<div>
												<strong> 3 New subscribers</strong>
												<div class="small text-muted">5  hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-cogs"></i>
											</div>
											<div>
												<strong> Server Rebooted.</strong>
												<div class="small text-muted">45 mintues ago</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all Notification</a>
									</div>
								</div>
								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon text-center" data-toggle="dropdown">
										<i class="icon icon-speech"></i>
										{{-- <span class=" nav-unread badge badge-info badge-pill">2</span> --}}
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a href="#" class="dropdown-item text-center">2 New Messages</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item d-flex pb-3">
											<span class="avatar brround mr-3 align-self-center cover-image" data-image-src="dashboard/assets/images/faces/male/41.jpeg"></span>
											<div>
												<strong>Madeleine</strong> Hey! there I' am available....
												<div class="small text-muted">3 hours ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<span class="avatar brround mr-3 align-self-center cover-image" data-image-src="dashboard/assets/images/faces/female/1.jpeg"></span>
											<div>
												<strong>Anthony</strong> New product Launching...
												<div class="small text-muted">5  hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<span class="avatar brround mr-3 align-self-center cover-image" data-image-src="dashboard/assets/images/faces/female/18.jpeg"></span>
											<div>
												<strong>Olivia</strong> New Schedule Realease......
												<div class="small text-muted">45 mintues ago</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">See all Messages</a>
									</div>
								</div>
								<div class="dropdown d-none d-md-flex ">
									<a class="nav-link icon " data-toggle="dropdown">
										<i class="fe fe-grid floating"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<ul class="drop-icon-wrap p-1">
											<li>
												<a href="mailto:{{ auth()->user()->email }}" class="drop-icon-item">
													<i class="fe fe-mail text-dark"></i>
													<span class="block"> E-mail</span>
												</a>
											</li>
											{{-- <li>
												<a href="" class="drop-icon-item">
													<i class="fe fe-calendar text-dark"></i>
													<span class="block">calendar</span>
												</a>
											</li> --}}
											<li>
												<a href="https://maps.google.com" class="drop-icon-item" target="_blank">
													<i class="fe fe-map-pin text-dark"></i>
													<span class="block">map</span>
												</a>
											</li>
											{{-- <li>
												<a href="cart.html" class="drop-icon-item">
													<i class="fe fe-shopping-cart text-dark"></i>
													<span class="block">Cart</span>
												</a>
											</li> --}}
											{{-- <li>
												<a href="chat.html" class="drop-icon-item">
													<i class="fe fe-message-square text-dark"></i>
													<span class="block">chat</span>
												</a>
											</li> --}}
											<li>
												<a href="{{ url('profile') }}" class="drop-icon-item">
													<i class="fe fe-phone-outgoing text-dark"></i>
													<span class="block">contact</span>
												</a>
											</li>
										</ul>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all</a>
									</div>
								</div>
								
								<div cl="dropdown text-center selector">
									<a href="#" class="nav-link leading-none" data-toggle="dropdown">
										<span class="avatar avatar-sm brround cover-image" data-image-src="dashboard\assets/images/faces/female/25.jpg"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
										<div class="text-center">
											<a href="#" class="dropdown-item text-center font-weight-sembold user" data-toggle="dropdown"><strong>{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</strong></a>
											<span class="text-center user-semi-title text-dark">User Title</span>
											<div class="dropdown-divider"></div>
										</div>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-account-outline"></i> Profile
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon  mdi mdi-settings"></i> Settings
										</a>
										<a class="dropdown-item" href="#">
											<span class="float-right"><span class="badge badge-primary">6</span></span>
											<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
										</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
										</a>
										<a class="dropdown-item" href="login.html">
											<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wrapper">
					<!-- Sidebar Holder -->
					@if ((Auth::user()->user_type)  == 'host')	   
					<nav id="sidebar" class="nav-sidebar">
							<ul class="list-unstyled components" id="accordion">
								<div class="user-profile">
									<div class="dropdown user-pro-body">
										<div><img src="{{ asset('/images/'. auth::user()->avatar ) }}" alt="user-img" class="img-circle"></div>
										<div class="mb-2"><a href="#" class="" data-toggle="" aria-haspopup="true" aria-expanded="false"> <span class="font-weight-semibold">Hi</span> <span class="text-uppercase font-weight-semibold">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</span>  </a>
										<br><span class="text-gray">Your Wallet: R{{ auth::user()->wallet }}</span>
										</div>
									</div>
								</div>
	
								<li class="">
									<a href="#homeSubmenu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
										<i class="fa fa-desktop mr-2"></i> Organizer
									</a>
									<ul class="collapse list-unstyled" id="homeSubmenu" data-parent="#accordion">
									<li><a href="{{ url('create-events') }}">List an Event</a></li>
									<li><a href="{{ url('dash') }}">View Your Events</a></li>
									<li><a href="{{ url('boost-featured') }}">Boost Your Event on Featured Events</a></li>
									<li><a href="{{ url('boost-social') }}">Boost Your Event on Social Media</a></li>
									</ul>
								</li>
								<li class="">
									<a href="#Apps" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
										<i class="fa fa-snowflake-o mr-2"></i> Account
									</a>
									<ul class="collapse list-unstyled" id="Apps" data-parent="#accordion">
										<li>
										<a href="{{ url('profile') }}">Profile</a>
										</li>
										<li>
											<a href="{{ url('edit-profile') }}">Edit Profile</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#pageSubmenu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false"><i class="fa fa-area-chart mr-2"></i>Wallet/Payment Methods</a>
									<ul class="collapse list-unstyled" id="pageSubmenu" data-parent="#accordion">
										<li>
										<a href="{{ url('wallet') }}">Add to Wallet </a>
										</li>
										<li>
											<a href="#">Add Stripe details</a>
										</li>									
										<li>
											<a href="#">Add Paypal details</a>
										</li>
									</ul>
								</li>
								
								<li class="">
									<a href="#Submenu6" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
										<i class="fa fa-shopping-cart mr-2"></i> Log Out
									</a>
									<ul class="collapse list-unstyled" id="Submenu6" data-parent="#accordion">
										<li>
										<a href="{{ url('logout')}}">log out</a>
	
										</li>
									</ul>
								</li>
								</ul>
						</nav>
					@else 
					<nav id="sidebar" class="nav-sidebar">
							<ul class="list-unstyled components" id="accordion">
								<div class="user-profile">
									<div class="dropdown user-pro-body">
										<div><img src="dashboard\assets\images\faces\female\25.jpeg" alt="user-img" class="img-circle"></div>
										<div class="mb-2"><a href="#" class="" data-toggle="" aria-haspopup="true" aria-expanded="false"> <span class="font-weight-semibold">Hi</span> <span class="text-uppercase font-weight-semibold">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</span>  </a>
										<br><span class="text-gray">Your Wallet: R{{ auth::user()->wallet }}</span>
										</div>
									</div>
								</div>
	
								<li class="">
									<a href="#homeSubmenu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
										<i class="fa fa-desktop mr-2"></i> Organizer
									</a>
									<ul class="collapse list-unstyled" id="homeSubmenu" data-parent="#accordion">
									<li><a href="{{ url('dash') }}">View Your Events</a></li>
									<li><a href="{{ url('purchase-sponsorship') }}">Purchase Sponsorship Package</a></li>
									<li><a href="{{ url('extras') }}">Purchase Extras(freebies)</a></li>									
									<li><a href="{{ url('send-artworks') }}">Send Artworks for sponsorship</a></li>
									</ul>
								</li>
								<li class="">
									<a href="#Apps" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
										<i class="fa fa-snowflake-o mr-2"></i> Account
									</a>
									<ul class="collapse list-unstyled" id="Apps" data-parent="#accordion">
										<li>
										<a href="{{ url('profile') }}">Profile</a>
										</li>
										<li>
											<a href="{{ url('edit-profile') }}">Edit Profile</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#pageSubmenu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false"><i class="fa fa-area-chart mr-2"></i>Wallet/Payment Methods</a>
									<ul class="collapse list-unstyled" id="pageSubmenu" data-parent="#accordion">
										<li>
										<a href="{{ url('wallet') }}">Add to Wallet </a>
										</li>
										<li>
											<a href="#">Add Stripe details</a>
										</li>									
										<li>
											<a href="#">Add Paypal details</a>
										</li>
									</ul>
								</li>
								
								<li class="">
									<a href="#Submenu6" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
										<i class="fa fa-shopping-cart mr-2"></i> Log Out
									</a>
									<ul class="collapse list-unstyled" id="Submenu6" data-parent="#accordion">
										<li>
										<a href="{{ url('logout')}}">log out</a>
	
										</li>
									</ul>
								</li>
								</ul>
						</nav>
					@endif
					

					{{-- Start of Content --}}

					@yield('content')

					{{-- End of Content --}}
				
				
				</div>
			</div>

			<!--footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
							Copyright © 2018 <a href="#">Mink-Strings</a>. Designed by <a href="#">Gee</a> All rights reserved.
						</div>
					</div>
				</div>
			</footer>
			<!-- End Footer-->
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

		<!-- Dashboard Core -->
		<script src="dashboard\assets\js\vendors\jquery-3.2.1.min.js"></script>
		<script src="dashboard\assets\js\vendors\bootstrap.bundle.min.js"></script>
		<script src="dashboard\assets\js\vendors\jquery.sparkline.min.js"></script>
		<script src="dashboard\assets\js\vendors\selectize.min.js"></script>
		<script src="dashboard\assets\js\vendors\jquery.tablesorter.min.js"></script>
		<script src="dashboard\assets\js\vendors\circle-progress.min.js"></script>
		<script src="dashboard\assets\plugins\rating\jquery.rating-stars.js"></script>

		<!-- Fullside-menu Js-->
		<script src="dashboard\assets\plugins\fullside-menu\jquery.slimscroll.min.js"></script>
		<script src="dashboard\assets\plugins\fullside-menu\waves.min.js"></script>

		<!-- Dashboard Core -->
		<script src="dashboard\assets\js\index1.js"></script>

		<!--Morris.js Charts Plugin -->
		<script src="dashboard\assets\plugins\morris\raphael-min.js"></script>
		<script src="dashboard\assets\plugins\morris\morris.js"></script>

		<!-- Custom scroll bar Js-->
		<script src="dashboard\assets\plugins\scroll-bar\jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- Custom Js-->
		<script src="dashboard\assets\js\custom.js"></script>

	</body>
</html>