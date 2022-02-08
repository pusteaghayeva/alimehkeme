@extends('main')
@section('content')
<div class="colleges single-news container">
    @forelse($singlenewss as $singlenews)
    <h2 class="coll-title text-center ">{{$singlenews->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</h2>
    <img src="{{asset('storage/'.$singlenews->image)}}" class="coll-image m-auto" alt="">
    <p class="coll-text text-justify">{!!$singlenews->getTranslatedAttribute('content', $locale, 'fallbackLocale')!!}</p>
    @empty
    @endforelse
</div>
@endsection
