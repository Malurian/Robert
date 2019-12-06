@extends('header.header')

@section('content')

  <!-- Content area -->
        <div style="padding: 200px 0 350px 0; text-align: center" class="flex-center position-ref full-height">
            <div class="content">
                @forelse ($subscribers as $data)
                    {{ $data }}
                @empty
                    no subscribers
                @endforelse
            </div>
        </div>
<!-- /Content area -->

@endsection

