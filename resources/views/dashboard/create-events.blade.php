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
		<title>adminor – Clean & Modern Responsive Bootstrap 4 admin dashboard HTML5 Template.</title>
		<link rel="stylesheet" href="dashboard\assets\fonts\fonts\font-awesome.min.css">

		<!-- Font Family -->
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

		<!-- Sidemenu Css -->
		<link href="dashboard\assets\plugins\fullside-menu\css\style.css" rel="stylesheet">
		<link href="dashboard\assets\plugins\fullside-menu\waves.min.css" rel="stylesheet">

		<!-- Dashboard Css -->
		<link href="dashboard\assets\css\dashboard.css" rel="stylesheet">

		<!-- c3.js Charts Plugin -->
		<link href="dashboard\assets\plugins\charts-c3\c3-chart.css" rel="stylesheet">

		<!-- select2 Plugin -->
		<link href="dashboard\assets\plugins\select2\select2.min.css" rel="stylesheet">

		<!-- Time picker Plugin -->
		<link href="dashboard\assets\plugins\time-picker\jquery.timepicker.css" rel="stylesheet">

		<!-- Date Picker Plugin -->
		<link href="dashboard\assets\plugins\date-picker\spectrum.css" rel="stylesheet">

		<!-- Custom scroll bar css-->
		<link href="dashboard\assets\plugins\scroll-bar\jquery.mCustomScrollbar.css" rel="stylesheet">

		<!-- file Uploads -->
        <link href="dashboard\assets\plugins\fileuploads\css\dropify.min.css" rel="stylesheet" type="text/css">

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
							<h4 class="page-title">Create an Event</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Create an Event</li>
							</ol>
						</div>
						<div class="row row-deck">
							<div class="col-lg">
								<form method="post" class="card">
									<div class="card-header">
										<h3 class="card-title">Event elements</h3>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label class="form-label">Event Name</label>
											<input type="text" class="form-control" name="example-text-input" placeholder="Name">
										</div>
										<div class="form-group">
											<label class="form-label">Event Title</label>
											<input type="text" class="form-control" name="example-text-input" placeholder="Text..">
                                        </div>
                                        
                                        <label>Event Time:</label>
										<div class="wd-150 mg-b-30">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
													</div>
												</div><!-- input-group-prepend -->
												<input class="form-control" id="tpBasic" placeholder="Set time" type="text">
											</div>
                                        </div>
                                        
										<div class="form-group">
											<label class="form-label">Event Fee(Rand)</label>
											<input type="text" class="form-control" name="example-text-input" placeholder="Text..">
										</div>

										<div class="form-group">
											<label class="form-label">Event Description <span class="form-label-small ml-3">56/100</span></label>
											<textarea class="form-control" name="example-textarea-input" rows="7" placeholder="text here.."></textarea>
										</div>

										<div class="form-group">
											<label class="form-label">Location</label>
											<select name="country" id="select-countries" class="form-control custom-select">
												<option value="br" data-data='{"image": "dashboard\assets/images/flags/br.svg"}'>Brazil</option>
												<option value="cz" data-data='{"image": "dashboard\assets/images/flags/cz.svg"}'>Czech Republic</option>
												<option value="de" data-data='{"image": "dashboard\assets/images/flags/de.svg"}'>Germany</option>
												<option value="pl" data-data='{"image": "dashboard\assets/images/flags/pl.svg"}' selected="">Poland</option>
											</select>
										</div>

										<!-- <div class="form-group">
											<label class="form-label">Input group</label>
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Search for...">
												<span class="input-group-append">
													<button class="btn btn-primary" type="button">Go!</button>
												</span>
											</div>
										</div> -->

										<div class="form-group ">
											<label class="form-label">Date of Event</label>
											<div class="row gutters-xs">
												<div class="col-5">
													<select name="user[month]" class="form-control custom-select">
														<option value="">Month</option>
														<option value="1">January</option>
														<option value="2">February</option>
														<option value="3">March</option>
														<option value="4">April</option>
														<option value="5">May</option>
														<option selected="selected" value="6">June</option>
														<option value="7">July</option>
														<option value="8">August</option>
														<option value="9">September</option>
														<option value="10">October</option>
														<option value="11">November</option>
														<option value="12">December</option>
													</select>
												</div>
												<div class="col-3">
													<select name="user[day]" class="form-control custom-select">
														<option value="">Day</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
														<option value="13">13</option>
														<option value="14">14</option>
														<option value="15">15</option>
														<option value="16">16</option>
														<option value="17">17</option>
														<option value="18">18</option>
														<option value="19">19</option>
														<option selected="selected" value="20">20</option>
														<option value="21">21</option>
														<option value="22">22</option>
														<option value="23">23</option>
														<option value="24">24</option>
														<option value="25">25</option>
														<option value="26">26</option>
														<option value="27">27</option>
														<option value="28">28</option>
														<option value="29">29</option>
														<option value="30">30</option>
														<option value="31">31</option>
													</select>
												</div>
												<div class="col-4">
													<select name="user[year]" class="form-control custom-select">
														<option value="">Year</option>
														<option value="2014">2014</option>
														<option value="2013">2013</option>
														<option value="2012">2012</option>
														<option value="2011">2011</option>
														<option value="2010">2010</option>
														<option value="2009">2009</option>
														<option value="2008">2008</option>
														<option value="2007">2007</option>
														<option value="2006">2006</option>
														<option value="2005">2005</option>
														<option value="2004">2004</option>
														<option value="2003">2003</option>
														<option value="2002">2002</option>
														<option value="2001">2001</option>
														<option value="2000">2000</option>
														<option value="1999">1999</option>
														<option value="1998">1998</option>
														<option value="1997">1997</option>
														<option value="1996">1996</option>
														<option value="1995">1995</option>
														<option value="1994">1994</option>
														<option value="1993">1993</option>
														<option value="1992">1992</option>
														<option value="1991">1991</option>
														<option value="1990">1990</option>
														<option selected="selected" value="1989">1989</option>
														<option value="1988">1988</option>
														<option value="1987">1987</option>
														<option value="1986">1986</option>
														<option value="1985">1985</option>
														<option value="1984">1984</option>
														<option value="1983">1983</option>
														<option value="1982">1982</option>
														<option value="1981">1981</option>
														<option value="1980">1980</option>
														<option value="1979">1979</option>
														<option value="1978">1978</option>
														<option value="1977">1977</option>
														<option value="1976">1976</option>
														<option value="1975">1975</option>
														<option value="1974">1974</option>
														<option value="1973">1973</option>
														<option value="1972">1972</option>
														<option value="1971">1971</option>
														<option value="1970">1970</option>
														<option value="1969">1969</option>
														<option value="1968">1968</option>
														<option value="1967">1967</option>
														<option value="1966">1966</option>
														<option value="1965">1965</option>
														<option value="1964">1964</option>
														<option value="1963">1963</option>
														<option value="1962">1962</option>
														<option value="1961">1961</option>
														<option value="1960">1960</option>
														<option value="1959">1959</option>
														<option value="1958">1958</option>
														<option value="1957">1957</option>
														<option value="1956">1956</option>
														<option value="1955">1955</option>
														<option value="1954">1954</option>
														<option value="1953">1953</option>
														<option value="1952">1952</option>
														<option value="1951">1951</option>
														<option value="1950">1950</option>
														<option value="1949">1949</option>
														<option value="1948">1948</option>
														<option value="1947">1947</option>
														<option value="1946">1946</option>
														<option value="1945">1945</option>
														<option value="1944">1944</option>
														<option value="1943">1943</option>
														<option value="1942">1942</option>
														<option value="1941">1941</option>
														<option value="1940">1940</option>
														<option value="1939">1939</option>
														<option value="1938">1938</option>
														<option value="1937">1937</option>
														<option value="1936">1936</option>
														<option value="1935">1935</option>
														<option value="1934">1934</option>
														<option value="1933">1933</option>
														<option value="1932">1932</option>
														<option value="1931">1931</option>
														<option value="1930">1930</option>
														<option value="1929">1929</option>
														<option value="1928">1928</option>
														<option value="1927">1927</option>
														<option value="1926">1926</option>
														<option value="1925">1925</option>
														<option value="1924">1924</option>
														<option value="1923">1923</option>
														<option value="1922">1922</option>
														<option value="1921">1921</option>
														<option value="1920">1920</option>
														<option value="1919">1919</option>
														<option value="1918">1918</option>
														<option value="1917">1917</option>
														<option value="1916">1916</option>
														<option value="1915">1915</option>
														<option value="1914">1914</option>
														<option value="1913">1913</option>
														<option value="1912">1912</option>
														<option value="1911">1911</option>
														<option value="1910">1910</option>
														<option value="1909">1909</option>
														<option value="1908">1908</option>
														<option value="1907">1907</option>
														<option value="1906">1906</option>
														<option value="1905">1905</option>
														<option value="1904">1904</option>
														<option value="1903">1903</option>
														<option value="1902">1902</option>
														<option value="1901">1901</option>
														<option value="1900">1900</option>
														<option value="1899">1899</option>
														<option value="1898">1898</option>
														<option value="1897">1897</option>
													</select>
												</div>
											</div>
                                        </div>
                                        <div class="card-header">
                                            <h3 class="card-title">Event Image</h3>
                                        </div>
                                        <div class=" card-body">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-12">
                                                    <input type="file" class="dropify" data-height="180">
                                                </div>
                                            </div>
                                        </div>
									</div>
									<div class="card-footer text-right">
										<div class="d-flex">
											<a href="javascript:void(0)" class="btn btn-link">Cancel</a>
											<button type="submit" class="btn btn-primary ml-auto">Send data</button>
										</div>
									</div>
								</form>
							</div>
							<!-- <div class="col-lg-6">
							    <form method="post" class="card">
									<div class="card-header">
										<h3 class="card-title">Validation Form</h3>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label class="form-label">Valid Email</label>
											<input type="text" class="form-control is-valid state-valid" name="example-text-input-valid" placeholder="Valid Email..">
										</div>
										<div class="form-group m-0">
											<label class="form-label">Invalid Number</label>
											<input type="text" class="form-control is-invalid state-invalid" name="example-text-input-invalid" placeholder="Invalid Number..">
											<div class="invalid-feedback">Invalid feedback</div>
										</div>
										<div class="form-group">
											<label class="form-label">Input group</label>
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Search for...">
												<span class="input-group-append">
													<button class="btn btn-primary" type="button">Go!</button>
												</span>
											</div>
										</div>
										<div class="form-group">
											<label class="form-label">Input group buttons</label>
											<div class="input-group">
												<input type="text" class="form-control">
												<div class="input-group-append">
													<button type="button" class="btn btn-primary">Action</button>
													<button data-toggle="dropdown" type="button" class="btn btn-primary dropdown-toggle"></button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="javascript:void(0)">News</a>
														<a class="dropdown-item" href="javascript:void(0)">Messages</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="javascript:void(0)">Edit Profile</a>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="form-label">Separated inputs</label>
											<div class="row gutters-xs">
												<div class="col">
													<input type="text" class="form-control" placeholder="Search for...">
												</div>
												<span class="col-auto">
													<button class="btn btn-secondary" type="button"><i class="fe fe-search"></i></button>
												</span>
											</div>
										</div>
										<div class="form-group">
											<label class="form-label">Icon input</label>
											<div class="input-icon mb-3">
												<input type="text" class="form-control" placeholder="Search for...">
												<span class="input-icon-addon search-icon">
													<i class="fe fe-search"></i>
												</span>
											</div>
											<div class="input-icon">
												<span class="input-icon-addon search-icon">
													<i class="fe fe-user"></i>
												</span>
												<input type="text" class="form-control" placeholder="Username">
											</div>
										</div>
										<div class="form-group">
											<label class="form-label">Disabled</label>
											<input type="text" class="form-control" name="example-disabled-input" placeholder="Disabled text area.." value="" disabled="">
										</div>
										<div class="form-group">
											<label class="form-label">Readonly</label>
											<input type="text" class="form-control" name="example-disabled-input" placeholder="Read Only Text area." value="Read Only Text area. " readonly="">
										</div>
									</div>
									<div class="card-footer text-right">
										<div class="d-flex">
											<a href="javascript:void(0)" class="btn btn-link">Cancel</a>
											<button type="submit" class="btn btn-primary ml-auto">Send data</button>
										</div>
									</div>
								</form>
							</div> -->
						</div>
						
					</div>
				</div>
			</div>

			<!--footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
							Copyright © 2018 <a href="#">Mink-Strings</a>. Designed by <a href="#">Gee</a> All rights reserved.
						</div>
					</div>
				</div>
			</footer>
			<!-- End Footer-->
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>
		<!-- Dashboard Css -->
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

		<!--Select2 js -->
		<script src="dashboard\assets\plugins\select2\select2.full.min.js"></script>

		<!-- Timepicker js -->
		<script src="dashboard\assets\plugins\time-picker\jquery.timepicker.js"></script>
		<script src="dashboard\assets\plugins\time-picker\toggles.min.js"></script>

		<!-- Datepicker js -->
		<script src="dashboard\assets\plugins\date-picker\spectrum.js"></script>
		<script src="dashboard\assets\plugins\date-picker\jquery-ui.js"></script>
		<script src="dashboard\assets\plugins\input-mask\jquery.maskedinput.js"></script>

		<!-- Inline js -->
		<script src="dashboard\assets\js\select2.js"></script>
		<!-- file uploads js -->
        <script src="dashboard\assets\plugins\fileuploads\js\dropify.min.js"></script>

		<!-- Custom scroll bar Js-->
		<script src="dashboard\assets\plugins\scroll-bar\jquery.mCustomScrollbar.concat.min.js"></script>
		<!-- Custom Js-->
		<script src="dashboard\assets\js\custom.js"></script>

		<script type="text/javascript">
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong appended.'
                },
                error: {
                    'fileSize': 'The file size is too big (2M max).'
                }
            });
        </script>

	</body>
</html>


