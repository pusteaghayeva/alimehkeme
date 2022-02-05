@extends('main')
@section('content')
<div class="first-down-menu container">
    @forelse($contacts as $contact)
    <h2 class="first-dm-title">{{$contact->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</h2>
    <table class="table badge-light">
        <thead>
        <tr>
            {!! $contact->getTranslatedAttribute('content', $locale, 'fallbackLocale') !!}
        </tr>
        @empty
            @endforelse
    </table>
</div>
@endsection