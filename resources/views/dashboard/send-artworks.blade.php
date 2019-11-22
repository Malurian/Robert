@extends('dashboard.nav')

@section('content')
					<div class=" content-area">
						<div class="page-header">
							<h4 class="page-title">Send Your Artworks</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Send Your Artworks</li>
							</ol>
						</div>
						 <div class="row row-deck">
							<div class="col-lg">
								<form method="post" action="{{ url('event') }}" enctype="multipart/form-data" class="card">
										{!! csrf_field() !!}
									<div class="card-header">
										<h3 class="card-title">Send an artwork</h3>
									</div>
									<div class="card-body">
                                        <div class="card-header">
                                            <h3 class="card-title">Upload Artwork Image</h3>
                                        </div>
                                        <div class=" card-body">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-12">
                                                    <input type="file" class="dropify" name="image" data-height="180">
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group ">
											<label class="form-label">Sending an Artwork Costs R600</label>										
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
						</div> 
						
					</div>
					@endsection