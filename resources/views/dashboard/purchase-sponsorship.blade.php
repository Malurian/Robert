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

					<form method="post" action="{{ url('event') }}" enctype="multipart/form-data">
							{!! csrf_field() !!}
						<div  class="card">
								<div class="card-header">
									<h3 class="card-title">Purchase Sponsorship Packages</h3>
								</div>
								<div class="card-body ">
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
										<div class="form-group">
												<label class="form-label">Package Name</label>
												<input type="text" class="form-control" name="package-name" placeholder="Package Cost">
										</div>																			
										<div class="form-group">
												<label class="form-label">Cost</label>
												<input type="text" class="form-control" name="package-cost" placeholder="Package Cost">
										</div>										
										<div class="form-group">
												<label class="form-label">Quantity Available</label>
												<input type="text" class="form-control" name="package-quantity" placeholder="Package Quantity">
										</div>
										<div class="form-group">
												<label class="form-label">Package Description <span class="form-label-small ml-3">56/100</span></label>
												<textarea class="form-control" name="package-description" rows="7" placeholder="Description"></textarea>
										</div>
								</div>
								
								<div class="card-footer text-right">
										<div class="d-flex">
											<a href="javascript:void(0)" class="btn btn-link">Cancel</a>
											<button type="submit" class="btn btn-primary ml-auto">Proceed</button>
										</div>
									</div>
							</div>
						
				</form>
					@endsection