@extends('main')
@section('content')


    <div class="about-content container">

{{--        <h3 class="about-title">{{$reyasets->title}}</h3>--}}
        @forelse($reyasets as $reyaset)
            <p class="about-text"> {!! $reyaset->content !!}</p>

    </div>
        @empty
        @endforelse

    </div>

@endsection