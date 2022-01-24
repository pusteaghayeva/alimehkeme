@extends('main')
@section('content')

{{--    <div class="about first-down-menu container">--}}
{{--        <h2 class="first-dm-title text-center">Məqalələr</h2>--}}

{{--        @forelse($articles as $article)--}}
{{--            <div class="first-down-title">--}}
{{--                <div class="card court-card">--}}
{{--                    <div class="card-body">--}}
{{--                        <a href="{{route('inarticle', ['inarticle'=>$article->id])}}" class="court-link">{!! $article->title !!}</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        @empty--}}
{{--        @endforelse--}}
{{--    </div>--}}


    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center">Məqalələr</h2>
        <ul>
            @forelse($articles as $article)
                <li><a class="cool-link" href="{{route('inarticle', ['inarticle'=>$article->id])}}">{!! $article->title !!}</a></li>
            @empty
            @endforelse


        </ul>



    </div>
@endsection