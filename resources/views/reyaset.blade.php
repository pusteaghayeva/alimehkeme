@extends('main')
@section('content')
    <div class="about-content container">
        @forelse($reyasets as $reyaset)
            <p class="about-text"> {!! $reyaset->getTranslatedAttribute('content', $locale, 'fallbackLocale') !!}</p>
    </div>
        @empty
        @endforelse
    </div>
@endsection