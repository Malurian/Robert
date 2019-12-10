@extends('dashboard.nav')

@section('content')
			{{-- Start of Form Events --}}
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
								<form method="post" action="{{ url('event') }}" enctype="multipart/form-data" class="card">
										{!! csrf_field() !!}
									<div class="card-header">
										<h3 class="card-title">Event elements</h3>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label class="form-label">Event Title*</label>
											<input type="text" class="form-control" name="name" placeholder="Event Name">
										</div>
										<div class="form-group">
											<label class="form-label">General Event Description*</label>
											<textarea class="form-control" name="description" rows="7" placeholder="Description"></textarea>
										</div>

										<div class="form-group">
											<label class="form-label">Location*</label>
												<input type="text" class="form-control" name="address" placeholder="Event Location">	
										</div>
                                        <label>Event Time(24hr)</label><br/>
                                        <label>From:*</label>
										<div class="wd-150 mg-b-30">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
													</div>
												</div><!-- input-group-prepend -->
												<input class="form-control" id="tpBasic" placeholder="Set time" name="to_time" type="time">
											</div>
										</div>
                                        <label>To:*</label>
										<div class="wd-150 mg-b-30">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
													</div>
												</div><!-- input-group-prepend -->
												<input class="form-control" id="tpBasic" placeholder="Set time" name="from_time" type="time">
											</div>
										</div>
										<div class="form-group ">
											<label class="form-label">Date of Event*</label>
												<input type="date" class="form-control" name="date" placeholder="Event Date">										
                                        </div>
                                        <div class="card-header">
                                            <h3 class="card-title">Event Image*</h3>
                                        </div>
                                        <div class=" card-body">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-12">
                                                    <input type="file" class="dropify" name="image" data-height="180">
                                                </div>
                                            </div>
										</div>
										<div class="form-group ">
												<label class="form-label">Number of Packages</label>
												<select class="form-control select2 custom-select" data-placeholder="Choose one">
													<option label="Choose one">
													</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
												</select>
											</div>			

										<div class="form-group ">
											<label class="form-label">Listing an event costs R600</label>										
                                        </div>								
							</div>
						</div>
						
					</div>
			{{-- End of Form Events --}}
			
			{{-- Start of Package Form --}}	
			{{--Start Package One--}}
			<div  class="card">
				<div class="card-header">
					<h3 class="card-title">Create Packages</h3>
				</div>
				<div class="card-header">
					<h3 class="card-title">Package One</h3>
				</div>
				<div class="card-body ">																
						<div class="form-group">
								<label class="form-label">First Package</label>
								<input type="text" class="form-control" name="package-1" placeholder="Package Cost">
						</div>																			
						<div class="form-group">
								<label class="form-label">Cost</label>
								<input type="text" class="form-control" name="cost-1" placeholder="Package Cost">
						</div>										
						<div class="form-group">
								<label class="form-label">Quantity Available</label>
								<input type="text" class="form-control" name="quantity-1" placeholder="Package Quantity">
						</div>
						<div class="form-group">
								<label class="form-label">Package Description <span class="form-label-small ml-3">56/100</span></label>
								<textarea class="form-control" name="description-1" rows="7" placeholder="Description"></textarea>
						</div>
				</div>
			</div>
			{{--End package One --}}	
			{{--Start package Two--}}
			<div  class="card">
				<div class="card-header">
					<h3 class="card-title">Package Two</h3>
				</div>
				<div class="card-body ">																
						<div class="form-group">
								<label class="form-label">Second Package</label>
								<input type="text" class="form-control" name="package-2" placeholder="Package Cost">
						</div>																			
						<div class="form-group">
								<label class="form-label">Cost</label>
								<input type="text" class="form-control" name="cost-2" placeholder="Package Cost">
						</div>										
						<div class="form-group">
								<label class="form-label">Quantity Available</label>
								<input type="text" class="form-control" name="quantity-2" placeholder="Package Quantity">
						</div>
						<div class="form-group">
								<label class="form-label">Package Description <span class="form-label-small ml-3">56/100</span></label>
								<textarea class="form-control" name="description-2" rows="7" placeholder="Description"></textarea>
						</div>
				</div>
			</div>
			{{--End Package two --}}	
			{{--Start package Three--}}
			<div  class="card">
				<div class="card-header">
					<h3 class="card-title">Package Three</h3>
				</div>
				<div class="card-body ">																
						<div class="form-group">
								<label class="form-label">Third Package</label>
								<input type="text" class="form-control" name="package-3" placeholder="Package Cost">
						</div>																			
						<div class="form-group">
								<label class="form-label">Cost</label>
								<input type="text" class="form-control" name="cost-3" placeholder="Package Cost">
						</div>										
						<div class="form-group">
								<label class="form-label">Quantity Available</label>
								<input type="text" class="form-control" name="quantity-3" placeholder="Package Quantity">
						</div>
						<div class="form-group">
								<label class="form-label">Package Description <span class="form-label-small ml-3">56/100</span></label>
								<textarea class="form-control" name="description-3" rows="7" placeholder="Description"></textarea>
						</div>
				</div>
			</div>
			{{--End Package Three --}}	
			{{--Start package Four--}}
			<div  class="card">
				<div class="card-header">
					<h3 class="card-title">Package Four</h3>
				</div>
				<div class="card-body ">																
						<div class="form-group">
								<label class="form-label">Fourth Package</label>
								<input type="text" class="form-control" name="package-4" placeholder="Package Cost">
						</div>																			
						<div class="form-group">
								<label class="form-label">Cost</label>
								<input type="text" class="form-control" name="cost-4" placeholder="Package Cost">
						</div>										
						<div class="form-group">
								<label class="form-label">Quantity Available</label>
								<input type="text" class="form-control" name="quantity-4" placeholder="Package Quantity">
						</div>
						<div class="form-group">
								<label class="form-label">Package Description <span class="form-label-small ml-3">56/100</span></label>
								<textarea class="form-control" name="description-4" rows="7" placeholder="Description"></textarea>
						</div>
				</div>
			</div>
			{{--End Package Four --}}	
			{{--Start package Five--}}
			<div  class="card">
				<div class="card-header">
					<h3 class="card-title">Package Five</h3>
				</div>
				<div class="card-body ">																
						<div class="form-group">
								<label class="form-label">Fifth Package</label>
								<input type="text" class="form-control" name="package-5" placeholder="Package Cost">
						</div>																			
						<div class="form-group">
								<label class="form-label">Cost</label>
								<input type="text" class="form-control" name="cost-5" placeholder="Package Cost">
						</div>										
						<div class="form-group">
								<label class="form-label">Quantity Available</label>
								<input type="text" class="form-control" name="quantity-5" placeholder="Package Quantity">
						</div>
						<div class="form-group">
								<label class="form-label">Package Description <span class="form-label-small ml-3">56/100</span></label>
								<textarea class="form-control" name="description-5" rows="7" placeholder="Description"></textarea>
						</div>
				</div>
			</div>
			{{--End Package Five --}}	
			{{--Start package Six--}}
			<div  class="card">
				<div class="card-header">
					<h3 class="card-title">Package Six</h3>
				</div>
				<div class="card-body ">																
						<div class="form-group">
								<label class="form-label">Sixth Package</label>
								<input type="text" class="form-control" name="package-6" placeholder="Package Cost">
						</div>																			
						<div class="form-group">
								<label class="form-label">Cost</label>
								<input type="text" class="form-control" name="cost-6" placeholder="Package Cost">
						</div>										
						<div class="form-group">
								<label class="form-label">Quantity Available</label>
								<input type="text" class="form-control" name="quantity-6" placeholder="Package Quantity">
						</div>
						<div class="form-group">
								<label class="form-label">Package Description <span class="form-label-small ml-3">56/100</span></label>
								<textarea class="form-control" name="description-6" rows="7" placeholder="Description"></textarea>
						</div>
				</div>
			</div>
			{{--End Package Six --}}	
			{{--Start package Seven--}}
			<div  class="card">
				<div class="card-header">
					<h3 class="card-title">Package Seven</h3>
				</div>
				<div class="card-body ">																
						<div class="form-group">
								<label class="form-label">Seventh Package</label>
								<input type="text" class="form-control" name="package-7" placeholder="Package Cost">
						</div>																			
						<div class="form-group">
								<label class="form-label">Cost</label>
								<input type="text" class="form-control" name="cost-7" placeholder="Package Cost">
						</div>										
						<div class="form-group">
								<label class="form-label">Quantity Available</label>
								<input type="text" class="form-control" name="quantity-7" placeholder="Package Quantity">
						</div>
						<div class="form-group">
								<label class="form-label">Package Description <span class="form-label-small ml-3">56/100</span></label>
								<textarea class="form-control" name="description-7" rows="7" placeholder="Description"></textarea>
						</div>
				</div>
			</div>
			{{--End Package Seven --}}	
			{{--Start package Eight--}}
			<div  class="card">
				<div class="card-header">
					<h3 class="card-title">Package Eight</h3>
				</div>
				<div class="card-body ">																
						<div class="form-group">
								<label class="form-label">Eighth Package</label>
								<input type="text" class="form-control" name="package-8" placeholder="Package Cost">
						</div>																			
						<div class="form-group">
								<label class="form-label">Cost</label>
								<input type="text" class="form-control" name="cost-8" placeholder="Package Cost">
						</div>										
						<div class="form-group">
								<label class="form-label">Quantity Available</label>
								<input type="text" class="form-control" name="quantity-8" placeholder="Package Quantity">
						</div>
						<div class="form-group">
								<label class="form-label">Package Description <span class="form-label-small ml-3">56/100</span></label>
								<textarea class="form-control" name="description-8" rows="7" placeholder="Description"></textarea>
						</div>
				</div>
			</div>
			{{--End Package Eight --}}	
			{{--Start package Nine--}}
			<div  class="card">
				<div class="card-header">
					<h3 class="card-title">Package Nine</h3>
				</div>
				<div class="card-body ">																
						<div class="form-group">
								<label class="form-label">Ninth Package</label>
								<input type="text" class="form-control" name="package-9" placeholder="Package Cost">
						</div>																			
						<div class="form-group">
								<label class="form-label">Cost</label>
								<input type="text" class="form-control" name="cost-9" placeholder="Package Cost">
						</div>										
						<div class="form-group">
								<label class="form-label">Quantity Available</label>
								<input type="text" class="form-control" name="quantity-9" placeholder="Package Quantity">
						</div>
						<div class="form-group">
								<label class="form-label">Package Description <span class="form-label-small ml-3">56/100</span></label>
								<textarea class="form-control" name="description-9" rows="7" placeholder="Description"></textarea>
						</div>
				</div>
			</div>
			{{--End Package Nine --}}	
			{{--Start Package One--}}
			<div  class="card">
				<div class="card-footer text-right">
						<div class="d-flex">
							<a href="javascript:void(0)" class="btn btn-link">Cancel</a>
							<button type="submit" class="btn btn-primary ml-auto">Proceed</button>
						</div>
					</div>
			</div>
			{{--End package One --}}
			{{-- End of Package Form --}}
		</form>
			

@endsection