@extends('main')
@section('content')
    <div class="decree-main container">
        <div class="decree">
            <div class="decree-info">
                @forelse($rhdecisions as $rhdecision)
                    <p class="decree-black"> <br> {!! $rhdecision->content  !!}</p>
                @empty
                @endforelse


            </div>
        </div>
    </div>
@endsection
