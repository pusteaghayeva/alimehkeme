@extends('main')
@section('content')

    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center">Apellyasiya şikayəti verilmə qaydası</h2>
        @forelse($appelyasiyas as $appelyasiya)

        <ul>

                <li><a class="cool-link" href="{{route('chappelyasiya', ['chappelyasiya'=>$appelyasiya->id])}}">{!! $appelyasiya->getTranslatedAttribute('title', $locale, 'fallbackLocale') !!}</a></li>
        </ul>
        @empty
        @endforelse
    </div>

@endsection

