@extends('main')
@section('content')

    <div class="first-down-menu container">
        <h2 class="first-dm-title">Mülki və inzibati kollegiyalara apellyasiya şikayətinin verilməsi qaydası</h2>
        @forelse($cassasions as $cassasion)
        <div class="first-down-title">
            {!! $cassasion->content !!}
        </div>
        @empty
        @endforelse
    </div>
@endsection