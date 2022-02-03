{{--@extends('main')--}}
{{--@section('content')--}}


{{--    <div class="about-content container">--}}

{{--        <h3 class="about-title">Bülletenlər</h3>--}}
{{--        @forelse($bulletins as $bulletin)--}}
{{--            <p class="about-text"> {!! $bulletin->content !!}</p>--}}
{{--    </div>--}}
{{--    @empty--}}
{{--    @endforelse--}}

{{--    <div class="first-down-menu container">--}}
{{--        <ul>--}}
{{--            @forelse($bulletins as $bulletin)--}}
{{--                <li><a class="cool-link" href="{{route('bulletin', ['bulletin'=>$bulletin->id])}}">{!! $bulletin->title !!}</a></li>--}}
{{--                <li><a class="cool-link" href="{{asset('/storage/'.json_decode($bulletin->pdf)[0]->download_link)}}">{!! $bulletin->title !!}</a></li>--}}

{{--            @empty--}}
{{--            @endforelse--}}
{{--        </ul>--}}

{{--    </div>--}}
{{--@endsection--}}


@extends('main')
@section('content')

    <div class="about-content container pt-3">
{{--        <h3 class="about-title text-center"></h3>--}}
        @forelse($bulletins as $bulletin)
            <p class="about-text"> {!! $bulletin->content!!}</p>
    </div>
    @empty
    @endforelse

    </div>


{{--        <div class="about-content container">--}}
{{--            <h3 class="about-title">Bülletenlər</h3>--}}
{{--            @forelse($bulletins as $bulletin)--}}
{{--                <p class="about-text"> {!! $bulletin->content !!}</p>--}}
{{--        </div>--}}
{{--        @empty--}}
{{--            boshdur.--}}
{{--        @endforelse--}}


{{--        <div class="first-down-menu container">--}}
{{--            <ul>--}}
{{--                @forelse($bulletins as $bulletin)--}}
{{--                    <li><a class="cool-link" href="{{asset('/storage/'.json_decode($bulletin->pdf)[0]->download_link)}}">{!! $bulletin->title !!}</a></li>--}}
{{--                    <li><a class="cool-link" href="{{asset('/storage/($bulletin->pdf)[0]->download_link')}}">{!! $bulletin->title !!}</a></li>--}}
{{--                @empty--}}
{{--                @endforelse--}}
{{--            </ul>--}}
{{--        </div>--}}

@endsection