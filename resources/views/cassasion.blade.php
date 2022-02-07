@extends('main')
@section('content')

    <div class="first-down-menu container">
        @forelse($cassasions as $cassasion)
            <h2 class="first-dm-title text-center">{{$cassasion->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</h2>
            <div class="first-down-title">
            {!! $cassasion->getTranslatedAttribute('content', $locale, 'fallbackLocale') !!}
        </div>
        @empty
        @endforelse
    </div>
@endsection