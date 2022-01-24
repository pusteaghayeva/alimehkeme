@extends('main')
@section('content')

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @forelse($sliders as $slider)
                <div class="carousel-item  {{$slider->id ==1 ? 'active' : ''}}">
                    <img class="d-block w-100  img-responsive first-img" src="{{asset('storage/'.$slider->image)}}"
                         alt="First slide">
                </div>
            @empty
                Yox
            @endforelse

            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

{{--    <div class="contact container">--}}
{{--        <h1 class="contact_title"></h1>--}}
{{--        <div class="container">--}}
{{--            <h2 class="text-center text-bold contact-border"></h2>--}}
{{--            <div class="starter-template">--}}
{{--                <div class="row contact-row">--}}
{{--                    @forelse($contacts as $contact)--}}
{{--                        <div class="col-12 col-sm-12 col-md-4 contact-item">--}}
{{--                            <section class="hover-div">--}}
{{--                                <i class=""></i>--}}
{{--                                <div class="hover-div_inner">--}}
{{--                                    <h3><a href="{{route('contact', ['slug'=>$contact->link])}}">{{$contact->title}}</a></h3>--}}
{{--                                    <p class="text-center">{{$contact->description}}</p>--}}
{{--                                </div>--}}
{{--                            </section>--}}
{{--                        </div>--}}
{{--                    @empty--}}
{{--                        Yoxdur.--}}
{{--                    @endforelse--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="contact container">
        <h1 class="contact_title"></h1>
        <div class="container">
            <h2 class="text-center text-bold contact-border"></h2>
            <div class="starter-template">
                <div class="row contact-row">
                    <div class="col-12 col-sm-12 col-md-4 contact-item">
                        <section class="hover-div">
                            <i class="fas fa-phone-alt"></i>
                            <div class="hover-div_inner">
                                <h3><a href="{{route('contact')}}">Əlaqə</a></h3>
                                <p class="text-center">Əlaqə üçün telefon nömrələri</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 contact-item">
                        <section class="hover-div">
                            <i class="fas fa-user-edit"></i>
                            <div class="hover-div_inner">
                                <h3><a href="{{route('letter')}}">Onlayn müraciət</a></h3>
                                <p class="text-center">Məktub yazmaq qaydaları</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 contact-item">
                        <section class="hover-div">
                            <i class="fas fa-calendar-alt"></i>
                            <div class="hover-div_inner">
                                <h3><a href="{{route('receptionday')}}">Qəbul günləri</a></h3>
                                <p class="text-center">Qəbulun təşkil edilməsi</p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <div class="card-complaint container">
        <div class="row">
            @forelse($complaints as $key => $complaint)
                <div class="card category-item1 col-12 col-sm-12 col-md-4 col-xl-4">
                    <a href="apellyasiya.html" class="card-link">
                        <img class="img-item{{$key+1}}" src="{{asset('storage/'.$complaint->image)}}" alt="sample66"/>
                    </a>
                </div>
            @empty
                Boşdur.
            @endforelse
        </div>
    </div>

    <div class="usefull-links container">
        <h1 class="link_title">{{__('all.usefull_links')}}</h1>
        <div class="owl-carousel owl-carousel4 owl-theme row">
            @forelse($usefull_links as $usefull_link)
                <a href="{$usefull_link->link}" class="useful-link-img" target="blank">
                    <img src="{{asset('storage/'.$usefull_link->image)}}" alt="">
                </a>
            @empty
                Boşdur.
            @endforelse

        </div>
    </div>


    <div class="carousel-second container">
        <h1 class="link_title">{{__('all.nakhchivan_today')}}</h1>
        <div class="owl-carousel owl-carousel1 owl-theme  p-0">
            @forelse($slider_todays as $slider_today)
                <div class="carousel-img">
                    <img class="d-block img-nmr" src="{{asset('storage/'.$slider_today->image)}}" alt="First slide">
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
                        items: 6
                    },
                    768: {
                        items: 6
                    },
                    992: {
                        items: 6
                    },
                    1100: {
                        items: 6
                    },
                    1200: {
                        items: 6
                    }
                }
            })
        });
    </script>
@endsection