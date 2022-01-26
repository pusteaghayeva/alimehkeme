@extends('main')
@section('content')
    <div class="letters">
        <div class="letter-write container">

            <div class="letter">
                <p class="letter-title text-center">Naxçıvan MR Ali Məhkəməsinə məktub yazmaq qaydaları</p>
                <div class="letter-first text-justify">
                    @forelse($letters as $letter)
                    <p class="rules"> {!! $letter->content !!}</p>
                    @empty
                    @endforelse
                </div>
                <button class="apply" onclick="window.location.href='{{route('mail')}}'">{!! $letter->button !!}</button>

            </div>
        </div>
    </div>



@endsection