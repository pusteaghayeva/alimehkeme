@extends('main')
@section('content')


    <div class="about-content container">
                <h3 class="about-title">Hakimlər</h3>
        @forelse($judges as $judge)
            <p class="about-text"> {!! $judge->getTranslatedAttribute('content', $locale, 'fallbackLocale') !!}</p>
{{--            <p class="about-text"> {!! $judge->content !!}</p>--}}
    </div>
    @empty
    @endforelse
    </div>

@endsection