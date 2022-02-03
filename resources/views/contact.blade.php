@extends('main')
@section('content')


<div class="first-down-menu container">
    <h2 class="first-dm-title">Əlaqə</h2>
    <table class="table badge-light">
        @forelse($contacts as $contact)
        <thead>
        <tr>
{{--            {!! $contact->content !!}--}}
            {{$contact->getTranslatedAttribute('content', $locale, 'fallbackLocale')}}
        </tr>
        @empty
            @endforelse
    </table>
</div>

@endsection