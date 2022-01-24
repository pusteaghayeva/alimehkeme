@extends('main')
@section('content')


    <div class="first-down-menu container">
        <h2 class="first-dm-title">Qəbul günləri</h2>
        <div class="first-down-title">
            @forelse($receptiondays as $receptionday)
            <p>{!! $receptionday->content !!}</p>
                @empty
            @endforelse
    </div>



    </div>
@endsection