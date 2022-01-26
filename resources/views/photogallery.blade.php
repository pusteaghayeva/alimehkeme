@extends('main')
@section('content')
    <section id="gallery">
        <div class="container">
            <div id="image-gallery">
                <div class="row">
                    @forelse($galleries as $gallery)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                        <div class="img-wrapper">
                            <a href="assets/img/today1.gif"><img src="assets/img/today1.gif" class="img-responsive"></a>
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

{{--    <div class="first-down-menu container">--}}
{{--        <h2 class="first-dm-title text-center">Rəyasət heyətinin qərarları</h2>--}}
{{--        @forelse($decisions as $decision)--}}
{{--            <ul>--}}
{{--                <li><a class="cool-link" href="">{!! $decision->title !!}</a></li>--}}
{{--            </ul>--}}

{{--        @empty--}}
{{--        @endforelse--}}

    </div>
@endsection