@extends('main')
@section('content')
    <div class="decree-main container">
        <div class="decree">
            <div class="decree-info">
                @forelse($decresorderonlies as $decresorderonly)
                    <p class="decree-black"> <br> {!!$decresorderonly->getTranslatedAttribute('content', $locale, 'fallbackLocale')!!}</p>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection
