@extends('main')
@section('content')

    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center">Naxçıvan Muxtar Respublikasının hüquqi aktları</h2>
        <ul>
            @forelse($nmrlegalacts as $nmrlegalact)
                <li><a class="cool-link" href="{{route('nmrlegalactonly', ['nmrlegalactonly'=>$nmrlegalact->id])}}">{{$nmrlegalact->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</a></li>
            @empty
            @endforelse
        </ul>

    </div>

@endsection