@extends('main')
@section('content')

<div class="first-down-menu container">
    <h2 class="first-dm-title text-center">{{$category[0]->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</h2>

    <ul>
        @forelse($decisions as $decision)
        <li><a class="cool-link" href="{{route('report', ['report'=>$decision->id])}}"> {{$decision->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</a></li>
        @empty
        @endforelse
    </ul>
</div>

<div class="text-center"> {{$decisions->appends(request()->input())->links()}}</div>
@endsection