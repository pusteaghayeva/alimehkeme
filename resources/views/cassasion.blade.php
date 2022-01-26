@extends('main')
@section('content')

    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center">Kassasiya şikayətinin verilməsi qaydası</h2>
        @forelse($cassasions as $cassasion)
        <div class="first-down-title">
            {!! $cassasion->content !!}
        </div>
        @empty
        @endforelse
    </div>
@endsection