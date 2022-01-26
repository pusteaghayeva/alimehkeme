@extends('main')
@section('content')

    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center">Milli Məclisin qərarları</h2>
        <ul>
            @forelse($mmdecisions as $mmdecision)
                <li><a class="cool-link" href="{{route('mmdecisiononly', ['mmdecisiononly'=>$mmdecision->id])}}">{!! $mmdecision->title !!}</a></li>
            @empty
            @endforelse
        </ul>

    </div>

@endsection