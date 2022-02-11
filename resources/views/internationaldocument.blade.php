@extends('main')
@section('content')

    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center">{{$category[0]->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</h2>
        <ul>
            @forelse($internationaldocuments as $internationaldocument)
                <li><a class="cool-link" href="{{asset('/storage/'.json_decode($internationaldocument->pdf)[0]->download_link)}}">{{$internationaldocument->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</a></li>
            @empty
            @endforelse
        </ul>
    </div>
    <div class="text-center"> {{$internationaldocuments->appends(request()->input())->links()}}</div>

@endsection