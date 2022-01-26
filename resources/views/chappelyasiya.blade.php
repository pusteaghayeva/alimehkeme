@extends('main')
@section('content')
    <div class="decree-main container">
        <div class="decree">
            <div class="decree-info">
                @forelse($chappelyasiyas as $chappelyasiya)
                    <p class="decree-black"> <br> {!! $chappelyasiya->content  !!}</p>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection
