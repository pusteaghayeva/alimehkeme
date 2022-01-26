@extends('main')
@section('content')

    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center">Azərbaycan Respublikası Ali Məhkəməsi Plenum qərarları</h2>
        <ul>
            @forelse($ampdecisions as $ampdecision)
                <li><a class="cool-link" href="{{route('ampdecisiononly', ['ampdecisiononly'=>$ampdecision->id])}}">{!! $ampdecision->title !!}</a></li>
            @empty
            @endforelse
        </ul>

    </div>

@endsection