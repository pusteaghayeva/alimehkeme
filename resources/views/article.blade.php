@extends('main')
@section('content')

    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center">Məqalələr</h2>
        <ul>
            @forelse($articles as $article)
                <li><a class="cool-link" href="{{route('inarticle', ['inarticle'=>$article->id])}}">{{$article->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</a></li>
            @empty
            @endforelse
        </ul>
    </div>
    <div class="text-center"> {{$articles->appends(request()->input())->links()}}</div>
@endsection