@extends('main')
@section('content')
    <div class="decree-main container">
        <div class="decree">
            <div class="decree-info">
                @forelse($nmrlegalactonlies as $nmrlegalactonly)
                    <p class="decree-black"> <br> {!! $nmrlegalactonly->content  !!}</p>
                @empty
                @endforelse


            </div>
        </div>
    </div>
@endsection
