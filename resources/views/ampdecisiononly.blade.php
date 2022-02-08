@extends('main')
@section('content')
    <div class="decree-main container">
        <div class="decree">
            <div class="decree-info">
                @forelse($ampdecisiononlies as $ampdecisiononly)
                    <p class="decree-black"> <br> {!!$ampdecisiononly->getTranslatedAttribute('content', $locale, 'fallbackLocale')!!}</p>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection
