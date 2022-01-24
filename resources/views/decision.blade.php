@extends('main')
@section('content')

<div class="first-down-menu container">
    <h2 class="first-dm-title text-center">Hesabatlar</h2>
    <ul>
        @forelse($decisions as $decision)
        <li><a class="cool-link" href="{{route('report', ['report'=>$decision->id])}}">{!! $decision->title !!}</a></li>
        @empty
        @endforelse
    </ul>

</div>

@endsection