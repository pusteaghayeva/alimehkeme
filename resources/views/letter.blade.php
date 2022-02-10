@extends('main')
@section('content')
    <div class="letters">
        <div class="letter-write container">

            <div class="letter">

                <div class="letter-first text-justify">
                    @forelse($letters as $letter)
                        <p class="letter-title text-center">{{$letter->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</p>
                    <p class="rules">{!! $letter->getTranslatedAttribute('content', $locale, 'fallbackLocale') !!}</p>
                    @empty
                    @endforelse
                </div>
                <button class="apply" onclick="window.location.href='{{route('mail')}}'">{{$letter->getTranslatedAttribute('button', $locale, 'fallbackLocale') }}</button>
            </div>
        </div>
    </div>



@endsection