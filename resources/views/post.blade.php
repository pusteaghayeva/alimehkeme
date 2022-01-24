@extends('main')
@section('content')

    <div class="about-content container">
        <h3 class="about-title">{{$posts->title}}</h3>
        <h3 class="second-title">{!! $posts->category_id !!}</h3>
    </div>

@endsection