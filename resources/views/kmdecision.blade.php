@extends('main')
@section('content')

    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center">Konstitusiya Məhkəməsinin qərarları</h2>
        <ul>
            @forelse($kmdecisions as $kmdecision)
                <li><a class="cool-link" href="{{route('kmdecisiononly', ['kmdecisiononly'=>$kmdecision->id])}}">{{$kmdecision->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</a></li>
            @empty
            @endforelse
        </ul>
    </div>

    <div class="text-center"> {{$kmdecisions->appends(request()->input())->links()}}</div>

@endsection