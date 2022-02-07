@extends('main')
@section('content')
    <div class="decree-main container">
        <div class="decree">
            <div class="decree-info">
                @forelse($decres as $decre)
                    <p class="decree-black mb-0"> <br> {!!$decre->getTranslatedAttribute('content', $locale, 'fallbackLocale')!!}</p>
                @empty
                    @endforelse

            </div>
        </div>
    </div>
@endsection
