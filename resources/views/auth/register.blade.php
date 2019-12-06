@extends('header.header')

@section('content')

  <!-- Content area -->
  <div class="content-area">
        <div class="item page slide2 slide3" style="padding: 200px 0px 0px 0px;">
                <div class="caption">
                    <div class="container">
                        <div class="div-table">
                            <div class="div-cell">

                                <div class="form-background">
                                    <div class="form-header color">
                                        <h1 class="section-title">
                                            <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                                            <span class="title-inner">Register</span>
                                        </h1>
                                    </div>

                                <form id="registration-form-alt" name="registration-form-alt" class="registration-form alt" action="{{route('register')}}" method="post">
                                        @csrf
                                        <div class="row">
                                                <div class="col-sm-12 form-alert"></div>
                                                <div class="col-sm-12">
                                                        <div class="form-group selectpicker-wrapper">
                                                            <select
                                                                    class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                                    data-toggle="tooltip" title="Choose Your Account Type" name="user_type">
                                                                <option value="host">Become a Host</option>
                                                                <option value="sponsor">Become a Sponsor</option>
                                                            </select>
                                                        </div>
                                                        @error('user_type')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>
                                                <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="User Name" title="" data-toggle="tooltip" class="form-control input-name @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus data-original-title="Name is required">
                                                        </div>
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="email" placeholder="Enter Email" title="" data-toggle="tooltip" class="form-control input-name  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus data-original-title="Name is required">
                                                    </div>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="password"  placeholder="Password"  title="" data-toggle="tooltip" class="form-control input-password @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" data-original-title="Password">
                                                    </div>                                                    
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                </div>
                                                <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <input type="password"  placeholder="Password"  title="" data-toggle="tooltip" class="form-control input-password" name="password_confirmation" required autocomplete="new-password" data-original-title="Password">
                                                        </div>
                                                        @error('password_confirmation')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror  
                                                </div>                               
                                                <div class="col-sm-12">
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-theme btn-block submit-button" data-animation-delay="100" data-animation="flipInY"> Log in <i class="fa fa-arrow-circle-left"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                    </form>

                                </div>


                                <!-- Event description -->
                                <!-- /Event description -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  

</div>
<!-- /Content area -->

@endsection
