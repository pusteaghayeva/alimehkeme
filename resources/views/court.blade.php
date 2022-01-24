@extends('main')
@section('content')

    <div class="about first-down-menu container">
        <h2 class="first-dm-title text-center">Ali Məhkəmə - 90</h2>

    @forelse($courts as $court)
        <div class="first-down-title">
            <div class="card court-card">
                <div class="card-body">
                    <a href="{{route('decre', ['decre'=>$court->id])}}" class="court-link">{!! $court->title !!}</a>
                </div>
            </div>

        </div>
            @empty
        @endforelse
    </div>

@endsection