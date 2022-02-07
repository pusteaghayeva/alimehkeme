@extends('main')
@section('content')
    <div class="decree-main container">
        <div class="decree">
            <div class="decree-info">
                @forelse($kmdecisiononlies as $kmdecisiononly)
                    <p class="decree-black"> <br> {!!$kmdecisiononly->getTranslatedAttribute('content', $locale, 'fallbackLocale')!!}</p>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection
