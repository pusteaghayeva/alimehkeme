@extends('main')
@section('content')
        <div class="first-down-menu container">
            <table class="table badge-light">
                @forelse($mehkemeaparatis as $mehkemeaparati)
                    <h2 class="first-dm-title mb-0 mt-3 text-center"> {!!$mehkemeaparati->getTranslatedAttribute('title', $locale, 'fallbackLocale') !!}</h2>
                    <thead>
                    <tr>
                        {!!$mehkemeaparati->getTranslatedAttribute('content', $locale, 'fallbackLocale') !!}
                    </tr>
                @empty
                @endforelse
            </table>
        </div>
@endsection