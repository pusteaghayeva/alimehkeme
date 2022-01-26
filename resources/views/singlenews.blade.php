@extends('main')
@section('content')
<div class="colleges single-news container">
    @forelse($singlenewss as $singlenews)
    <h2 class="coll-title text-center ">{{$singlenews->title}}</h2>
    <img src="{{asset('storage/'.$singlenews->image)}}" class="coll-image m-auto" alt="">
    <p class="coll-text text-justify">{!! $singlenews->content !!}</p>
    @empty
    @endforelse
</div>
@endsection
