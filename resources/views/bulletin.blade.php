@extends('main')
@section('content')
    <div class="about-content container mb-2">
        @forelse($bulletins as $bulletin)
            <div class="">
                <p class="about-text"> {!! $bulletin->getTranslatedAttribute('content', $locale, 'fallbackLocale') !!}</p>
            </div>
        @empty
            boşdur.
        @endforelse
    </div>

    <div class="first-down-menu container ">
        <ul>
            @forelse($bulletins as $bulletin)
                @php $bulletin->pdf = json_decode($bulletin->pdf) @endphp
            @empty($bulletin->pdf)
                @continue
            @else
                <li><a class="cool-link"
                       href="{{asset('/storage/'.$bulletin->pdf[0]->download_link)}}">{{$bulletin->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</a>
                </li>
            @endempty
            @empty
            @endforelse
        </ul>
    </div>

    <div class="text-center"> {{$bulletins->appends(request()->input())->links()}}</div>

@endsection