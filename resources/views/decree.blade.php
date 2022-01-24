@extends('main')
@section('content')
    <div class="decree-main container">
        <div class="decree">
{{--            <img src="assets/img/gerb.png" class="decree-img" alt="">--}}
            <div class="decree-info">
                @forelse($decres as $decre)
                    <p class="decree-black"> <br> {!! $decre->content  !!}</p>
                @empty
                    @endforelse

            </div>
        </div>
    </div>
@endsection
