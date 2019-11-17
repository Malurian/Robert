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
								<div>
									<h3><span style="color:crimson">Amount To Pay: R{{ $amount }}</span></h3>
								</div>
							<form action="{{ url('payment') }}" method="POST">
									<script
										src="https://checkout.stripe.com/checkout.js" class="stripe-button"
										data-key="pk_test_4qkEqxcXNlTdQqJ6oU6BtpaD00rxZambCs"
										data-amount= {{ $amount.'00' }}
										data-name="Event Payment"
										data-description="Event Payment"
										data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
										data-locale="auto"
										data-currency="usd">
									</script>
								<input type="hidden" name="amount" value="{{ $amount.'00' }}">
								<input type="hidden" name="description" value="Event Payment">	
							</form>
							</div>
						</div>
						
					</div>
					@endsection