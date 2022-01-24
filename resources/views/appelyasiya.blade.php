{{--@extends('main')--}}
{{--@section('content')--}}

{{--    <div class="first-down-menu container">--}}
{{--        <h2 class="first-dm-title">Apellyasiya şikayəti verilmə qaydası</h2>--}}
{{--        @forelse($appelyasiyas as $appelyasiya)--}}
{{--            <div class="first-down-title">--}}
{{--                {!! $appelyasiya->content !!}--}}
{{--            </div>--}}
{{--        @empty--}}
{{--        @endforelse--}}
{{--    </div>--}}
{{--@endsection--}}

@extends('main')
@section('content')

    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center">Apellyasiya şikayəti verilmə qaydası</h2>
        <ul>
            @forelse($appelyasiyas as $appelyasiya)
                <li><a class="cool-link" href="{{route('chappelyasiya', ['chappelyasiya'=>$appelyasiya->id])}}">{!! $appelyasiya->title !!}</a></li>
            @empty
            @endforelse
        </ul>

    </div>

@endsection

