@extends('main')
@section('content')

{{--    <div class="first-down-menu container">--}}
{{--        <h2 class="first-dm-title">Məhkəmə aparatı</h2>--}}
{{--        <table class="table table-hover">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                @forelse($mehkemeaparatis as $mehkemeaparati)--}}
{{--                               {!! $mehkemeaparati->content !!}--}}
{{--                @empty--}}
{{--                    @endforelse--}}

{{--            </tr>--}}
{{--            </thead>--}}
{{--        </table>--}}

        <div class="first-down-menu container">
            <h2 class="first-dm-title mb-0 mt-3 text-center">Məhkəmə aparatı</h2>
            <table class="table badge-light">
                @forelse($mehkemeaparatis as $mehkemeaparati)
                    <thead>
                    <tr>
                        {!! $mehkemeaparati->content !!}
                    </tr>
                @empty
                @endforelse
            </table>
        </div>

{{--    </div>--}}

@endsection