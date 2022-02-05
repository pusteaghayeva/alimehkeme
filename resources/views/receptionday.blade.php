@extends('main')
@section('content')

    <div class="first-down-menu container">
        @forelse($receptiondays as $receptionday)
        <h2 class="first-dm-title">{{$receptionday->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</h2>
        <div class="first-down-title">
            <p>{!! $receptionday->getTranslatedAttribute('content', $locale, 'fallbackLocale') !!}</p>
        </div>
        @empty
        @endforelse

    </div>
@endsection