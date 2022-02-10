@extends('main')
@section('content')
        <div class="about-content container mb-2">
                <h3 class="about-title text-center">Bülletenlər</h3>
                @forelse($bulletins as $bulletin)
                <div class="">
                    <p class="about-text"> {!! $bulletin->getTranslatedAttribute('content', $locale, 'fallbackLocale') !!}</p>
                </div>
            @empty
                boshdur.
            @endforelse
            </div>

        <div class="first-down-menu container ">
            <ul>
                @forelse($bulletins as $bulletin)
                    <li><a class="cool-link" href="{{asset('/storage/'.$bulletin->pdf)}}">{{$bulletin->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</a></li>
                @empty
                @endforelse
            </ul>
        </div>

        <div class="text-center"> {{$bulletins->appends(request()->input())->links()}}</div>

@endsection