@extends('main')
@section('content')

{{--    <div class="first-down-menu container">--}}
{{--        <section class="blog-area pt-5 pb-5">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xl-12 text-center pb-3">--}}
{{--                        <div class="section-title service-title">--}}
{{--                            <h2>Xəbərlər</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    @forelse($newss as $news)--}}
{{--                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">--}}
{{--                        <div class="blog-wrapper home-blog-wrapper white-bg">--}}
{{--                            <div class="blog-thumb">--}}
{{--                                <a href="{{route('singlenews', ['singlenews'=>$news->id])}}">--}}
{{--                                    <img src="{{asset('storage/'.$news->image)}}" alt="" />--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="meta-info">--}}
{{--                                <ul>--}}
{{--                                    <li class="posts-time">{{$news->created_at}}</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="blog-content home-blog">--}}
{{--                                <h2 class="blog-title">--}}
{{--                                    <a href="{{route('singlenews', ['singlenews'=>$news->id])}}">{{ Str::limit($news->title, 90) }}</a>--}}
{{--                                </h2>--}}
{{--                                <p class="font-small">{{mb_substr(html_entity_decode (strip_tags($news->content)), 0, 120) }}</p>--}}
{{--                            </div>--}}
{{--                            <div class="link-box home-blog-link">--}}
{{--                                <a href="{{route('singlenews', ['singlenews'=>$news->id])}}">Ardını oxu</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    @empty--}}
{{--                    @endforelse--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <ul>--}}
{{--            @forelse($newss as $news)--}}
{{--                <li><a class="cool-link" href="{{route('singlenews', ['singlenews'=>$news->id])}}">{!! $news->title !!}</a></li>--}}
{{--            @empty--}}
{{--            @endforelse--}}
{{--        </ul>--}}

{{--    </div>--}}


@forelse($newss as $news)
<div class="blog-card">
    <div class="meta">
{{--        <div class="photo" style="background-image:url("{{asset('storage/'.$news->image)}}")"></div>--}}
        <div class="photo" style="background-image: url('{{ asset('storage/.$news->image')}}');"></div>
{{--    <img src="{{asset('storage/'.$news->image)}}" class="w-100 h-100">--}}
    </div>
    <div class="description">
        <h1>{{$news->title}}</h1>
{{--        <h2></h2>--}}
        <p>{{mb_substr(html_entity_decode (strip_tags($news->content)), 0, 115) }}</p></p>
        <p class="small"> {{$news->created_at}}</p>
        <p class="read-more">
            <a href="{{route('singlenews', ['singlenews'=>$news->id])}}">Ardını oxu...</a>
        </p>
    </div>
</div>
@empty
@endforelse
@endsection