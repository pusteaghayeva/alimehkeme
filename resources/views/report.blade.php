@extends('main')
@section('content')
    <div class="decree-main container">
        <div class="decree">
            <div class="decree-info">
                @forelse($reports as $report)
                    <p class="decree-black"> <br> {!!$report->getTranslatedAttribute('content', $locale, 'fallbackLocale')!!}</p>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection
