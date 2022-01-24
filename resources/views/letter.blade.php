@extends('main')
@section('content')
    <div class="letters">
        <div class="letter-write container">

            <div class="letter">
                <p class="letter-title text-center">Naxçıvan MR Ali Məhkəməsinə məktub yazmaq qaydaları</p>
                <div class="letter-first text-justify">
                    @forelse($letters as $letter)
                    <p class="rules"> {!! $letter->content !!}</p>
                    @empty
                    @endforelse
                        {{--                    <span>1.Naxçıvan Muxtar Respublikası Ali Məhkəməsinin rəsmi internet səhifəsi vasitəsi ilə elektron formada göndərilmiş müraciətlər Naxçıvan Muxtar Respublikası Ali Məhkəməsinin Ümumi şöbəsinə daxil olur və ”Vətəndaşların müraciətləri haqqında” Azərbaycan Respublikasının 2015-ci il 30 sentyabr tarixli, 1308-IVQ nömrəli Qanununa, habelə Azərbaycan Respublikası Prezidentinin 2016-cı il 23 iyun tarixli, 950 nömrəli Fərmanı ilə təsdiq edilmiş “Dövlət və bələdiyyə orqanlarında, dövlət və ya bələdiyyə mülkiyyətində olan və ya paylarının (səhmlərinin) nəzarət zərfi dövlətə və ya bələdiyyəyə məxsus olan hüquqi şəxslərdə və büdcə təşkilatlarında vətəndaşların müraciətləri ilə bağlı kargüzarlığın aparılması Qaydası”na uyğun olaraq qeydiyyata alınır və baxılır. </span>--}}
{{--                    <br> <span>2.Mətni yazmazdan əvvəl nəzərdə tutulmuş formanın düzgün cavablandırılması vacibdir.</span>--}}
{{--                    <br> <span>3.Mətn mütləq yazıldığı dilin əlifbası ilə tərtib olunmalıdır, bütövlükdə böyük və ya kiçik hərflərlə yazılmamalı, cümlələrə bölünməli, durğu işarələrindən istifadə qaydalarına riayət edilməlidir.</span>--}}
{{--                    <br> <span>4.Müraciət aydın və səlis cümlələrlə yazılmalıdır.</span>--}}
{{--                    <br> <span>5.Müraciət edərkən etika qaydaları gözlənilməlidir. Nəzakətsiz ifadələr işlədildikdə və ya müəllif özü barədə məlumatları dəqiq göstərmədikdə müraciətə cavab verilmir.</span>--}}
{{--                    <br><span> 6.Hörmətli internet səhifəsi istifadəçiləri! Böyük informasiya axınının işlənməsi xüsusiyyətlərini nəzərə alaraq, xahiş edirik bəzi məhdudiyyətlərə hörmətlə yanaşasınız: </span>--}}
{{--                    <ul>--}}
{{--                        <li>Bir mənbədən elektron məlumatın göndərilməsinin vaxtı serverin yüklənməsindən asılı olaraq 1-5 dəqiqə ilə məhdudlaşır.</li>--}}
{{--                        <li>Elektron müraciətin mətni 1500 işarədən çox olmamalıdır.</li>--}}
{{--                        <li>Elektron müraciətdə qoşma fayllar olmamalıdır. Mətni uzun olan məktublar, sənəd surətləri, fotoşəkillər və yol verilən digər əlavələr Naxçıvan Muxtar Respublikası Ali Məhkəməsinin E-mail: ünvanına və ya adi poçtla bu ünvana göndərilməlidir:</li>--}}
{{--                    </ul>--}}
                </div>
{{--                <p class="location">Naxçıvan şəhəri, AZ 7000, Atatürk küçəsi 19, Naxçıvan Muxtar Respublikası Ali Məhkəməsi.</p>--}}
                <button class="apply" onclick="window.location.href='{{route('mail')}}'">{!! $letter->button !!}</button>

            </div>
        </div>
    </div>



@endsection