@extends('main')
@section('content')
    <div class="container">
        @if(!empty($videos[0]))
            <div class="row m-auto">
                @foreach ($videos as $video)
                    <div class="col-lg-4 col-md-6 col-sm-12" style="margin: 20px auto">
                        <iframe width="280" height="150" src="https://www.youtube.com/embed/{{$video->link}}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection