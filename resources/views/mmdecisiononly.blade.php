@extends('main')
@section('content')
    <div class="decree-main container">
        <div class="decree">
            <div class="decree-info">
                @foreach($mmdecisiononlies as $mmdecisiononly)
                    <p class="decree-black"> <br> {!!$mmdecisiononly->getTranslatedAttribute('content', $locale, 'fallbackLocale') !!}</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection
