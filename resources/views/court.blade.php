@extends('main')
@section('content')

    <div class="about first-down-menu container">
{{--        <h2 class="first-dm-title text-center">{{$category[0]->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</h2>--}}
        <h2 class="first-dm-title text-center">{{$category[0]->title}}</h2>

    @forelse($courts as $court)
        <div class="first-down-title">
            <div class="card court-card">
                <div class="card-body">
                    <a href="{{route('decre', ['decre'=>$court->id])}}" class="court-link">{{$court->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</a>
                </div>
            </div>
        </div>
            @empty
        @endforelse
    </div>

@endsection