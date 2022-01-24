@extends('main')
@section('content')

    <div class="video_gallery  container">
        <div class="row">
            @forelse($videos as $video)
            <div class="video-container col-12 col-sm-6 col-md-4 col-xl-4">

                <div class="responsive-video ">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/PZczpWG2VfU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        {!! $video->image !!}
                    </iframe>
                </div>

            </div>
            @empty
            @endforelse
        </div>
    </div>


@endsection