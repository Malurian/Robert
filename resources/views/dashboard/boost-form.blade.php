@extends('dashboard.nav')
    @section('content')
        {{-- Start of Form Events --}}
					<div class=" content-area">
						<div class="page-header">
							<h4 class="page-title">Boost an Event</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Boost an Event</li>
							</ol>
						</div>
						<div class="row row-deck">
							<div class="col-lg">
								<form method="post" action="{{ url('') }}" enctype="multipart/form-data" class="card">
										{!! csrf_field() !!}
									<div class="card-header">
										<h3 class="card-title">Event elements</h3>
                                    </div>                                    
									<div class="card-body">
										<div class="form-group ">
												<label class="form-label">Select which package you want to boost</label>
												<select class="form-control select2 custom-select" data-placeholder="Choose one">
													<option label="Choose one">Choose a package</option>
													@foreach ($my_created_events as $event)
													<option value="1">{{$event->name}}</option>													
													@endforeach
												</select>
										</div>
										<div class="form-group">
											<label class="form-label">Additional Description <span class="form-label-small ml-3">56/100</span></label>
											<textarea class="form-control" name="description" rows="7" placeholder="Description"></textarea>
										</div>
										<div class="form-group ">
											<label class="form-label">Prefered Date</label>
												<input type="date" class="form-control" name="date" placeholder="Event Date">
										
                                        </div>
                                        <div class="card-header">
                                            <h3 class="card-title">Include boost Artwork</h3>
                                        </div>
                                        <div class=" card-body">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-12">
                                                    <input type="file" class="dropify" name="image" data-height="180">
                                                </div>
                                            </div>
										</div>			

										<div class="form-group ">
											<label class="form-label">Boosting an event costs R600</label>										
										</div>				
                                    </div>
								</form>
						    </div>
						
                        </div>
                    <div  class="card">
                        <div class="card-footer text-right">
                                <div class="d-flex">
                                    <a href="javascript:void(0)" class="btn btn-link">Cancel</a>
                                    <button type="submit" class="btn btn-primary ml-auto">Proceed</button>
                                </div>
                            </div>
                    </div>
                    </div>
                </form>
			{{-- End of Form Events --}}
    @endsection