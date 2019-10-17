@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <form method="POST" action="{{ url('event') }}">
                    {!! csrf_field() !!}
                    <input type="text" placeholder="Event Title" name="name">
                    <input type="date" placeholder="Event Date" name="date">
                    <input type="text" placeholder="Event Address" name="address">
                    <input type="text" placeholder="Event Map" name="map">
                    <input type="text" placeholder="Event Description" name="description">
                    <input type="file" name="image">

                    <button type="submit" class="btn">
                        create
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
