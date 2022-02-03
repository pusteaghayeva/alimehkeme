@extends('main')
@section('content')
    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center">Konstitusiya, Məcəllələr və Qanunlar</h2>
        <ul>
            @forelse($constitutions as $constitution)
                @if($constitution->cat_id==30)
                    <li>
                        <a class="cool-link" href="{{asset('/storage/'.json_decode($constitution->pdf)[0]->download_link)}}" class="decree-black"> <br>
                            {!! $constitution->title !!}
                        </a>
                    </li>
                @else
                    <li><a class="cool-link"
                           href="{{route('constitutiononly', ['constitutiononly'=>$constitution->id])}}">{!! $constitution->title !!}</a>
                    </li>
                @endif
            @empty
            @endforelse


        </ul>


    </div>

@endsection