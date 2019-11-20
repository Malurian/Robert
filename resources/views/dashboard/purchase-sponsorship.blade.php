@extends('dashboard.nav')

@section('content')
					<div class=" content-area">
						<div class="page-header">
							<h4 class="page-title">Purchase a Sponsorship Package</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Purchase a sponsorship Package</li>
							</ol>
						</div>
						{{-- <div class="row row-deck">
							<div class="col-lg">
								<form method="post" action="{{ url('event') }}" enctype="multipart/form-data" class="card">
										{!! csrf_field() !!}
									<div class="card-header">
										<h3 class="card-title">Event elements</h3>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label class="form-label">Event Title</label>
											<input type="text" class="form-control" name="name" placeholder="Event Name">
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
												<label class="form-label">Quantity Available</label>
												<input type="text" class="form-control" name="quantity" placeholder="Text..">
											</div>
										<div class="form-group">
											<label class="form-label">Event Description <span class="form-label-small ml-3">56/100</span></label>
											<textarea class="form-control" name="description" rows="7" placeholder="Description"></textarea>
										</div>

										<div class="form-group">
											<label class="form-label">Location</label>
												<input type="text" class="form-control" name="address" placeholder="Event Location">	
										</div>
										<div class="form-group ">
											<label class="form-label">Date of Event</label>
												<input type="date" class="form-control" name="date" placeholder="Event Date">
										
                                        </div>
                                        <div class="card-header">
                                            <h3 class="card-title">Event Image</h3>
                                        </div>
                                        <div class=" card-body">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-12">
                                                    <input type="file" class="dropify" name="image" data-height="180">
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group ">
											<label class="form-label">Listing an event costs R600</label>										
                                        </div>
									</div>
									<div class="card-footer text-right">
										<div class="d-flex">
											<a href="javascript:void(0)" class="btn btn-link">Cancel</a>
											<button type="submit" class="btn btn-primary ml-auto">Proceed</button>
										</div>
									</div>
								</form>
							</div>
						</div> --}}
						
					</div>
					@endsection