@extends('main')
@section('content')
    <div class="about-content container">
        <h3 class="about-title">{{$nmrferman->title}}</h3>
        <h3 class="second-title">{!! $nmrferman->content !!}</h3>
    </div>
@endsection