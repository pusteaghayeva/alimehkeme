@extends('main')
@section('content')

    <div class="about-content container">


        @forelse($nmrcourts as $nmrcourt)
            <h3 class="about-title">test</h3>
        <p class="about-text"> {!! $nmrcourt->text !!}</p>
            @empty
            Boshdur.
        @endforelse
    </div>

@endsection