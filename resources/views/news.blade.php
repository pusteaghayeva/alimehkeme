@extends('main')
@section('content')
    @forelse($newss as $news)
<div class="blog-card">
    <div class="meta">
        @php

            $image_url = str_replace("\\","/",$news->image);

        @endphp
        <div class="photo" style="background-image: url('{{ asset('storage/'.$image_url)}}');"></div>
    </div>
    <div class="description">
        <h1>{{$news->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</h1>
        <p>{{mb_substr(html_entity_decode (strip_tags($news->content)), 0, 115) }}</p></p>
        <p class="small"> {{$news->created_at}}</p>
        <p class="read-more">
            <a href="{{route('singlenews', ['singlenews'=>$news->id])}}">Ardını oxu...</a>
        </p>
    </div>
</div>
@empty
@endforelse
    <div class="text-center"> {{$newss->appends(request()->input())->links()}}</div>
@endsection
