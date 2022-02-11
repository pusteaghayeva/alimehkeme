@extends('main')
@section('content')

    <div class="about-content container">
        @forelse($nmrcourts as $nmrcourt)
            <h3 class="about-title text-center">{{$nmrcourt->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</h3>
            <p class="about-text"> {!! $nmrcourt->getTranslatedAttribute('content', $locale, 'fallbackLocale') !!}</p>
        @empty
            boşdur.
        @endforelse

    </div>

@endsection