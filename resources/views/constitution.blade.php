@extends('main')
@section('content')
    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center">{{$category[0]->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</h2>
        <ul>
            @forelse($constitutions as $constitution)
                @if($constitution->cat_id==30)
                    @php $constitution->pdf = json_decode($constitution->pdf) @endphp
                    @empty($constitution->pdf)
                        @continue
                    @else
                    <li>
                        <a class="cool-link" href="{{asset('/storage/'.$constitution->pdf[0]->download_link)}}" class="decree-black"> <br>
                            {!! $constitution->title !!}
                        </a>
                    </li>
                    @endempty
                @else
                    <li><a class="cool-link"
                           href="{{route('constitutiononly', ['constitutiononly'=>$constitution->id])}}">{{$constitution->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</a>
                    </li>
                @endif
            @empty
            @endforelse
        </ul>
    </div>

    <div class="text-center"> {{$constitutions->appends(request()->input())->links()}}</div>

@endsection