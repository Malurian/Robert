@extends('dashboard.nav')

@section('content')
					<div class=" content-area">
						<div class="page-header">
							<h4 class="page-title">Boost to Featured Event</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Boost to Featured Events</li>
							</ol>
						</div>
						


						<div class="col-lg-12 col-xl-8 col-md-12">
								<div class="card ">
									<div class="card-header">
										<h5 class="card-title">Events Table</h5>
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
															<td><span class="badge badge-success">
															<a href="{{ url('boost-form') }}">Boost</a></td>
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
					@endsection