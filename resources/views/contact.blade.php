@extends('main')
@section('content')


<div class="first-down-menu container">
    <h2 class="first-dm-title">Əlaqə</h2>
    <table class="table badge-light">
        @forelse($contacts as $contact)
        <thead>
        <tr>
            {!! $contact->content !!}
{{--            <th scope="col" class="table-title th-font common bg-gradient"></th>--}}
{{--            <th scope="col" class="table-title">Əlaqə üçün məsul şəxslər</th>--}}
{{--            <th scope="col" class="table-title common">Əlaqə üçün telefon nömrələri</th>--}}
        </tr>
        @empty
            @endforelse
{{--        </thead>--}}
{{--        <tbody>--}}

{{--        <tr>--}}
{{--            <td>Naxçıvan MR Ali Məhkəməsinin Aparatı</td>--}}
{{--            <td>Aparat rəhbəri</td>--}}
{{--            <td>545-01-55</td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>Ümumi şöbə</td>--}}
{{--            <td>Şöbə müdiri</td>--}}
{{--            <td>544-03-07</td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>Vətəndaşların qəbulu və məktublara baxılması şöbəsi</td>--}}
{{--            <td>Şöbə müdiri</td>--}}
{{--            <td>544-55-70</td>--}}
{{--        </tr>--}}

{{--        <tr>--}}
{{--            <td>Məhkəmə təcrübəsinin ümumiləşdirilməsi və məhkəmənin statistikasının təhlili şöbəsi</td>--}}
{{--            <td>Şöbə müdiri</td>--}}
{{--            <td>544-61-81</td>--}}
{{--        </tr>--}}

{{--        <tr>--}}
{{--            <td>Vətəndaşların qəbulu və məktublara baxılması şöbəsi</td>--}}
{{--            <td>Şöbə müdiri</td>--}}
{{--            <td>544-55-70</td>--}}
{{--        </tr>--}}

{{--        <tr>--}}
{{--            <td>Analitik və qanunvericiliyin sistemləşdirilməsi şöbəsi</td>--}}
{{--            <td>Şöbə müdiri</td>--}}
{{--            <td>544-61-78</td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>İcra məmurları şöbəsi</td>--}}
{{--            <td>Şöbə müdiri</td>--}}
{{--            <td>544-61-75</td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>Mətbuat xidməti</td>--}}
{{--            <td>baş məsləhətçi</td>--}}
{{--            <td>544-61-71</td>--}}
{{--        </tr>--}}
{{--        </tbody>--}}
    </table>
</div>

@endsection