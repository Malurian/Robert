@extends('dashboard.nav')

@section('content')
					<div class=" content-area">
						<div class="page-header">
							
								@if ((Auth::user()->user_type)  == 'host')	   
								<h4 class="page-title">Dashboard for Hosts</h4>
								@else 
								<h4 class="page-title">Dashboard for Sponsors</h4>
								@endif
							
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
							</ol>
						</div>

						<div class="row row-cards">
							<div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
								<div class="card card-img-holder text-default bg-color">
									<div class="row">
										<div class="col-4">
											<div class="circle-icon bg-primary text-center align-self-center shadow-primary"><img src="dashboard\assets\images\circle.svg" class="card-img-absolute"><i class="lnr lnr-user fs-30  text-white mt-4"></i></div>
										</div>
										<div class="col-8">
											<div class="card-body p-4">
												<h1 class="mb-3">3</h1>
												<h5 class="font-weight-normal mb-0">Created Events</h5>
											</div>
										</div>
									</div>
							   </div>
							</div>

							<div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
								<div class="card card-img-holder text-default">
									<div class="row">
										<div class="col-4">
											<div class="card-img-absolute circle-icon bg-secondary align-items-center text-center shadow-secondary"><img src="dashboard\assets\images\circle.svg" class="card-img-absolute"><i class="lnr lnr-heart fs-30 text-white mt-4"></i></div>
										</div>
										<div class="col-8">
											<div class="card-body p-4">
												<h1 class="mb-3">7</h1>
												<h5 class="font-weight-normal mb-0">Followed Events</h5>
											</div>
										</div>
									</div>
							   </div>
							</div>

							<div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
								<div class="card card-img-holder text-default">
									<div class="row">
										<div class="col-4">
											<div class="card-img-absolute  circle-icon bg-info align-items-center text-center shadow-info"><img src="dashboard\assets\images\circle.svg" class="card-img-absolute"><i class="lnr lnr-bubble fs-30 text-white mt-4"></i></div>
										</div>
										<div class="col-8">
											<div class="card-body p-4">
												<h1 class="mb-3">87</h1>
												<h5 class="font-weight-normal mb-0">Engagements</h5>
											</div>
										</div>
									</div>
							   </div>
							</div>

							<div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
								<div class="card card-img-holder text-default">
									<div class="row">
										<div class="col-4">
											<div class="card-img-absolute circle-icon bg-success align-items-center text-center shadow-success"><img src="dashboard\assets\images\circle.svg" class="card-img-absolute"><i class=" lnr lnr-earning fs-30 text-white mt-4 "></i></div>
										</div>
										<div class="col-8">
											<div class="card-body p-4">
												<h1 class="mb-3" style="color:brown">R{{ auth::user()->wallet }}</h1>
												<h5 class="font-weight-normal mb-0">Wallet</h5>
											</div>
										</div>
									</div>
							   </div>
							</div>
						</div>
						<div class="row row-cards row-deck">
							<div class="col-md-12 col-lg-12 col-xl-4">
								<div class="card">
									<div>
										<div class="weather-card one">
											<div class="top">
												<div class="weather-card-wrapper">
													<div class="mynav">
														<a href="javascript:;"><span class="lnr lnr-chevron-left"></span></a>
														<a href="javascript:;"><span class="lnr lnr-cog"></span></a>
													</div>
													<h1 class="heading">Clear Night</h1>
													<h3 class="location">Toronto, Canada</h3>
													<p class="temp">
														<span class="temp-value">30</span>
														<span class="deg">0</span>
														<a href="javascript:;"><span class="temp-type">C</span></a>
													</p>
												</div>
											</div>
											<div class="bottom">
												<div class="weather-card-wrapper">
													<ul class="forecast">
														<a href="javascript:;"><span class="lnr lnr-chevron-up go-up"></span></a>
														<li class="active">
															<span class="date">Yesterday</span>
															<span class="lnr lnr-sun condition">
																<span class="temp">28<span class="deg">0</span><span class="temp-type">C</span></span>
															</span>
														</li>
														<li>
															<span class="date">Tomorrow</span>
															<span class="lnr lnr-cloud condition">
																<span class="temp">32<span class="deg">0</span><span class="temp-type">C</span></span>
															</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-12 col-xl-8 col-md-12">
								<div class="card ">
									<div class="card-header">
										<h5 class="card-title">Your Events Table</h5>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-striped card-table table-condensed mt-0 table-nowrap border">
												<thead>
													<tr>
														<th>Event Name</th>
														<th>Date registered</th>
														<th>Event Date</th>
														<th>Location</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													@foreach ($my_created_events as $event)
														<tr>
															<td>{{ $event->name }}</td>
															<td>2019/08/17</td>
															<td>Staff</td>
															<td>2019/11/30</td>
															<td><span class="badge badge-success">Inactive</span></td>
														</tr>
													@endforeach
													
												</tbody>
											</table>
										</div>
									</div>
									<div class="card-footer text-center">
										<a href="#"><i class="fa fa-angle-down"></i> View More</a>
									</div>
								</div>
							</div>

							<div class="col-lg-12 col-xl-8 col-md-12">
								<div class="card ">
									<div class="card-header">
										<h5 class="card-title">Your Subscribed Events</h5>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-striped card-table table-condensed mt-0 table-nowrap border">
												<thead>
													<tr>
														<th>Event Name</th>
														<th>Date registered</th>
														<th>Event Date</th>
														<th>Location</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													@foreach ($my_subscribed_events as $event)
														<tr>
															<td>{{ $event->event->name }}</td>
															<td>2019/08/17</td>
															<td>Staff</td>
															<td>2019/11/30</td>
															<td><span class="badge badge-success">Inactive</span></td>
														</tr>
													@endforeach
													
												</tbody>
											</table>
										</div>
									</div>
									<div class="card-footer text-center">
										<a href="#"><i class="fa fa-angle-down"></i> View More</a>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					@endsection