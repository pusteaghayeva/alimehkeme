@extends('main')
@section('content')
    <div class="decree-main container">
        <div class="decree">
            <div class="decree-info">
                @forelse($inarticles as $inarticle)
                    <p class="decree-black"> <br> {!! $inarticle->content  !!}</p>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection
