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

<br>
<br>
<br>

                <div>
                    subscribed events <br>

                    @forelse ($my_subscribed_events as $event)
                    {{ $event->event->name }}
                    <form method="POST" action="{{ url('subscribe', $event->id) }}">
                        <input type="hidden" name="_method" value="delete" />
                        {!! csrf_field() !!}
                        <button type="submit" class="btn">
                            Un-Subscribe
                        </button>
                    </form>
                    @empty
                        you have not subscribed for any event
                    @endforelse
                </div>

<br>
<br>
<br>

                <div>
                    created events <br>

                    @forelse ($my_created_events as $event)
                    {{ $event->name }}
                    <form method="POST" action="{{ url('event', $event->id) }}">
                        <input type="hidden" name="_method" value="delete" />
                        {!! csrf_field() !!}
                        <button type="submit" class="btn">
                            Delete Event
                        </button>
                    </form>
                    <a href="{{ url('subscriber/'.$event->id ) }}">View Event Subscribers</a>

                        <br>
                    @empty
                        You have Created Any Event
                    @endforelse


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
