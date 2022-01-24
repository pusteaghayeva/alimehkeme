@extends('main')
@section('content')
    <div class="first-down-menu container">
        @forelse($orders as $order)
        <div class="first-down-title">
            <p class="first-dm-title">{!! $order->content !!}</p>
        </div>
        @empty
        @endforelse
    </div>
@endsection
