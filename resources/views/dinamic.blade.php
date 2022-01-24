@extends('main')
@section('content')

    <div class="about-content container">
        <h3 class="about-title">{{$page->title}}</h3>
        <h3 class="second-title">{!! $page->body !!}</h3>



    </div>

@endsection