
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Event</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
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
                @if ($event ?? '')
                    {{$event->name}} {{$event->date}} {{$event->description}} {{$event->map}}  ${{$event->amount}}

                    
                    @if ( auth::user()->wallet >= $event->amount)
                        <form method="POST" action="{{ url('subscribe') }}">
                            <input type="hidden" name="event_id" value="{{ $event->id }}">
                            <input type="hidden" name="user_id" value="{{ $event->user_id }}">
                            <input type="hidden" name="amount" value="{{ $event->amount }}">

                            {!! csrf_field() !!}
                            <button type="submit" class="btn btn-theme">
                                Subscribe
                            </button>
                        </form>

                        current wallet balnec: {{ auth::user()->wallet }}
                    @else
                        {{ 'no' }}
                    @endif

                @else
                    something went wrong try again
                @endif
            </div>
        </div>
    </body>
</html>
