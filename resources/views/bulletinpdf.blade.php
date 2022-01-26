@extends('main')
@section('content')
    <div class="decree-main container">
        <div class="decree">
            <div class="decree-info">
                @forelse($bulletinpdfs as $bulletinpdf)
                    <p class="decree-black"> <br> {{$bulletinpdf->pdf}}</p>
                    <li><a class="cool-link" href="{{asset('/storage/'.json_decode($bulletin->pdf)[0]->download_link)}}">{!! $bulletin->title !!}</a></li>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection
