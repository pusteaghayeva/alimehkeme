@extends('main')
@section('content')

    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center">Fərman və Sərəncamlar</h2>
        <ul>
            @forelse($decresorders as $decresorder)
                <li><a class="cool-link" href="{{route('decresorderonly', ['decresorderonly'=>$decresorder->id])}}">{{$decresorder->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</a></li>
            @empty
            @endforelse
        </ul>
    </div>

    <div class="text-center"> {{$decresorders->appends(request()->input())->links()}}</div>

@endsection