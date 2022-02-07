@extends('main')
@section('content')
<div class="decree-main container">
    <div class="decree">
        <div class="decree-info">
            @forelse($constitutiononlys as $constitutiononly)
                <p class="decree-black"> <br> {!!$constitutiononly->getTranslatedAttribute('content', $locale, 'fallbackLocale')!!}</p>
            @empty
            @endforelse
        </div>
    </div>
</div>
@endsection
