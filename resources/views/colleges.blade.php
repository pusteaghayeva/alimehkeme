@extends('main')
@section('content')
    <div class="college container">
        @forelse($colleges as $college)
        <h3 class="college-title">{{$college->title}}</h3>
        <div class="person-info">
            <img src="{{asset('assets/img/'.$college->image)}}" alt="">
            <div class="about-info">
                <h3 class="name">{{$college->name}}</h3>
                <p class="college-info position">
                    {{$college->position}}
                </p>
                <p class="college-info date">{{$college->year}}</p>
                <p class="college-info education">
                    {{$college->education}}
                </p>
            </div>
        </div>
        <h2 class="experience">{!! $college->content !!}</h2>

        @empty
        @endforelse
    </div>

@endsection