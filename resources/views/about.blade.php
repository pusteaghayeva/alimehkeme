@extends('main')
@section('content')

    <div class="about-content container">

        <h3 class="about-title text-center">Ümumi məlumat</h3>
        @forelse($abouts as $about_item)
        <p class="about-text"> {!! $about_item->content !!}</p>
        @empty
            boshdur
        @endforelse

    </div>

@endsection