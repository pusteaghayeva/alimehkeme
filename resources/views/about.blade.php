@extends('main')
@section('content')
    <div class="about-content container">
        @forelse($abouts as $about_item)
            <h3 class="about-title text-center">{{$about_item->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}</h3>
        <p class="about-text">{!! $about_item->getTranslatedAttribute('content', $locale, 'fallbackLocale') !!}</p>
        @empty
            boshdur.
        @endforelse

    </div>

@endsection