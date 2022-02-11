@extends('main')
@section('content')
    <div class="decree-main container">
        <div class="decree">
            <div class="decree-info">
                @forelse($rhdecisions as $rhdecision)
                    <p class="decree-black"> <br> {!!$rhdecision->getTranslatedAttribute('content', $locale, 'fallbackLocale') !!}</p>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection
