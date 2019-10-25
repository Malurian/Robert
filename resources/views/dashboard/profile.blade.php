<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="msapplication-TileColor" content="#0061da">
		<meta name="theme-color" content="#1643a3">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

		<!-- Title -->
		<title>adminor – Clean & Modern Responsive Bootstrap 4 admin dashboard HTML5 Template.</title>
		<link rel="stylesheet" href="dashboard\assets\fonts\fonts\font-awesome.min.css">

		<!-- Font-family -->
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

		<!-- Sidemenu Css -->
		<link href="dashboard\assets\plugins\fullside-menu\css\style.css" rel="stylesheet">
		<link href="dashboard\assets\plugins\fullside-menu\waves.min.css" rel="stylesheet">

		<!-- Dashboard Css -->
		<link href="dashboard\assets\css\dashboard.css" rel="stylesheet">

		<!-- c3.js Charts Plugin -->
		<link href="dashboard\assets\plugins\charts-c3\c3-chart.css" rel="stylesheet">

		<!-- Custom scroll bar css-->
		<link href="dashboard\assets\plugins\scroll-bar\jquery.mCustomScrollbar.css" rel="stylesheet">

		<!---Font icons-->
		<link href="dashboard\assets\css\icons.css" rel="stylesheet">

	</head>
	<body class="">
		<div id="global-loader"></div>
		<div class="page">
			<div class="page-main">
				<div class="app-header1 header py-1 d-flex">
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand" href="index-1.html">
								<img src="dashboard\assets\images\brand\logo.png" class="header-brand-img" alt="adminor logo">
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
												<strong>Someone likes our posts.</strong>
												<div class="small text-muted">3 hours ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-commenting-o"></i>
											</div>
											<div>
												<strong> 3 New Comments</strong>
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
										<span class=" nav-unread badge badge-info badge-pill">2</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a href="#" class="dropdown-item text-center">2 New Messages</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item d-flex pb-3">
											<span class="avatar brround mr-3 align-self-center cover-image" data-image-src="dashboard\assets/images/faces/male/41.jpg"></span>
											<div>
												<strong>Madeleine</strong> Hey! there I' am available....
												<div class="small text-muted">3 hours ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<span class="avatar brround mr-3 align-self-center cover-image" data-image-src="dashboard\assets/images/faces/female/1.jpg"></span>
											<div>
												<strong>Anthony</strong> New product Launching...
												<div class="small text-muted">5  hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<span class="avatar brround mr-3 align-self-center cover-image" data-image-src="dashboard\assets/images/faces/female/18.jpg"></span>
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
												<a href="email.html" class="drop-icon-item">
													<i class="fe fe-mail text-dark"></i>
													<span class="block"> E-mail</span>
												</a>
											</li>
											<li>
												<a href="calendar2.html" class="drop-icon-item">
													<i class="fe fe-calendar text-dark"></i>
													<span class="block">calendar</span>
												</a>
											</li>
											<li>
												<a href="maps.html" class="drop-icon-item">
													<i class="fe fe-map-pin text-dark"></i>
													<span class="block">map</span>
												</a>
											</li>
											<li>
												<a href="cart.html" class="drop-icon-item">
													<i class="fe fe-shopping-cart text-dark"></i>
													<span class="block">Cart</span>
												</a>
											</li>
											<li>
												<a href="chat.html" class="drop-icon-item">
													<i class="fe fe-message-square text-dark"></i>
													<span class="block">chat</span>
												</a>
											</li>
											<li>
												<a href="profile.html" class="drop-icon-item">
													<i class="fe fe-phone-outgoing text-dark"></i>
													<span class="block">contact</span>
												</a>
											</li>
										</ul>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all</a>
									</div>
								</div>
								<div class="dropdown text-center selector">
									<a href="#" class="nav-link leading-none" data-toggle="dropdown">
										<span class="avatar avatar-sm brround cover-image" data-image-src="dashboard\assets/images/faces/female/25.jpg"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
										<div class="text-center">
											<a href="#" class="dropdown-item text-center font-weight-sembold user" data-toggle="dropdown">Joyce Stewart</a>
											<span class="text-center user-semi-title text-dark">web designer</span>
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
					<nav id="sidebar" class="nav-sidebar">
						<ul class="list-unstyled components" id="accordion">
							<div class="user-profile">
								<div class="dropdown user-pro-body">
									<div><img src="dashboard\assets\images\faces\female\25.jpeg" alt="user-img" class="img-circle"></div>
									<div class="mb-2"><a href="#" class="" data-toggle="" aria-haspopup="true" aria-expanded="false"> <span class="font-weight-semibold">User Name</span>  </a>
									<br><span class="text-gray">User Title</span>
									</div>
								</div>
							</div>

							<li class="">
								<a href="#homeSubmenu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
									<i class="fa fa-desktop mr-2"></i> Organizer
								</a>
								<ul class="collapse list-unstyled" id="homeSubmenu" data-parent="#accordion">
                                <li><a href="{{ url('create-events') }}">Create Event</a></li>
                                <li><a href="{{ url('dash') }}">View Events</a></li>
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
								<a href="#pageSubmenu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false"><i class="fa fa-area-chart mr-2"></i> Payment Methods</a>
								<ul class="collapse list-unstyled" id="pageSubmenu" data-parent="#accordion">
									<li>
										<a href="#">Paypal </a>
									</li>
									<li>
										<a href="#">Stripe</a>
									</li>
								</ul>
							</li>
							
							<li class="">
								<a href="#Submenu6" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
									<i class="fa fa-shopping-cart mr-2"></i> Log Out
								</a>
								<ul class="collapse list-unstyled" id="Submenu6" data-parent="#accordion">
									<li>
										<a href="#log-out">log out</a>
									</li>
								</ul>
							</li>
							</ul>
					</nav>
					<div class=" content-area">
						<div class="page-header">
							<h4 class="page-title">Profile</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Profile</li>
							</ol>
						</div>
						<div class="row" id="user-profile">
						    <div class="col-lg-4 col-md-12 col-sm-12 col-xl-3">
								<div class="card clearfix">
									<div class="card-header">
										 <h2 class="card-title">Profile</h2>
									</div>
								    <div class="card-body p-0">
										<div class="card-body bg-primary text-white">
											<img src="dashboard\assets\images\faces\male\16.jpeg" alt="" class="profile-img img-responsive center-block">
											<a href="editprofile.html" class="profile-image">
												<span class="fa fa-pencil" aria-hidden="true"></span>
											</a>
											<div class="profile-label mt-3">
												<span>Christopher</span>
											</div>

											<div class="profile-stars">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												<span>Super User</span>
											</div>

											<div class="profile-since">
												Member since: Jan 2012
											</div>
										</div>
                                        <div class="border-bottom align-items-center">
											<div class="card-body">
												<div class="profile-details">
													<div class="list-group list-group-transparent mb-0 mail-inbox">
														<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
															<span class="icon mr-3"><i class="fa fa-truck"></i></span>Orders: <span>456</span>
														</a>
														<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
															<span class="icon mr-3"><i class="fa fa-comment"></i></span>Posts: <span>828</span>
														</a>
														<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
															<span class="icon mr-3"><i class="fa fa-tasks"></i></span>Tasks done: <span>1024</span>z
														</a>
													</div>
												</div>
											</div>
										</div>
                                        <div class="p-3">
											<div class="profile-message-btn center-block text-center">
												<a href="#" class="btn btn-secondary btn-block">
													<i class="fa fa-envelope"></i> Send message
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										 <h2 class="card-title">Contact &amp; Personal Info</h2>
									</div>
									<div class="card-body">
										<div class="media-list">
											<div class="media mt-0">
												<div class="mediaicon bg-primary">
													<i class="fa fa-link" aria-hidden="true"></i>
												</div>
												<div class="media-body ml-5 ">
													<h6 class="mediafont text-dark mb-0">Websites</h6><a class="d-block" href="">http://adminor.com</a> <a class="d-block" href="">http://adminor.net</a>
												</div>
												<!-- media-body -->
											</div>
											<!-- media -->

											<!-- media -->
											<div class="media">
												<div class="mediaicon bg-secondary">
													<i class="fa fa-envelope-o" aria-hidden="true"></i>
												</div>
												<div class="media-body ml-5">
													<h6 class="mediafont text-dark mb-0">Email Address</h6><a class="d-block" href="">georgemestayer@adminor.com</a>
												</div>
												<!-- media-body -->
											</div>
											<!-- media -->
											<div class="media">
												<div class="mediaicon bg-info">
													<i class="fa fa-twitter" aria-hidden="true"></i>
												</div>
												<div class="media-body ml-5">
													<h6 class="mediafont text-dark mb-0">Twitter</h6><a class="d-block" href="#">@adminor</a>
												</div>
												<!-- media-body -->
											</div>
											<!-- media -->
										</div>
									</div>
									<!-- media-list -->
								</div>
							</div>

							<div class="col-lg-8 col-md-12 col-sm-12 col-xl-9">
							    <div class="card clearfix">
									<div class="card-header">
										<h2 class="card-title">User info</h2>
									</div>
									<div class="card-body">
										<div class="row profile-user-info">
											<div class="col-lg-12">
												<div class="table-responsive border ">
													<table class="table row table-borderless w-100 m-0 ">
														<tbody class="col-lg-6 p-0">
															<tr>
																<td><strong>Full Name :</strong> Christopher Greear</td>
															</tr>
															<tr>
																<td><strong>Location :</strong> USA</td>
															</tr>
															<tr>
																<td><strong>Languages :</strong> English, German, Spanish.</td>
															</tr>
														</tbody>
														<tbody class="col-lg-6 p-0">
															<tr>
																<td><strong>Website :</strong> adminor.com</td>
															</tr>
															<tr>
																<td><strong>Email :</strong> christopher@adminor.com</td>
															</tr>
															<tr>
																<td><strong>Phone :</strong> +125 254 3562 </td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="panel panel-primary">
											<div class=" tab-menu-heading">
												<div class="tabs-menu2 ">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li><a href="#tab-friends" class="active" data-toggle="tab">Friends</a></li>
														<li><a href="#tab-activity" data-toggle="tab">Activity</a></li>
														<li><a href="#tab-chat" data-toggle="tab">Chat</a></li>
													</ul>
												</div>
											</div>
											<div class="card-body pb-0 tabs-menu-body">
												<div class="tab-content">
													<div class="tab-pane active" id="tab-friends">
														<ul class="widget-users row">
															<li class="col-lg-12 col-xl-4 col-sm-12 col-12">
																<div class="card">
																	<div class="card-body text-center">
																		<span class="avatar avatar-xxl brround" style="background-image: url(dashboard\assets/images/faces/male/25.jpeg)"></span>
																		<h4 class="h4 mb-0 mt-3">James Thomas
																		<p class="card-text">Web designer</p>
																	</h4></div>
																	<div class="card-footer text-center">
																		<div class="row user-social-detail">
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="col-lg-12 col-xl-4 col-sm-12 col-12">
																<div class="card">
																	<div class="card-body text-center">
																		<span class="avatar avatar-xxl brround" style="background-image: url(dashboard\assets/images/faces/female/19.jpeg)"></span>
																		<h4 class="h4 mb-0 mt-3">George Clooney
																		<p class="card-text">Web designer</p>
																	</h4></div>
																	<div class="card-footer text-center">
																		<div class="row user-social-detail">
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="col-lg-12 col-xl-4 col-sm-12 col-12">
																<div class="card">
																	<div class="card-body text-center">
																		<span class="avatar avatar-xxl brround" style="background-image: url(dashboard\assets/images/faces/male/20.jpeg)"></span>
																		<h4 class="h4 mb-0 mt-3">Robert Downey Jr.
																		<p class="card-text">Web designer</p>
																	</h4></div>
																	<div class="card-footer text-center">
																		<div class="row user-social-detail">
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="col-lg-12 col-xl-4 col-sm-12 col-12">
																<div class="card mb-lg-0">
																	<div class="card-body text-center">
																		<span class="avatar avatar-xxl brround" style="background-image: url(dashboard\assets/images/faces/female/12.jpeg)"></span>
																		<h4 class="h4 mb-0 mt-3">Emma Watson
																		<p class="card-text">Web designer</p>
																	</h4></div>
																	<div class="card-footer text-center">
																		<div class="row user-social-detail">
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="col-lg-12 col-xl-4 col-sm-12 col-12">
																<div class="card mb-lg-0">
																	<div class="card-body text-center">
																		<span class="avatar avatar-xxl brround" style="background-image: url(dashboard\assets/images/faces/male/24.jpeg)"></span>
																		<h4 class="h4 mb-0 mt-3">Mila Kunis
																		<p class="card-text">Web designer</p>
																	</h4></div>
																	<div class="card-footer text-center">
																		<div class="row user-social-detail">
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="col-lg-12 col-xl-4 col-sm-12 col-12">
																<div class="card mb-0">
																	<div class="card-body text-center">
																		<span class="avatar avatar-xxl brround" style="background-image: url(dashboard\assets/images/faces/male/26.jpeg)"></span>
																		<h4 class="h4 mb-0 mt-3">Ryan Gossling
																		<p class="card-text">Web designer</p>
																	</h4></div>
																	<div class="card-footer text-center">
																		<div class="row user-social-detail">
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
														<br>
													</div>

													<div class="tab-pane fade" id="tab-activity">
														<div class="table-responsive">
															<table class="table text-nowrap">
																<tbody>
																	<tr>
																		<td class="text-center">
																			<i class="fa fa-comment"></i>
																		</td>
																		<td>
																			John Doe  posted a comment in <a href="#">Avengers Initiative</a> project.
																		</td>
																		<td>
																			2014/08/08 12:08
																		</td>
																	</tr>
																	<tr>
																		<td class="text-center">
																			<i class="fa fa-truck"></i>
																		</td>
																		<td>
																			John Doe  changed order status from <span class="badge  badge-primary">Pending</span> to <span class="badge badge-success">Completed</span>
																		</td>
																		<td>
																			2014/08/08 12:08
																		</td>
																	</tr>
																	<tr>
																		<td class="text-center">
																			<i class="fa fa-check"></i>
																		</td>
																		<td>
																			John Doe  posted a comment in <a href="#">Lost in Translation opening scene</a> discussion.
																		</td>
																		<td>
																			2014/08/08 12:08
																		</td>
																	</tr>
																	<tr>
																		<td class="text-center">
																			<i class="fa fa-users"></i>
																		</td>
																		<td>
																			John Doe  posted a comment in <a href="#">Avengers Initiative</a> project.
																		</td>
																		<td>
																			2014/08/08 12:08
																		</td>
																	</tr>
																	<tr>
																		<td class="text-center">
																			<i class="fa fa-heart"></i>
																		</td>
																		<td>
																			John Doe  changed order status from <span class="badge badge-warning">On Hold</span> to <span class="badge badge-danger">Disabled</span>
																		</td>
																		<td>
																			2014/08/08 12:08
																		</td>
																	</tr>
																	<tr>
																		<td class="text-center">
																			<i class="fa fa-check"></i>
																		</td>
																		<td>
																			John Doe  posted a comment in <a href="#">Lost in Translation opening scene</a> discussion.
																		</td>
																		<td>
																			2014/08/08 12:08
																		</td>
																	</tr>
																	<tr>
																		<td class="text-center">
																			<i class="fa fa-truck"></i>
																		</td>
																		<td>
																			John Doe  changed order status from <span class="badge  badge-primary">Pending</span> to <span class="badge badge-success">Completed</span>
																		</td>
																		<td>
																			2014/08/08 12:08
																		</td>
																	</tr>
																	<tr>
																		<td class="text-center">
																			<i class="fa fa-users"></i>
																		</td>
																		<td>
																			John Doe  posted a comment in <a href="#">Avengers Initiative</a> project.
																		</td>
																		<td>
																			2014/08/08 12:08
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="tab-chat">
														<div class="conversation-wrapper">
															<div class="conversation-content">
																<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 340px;">
																	<div class="conversation-inner" style="overflow: hidden; width: auto; height: 340px;">

																		<div class="conversation-item item-left clearfix">
																			<div class="conversation-user">
																				<img src="dashboard\assets\images\faces\female\12.jpeg" alt="">
																			</div>
																			<div class="conversation-body">
																				<div class="name">
																					Ryan Gossling
																				</div>
																				<div class="time hidden-xs">
																					September 21, 2013 18:28
																				</div>
																				<div class="text">
																					I don't think they tried to market it to the billionaire, spelunking, base-jumping crowd.
																				</div>
																			</div>
																		</div>
																		<div class="conversation-item item-right clearfix">
																			<div class="conversation-user">
																				<img src="dashboard\assets\images\faces\male\15.jpeg" alt="">
																			</div>
																			<div class="conversation-body">
																				<div class="name">
																					Mila Kunis
																				</div>
																				<div class="time hidden-xs">
																					September 21, 2013 12:45
																				</div>
																				<div class="text">
																					Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you.
																				</div>
																			</div>
																		</div>
																		<div class="conversation-item item-right clearfix">
																			<div class="conversation-user">
																				<img src="dashboard\assets\images\faces\male\23.jpeg" alt="">
																			</div>
																			<div class="conversation-body">
																				<div class="name">
																					Mila Kunis
																				</div>
																				<div class="time hidden-xs">
																					September 21, 2013 12:45
																				</div>
																				<div class="text">
																					Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you.
																				</div>
																			</div>
																		</div>
																		<div class="conversation-item item-left clearfix">
																			<div class="conversation-user">
																				<img src="dashboard\assets\images\faces\female\1.jpeg" alt="">
																			</div>
																			<div class="conversation-body">
																				<div class="name">
																					Ryan Gossling
																				</div>
																				<div class="time hidden-xs">
																					September 21, 2013 18:28
																				</div>
																				<div class="text">
																					I don't think they tried to market it to the billionaire, spelunking, base-jumping crowd.
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; background: rgb(0, 0, 0);"></div>
																	<div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div>
																</div>
															</div>
															<div class="conversation-new-message">
																<form>
																	<div class="form-group">
																		<textarea class="form-control" rows="2" placeholder="Enter your message..."></textarea>
																	</div>

																	<div class="clearfix mb-3">
																		<button type="submit" class="btn btn-success pull-right">Send message</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
							Copyright © 2018 <a href="#">adminor</a>. Designed by <a href="#">Spruko</a> All rights reserved.
						</div>
					</div>
				</div>
			</footer>
			<!-- End Footer-->
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

		<!-- Dashboard js -->
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

		<!-- Custom scroll bar Js-->
		<script src="dashboard\assets\plugins\scroll-bar\jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- Custom Js-->
		<script src="dashboard\assets\js\custom.js"></script>
	</body>
</html>