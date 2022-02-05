@extends('main')
@section('content')
    <div class="college container">
        @forelse($colleges as $college)
        <h3 class="college-title fw-bold">{{ $college->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}</h3>
        <div class="person-info">
            <img src="{{asset('/storage/'.$college->image)}}" style="width: 380px; height:270px;" alt="">
            <div class="about-info">
                <h3 class="name">{{ $college->getTranslatedAttribute('name', $locale, 'fallbackLocale') }}</h3>
                <p class="college-info position">
                    {{$college->getTranslatedAttribute('position', $locale, 'fallbackLocale') }}
                </p>
                <p class="college-info date">{{ $college->getTranslatedAttribute('year', $locale, 'fallbackLocale')}}</p>
                <p class="college-info education">
                    {{ $college->getTranslatedAttribute('education', $locale, 'fallbackLocale')}}
                </p>
            </div>
        </div>
        <h2 class="experience">{!! $college->getTranslatedAttribute('content', $locale, 'fallbackLocale') !!} </h2>

        @empty
        @endforelse
    </div>

@endsection