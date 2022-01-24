@extends('main')
@section('content')



    <div class="news container ">
        <div class="news_title">
            <h1 class="news_head">{{__('all.news')}}</h1>
            <a href="news.html" class="more_button">{{__('all.more')}} </a>
        </div>
        <div class="row">
            @forelse($news as $news_item)
                <div class="col-12 col-sm-6 col-md-4 col-xl-4 news-content">
                    <figure class="snip1208">
                        <img src="{{asset('storage/'.$news_item->image)}}" alt="sample66"/>
                        <figcaption>
                            <h5><a href="single_news.html">{{ mb_substr($news_item->title, 0, 45) }}...

                                </a></h5>
                            <span>
                               {{$news_item->date}}
                            </span>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
            @empty
                Boşdur.
            @endforelse
        </div>
    </div>



@endsection
@section('js')
    <script>
        for (let b = 1; b <= 3; b++) {
            $(".img-item" + b).mouseover(function () {
                $(".img-item" + b).attr("src", "assets/img/h-" + b + ".png");
            });
            $(".img-item" + b).mouseout(function () {
                $(".img-item" + b).attr("src", "assets/img/c-" + b + ".png");
            });
        }
        $(document).ready(function () {
            $('.owl-carousel4').owlCarousel({
                loop: true,
                margin: 30,
                nav: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 2

                    },
                    380: {
                        items: 2
                    },
                    476: {
                        items: 3
                    },
                    576: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    992: {
                        items: 3
                    },
                    1100: {
                        items: 3
                    },
                    1200: {
                        items: 6
                    }
                }
            })
        });
    </script>
@endsection