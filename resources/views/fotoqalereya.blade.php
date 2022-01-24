@extends('main')
@section('content')

    <section id="gallery">

        <div class="container">

            <div id="image-gallery">
                <div class="row">
                    @forelse($fotoqalereyas as $fotoqalereya)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                        <div class="img-wrapper">
                            <a href="{{asset('storage/'.$fotoqalereya->image)}}"><img src="{{asset('storage/'.$fotoqalereya->image)}}" class="img-responsive"></a>
                            <div class="img-overlay">
                                <i class="fas fa-expand-alt" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    @empty
                    @endforelse

                </div>
            </div>
        </div>
    </section>


@endsection