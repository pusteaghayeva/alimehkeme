@extends('main')
@section('content')


    <div class="about-content container">
        <h3 class="about-title text-center">Qərarlar</h3>
        @forelse($onlydecisions as $onlydecision)
            <p class="about-text"> {!! $onlydecision->content !!}</p>
    </div>
    @empty
    @endforelse

    </div>

@endsection