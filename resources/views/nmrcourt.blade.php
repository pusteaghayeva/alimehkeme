@extends('main')
@section('content')

    <div class="about-content container">

        <h3 class="about-title text-center">Naxçıvan MR Məhkəmələri</h3>
        @forelse($nmrcourts as $nmrcourt)
            <p class="about-text"> {!! $nmrcourt->content !!}</p>
        @empty
            boshdur
        @endforelse

    </div>

@endsection