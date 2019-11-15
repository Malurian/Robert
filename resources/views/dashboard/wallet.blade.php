@extends('dashboard.nav')

@section('content')
					<div class=" content-area">
						<div class="page-header">
							<h4 class="page-title">Add to Wallet</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Wallet</li>
							</ol>
						</div>
						<div class="row row-deck">
							<div class="col-lg">								
								<form method="POST" action="{{ url('pay') }}" class="card">
										{!! csrf_field() !!}
									<div class="card-header">
										<h3 class="card-title">Current Wallet Balance: <span style="color:crimson">R{{ auth::user()->wallet }}</span></h3>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label class="form-label">Amount</label>
											<input type="text" class="form-control" name="name" placeholder="Enter Amount">
										</div>                                        
									</div>
									<div class="card-footer text-right">
										<div class="d-flex">
											<a href="javascript:void(0)" class="btn btn-link">Cancel</a>
											<button type="submit" class="btn btn-primary ml-auto">Pay Now</button>
										</div>
									</div>
								</form>

							</div>
						</div>
						
					</div>
					@endsection