@extends('main')
@section('content')
    <div class="about-content container">
        @forelse($onlydecisions as $onlydecision)
        <h3 class="about-title text-center">{!! $onlydecision->getTranslatedAttribute('title', $locale, 'fallbackLocale') !!}</h3>
            <p class="about-text"> {!! $onlydecision->getTranslatedAttribute('content', $locale, 'fallbackLocale') !!}</p>
    </div>
    @empty
    @endforelse
    </div>
@endsection