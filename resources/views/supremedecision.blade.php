@extends('main')
@section('content')

    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center">Rəyasət heyətinin qərarları</h2>
        <ul>
            @forelse($supremedecisions as $supremedecision)
                <li><a class="cool-link" href="{{route('rhdecision', ['rhdecision'=>$supremedecision->id])}}">{!! $supremedecision->getTranslatedAttribute('title', $locale, 'fallbackLocale') !!}</a></li>
            @empty
            @endforelse
        </ul>

    </div>
@endsection