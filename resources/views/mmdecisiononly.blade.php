@extends('main')
@section('content')
    <div class="decree-main container">
        <div class="decree">
            <div class="decree-info">
                @forelse($mmdecisiononlies as $mmdecisiononly)
                    <p class="decree-black"> <br> {!!$mmdecisiononly->getTranslatedAttribute('content', $locale, 'fallbackLocale') !!}</p>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection
