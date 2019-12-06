@extends('header.header')

@section('content')

  <!-- Content area -->
  


  <div style="padding-top: 200px" class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        @forelse ($events as $event)
            {{$event->image}} {{$event->name}} {{$event->description}} {{$event->date}}
            <form method="POST" action="{{ url('subscribe') }}">
                <input type="hidden" name="event_id" value="{{ $event->id }}">
                {!! csrf_field() !!}
                <button type="submit" class="btn">
                    Subscribe
                </button>
            </form>
            <a href="{{ url('event/'.$event->id) }}" class="btn btn-success">Details</a>
            <br>
       @empty
           no events
       @endforelse
    </div>
</div>

<!-- /Content area -->

@endsection
