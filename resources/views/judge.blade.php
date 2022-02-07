@extends('main')
@section('content')
    <div class="about-content container">
        @forelse($judges as $judge)
            <h3 class="about-title">{{$judge->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</h3>
            <p class="about-text">{!!$judge->getTranslatedAttribute('content', $locale, 'fallbackLocale') !!}</p>
    </div>
    @empty
    @endforelse
    </div>

@endsection