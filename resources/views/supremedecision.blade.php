@extends('main')
@section('content')
    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center">{{$category[0]->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</h2>
        <ul>
            @forelse($supremedecisions as $supremedecision)
                <li><a class="cool-link" href="{{route('rhdecision', ['rhdecision'=>$supremedecision->id])}}">{!! $supremedecision->getTranslatedAttribute('title', $locale, 'fallbackLocale') !!}</a></li>
            @empty
            @endforelse
        </ul>
    </div>
    <div class="text-center"> {{$supremedecisions->appends(request()->input())->links()}}</div>
@endsection