@extends('main')
@section('content')
{{--    <div class="first position-relative">--}}
{{--        <div class="header-logo">--}}
{{--            <a href="{{route('home')}}"><img src="assets/img/header.jpg"--}}
{{--                                             title="Naxçıvan Muxtar Respublikası Ali Məhkəməsi"--}}
{{--                                             class="logo-img img-fluid" alt=""></a>--}}
{{--        </div>--}}
{{--        <div class="language">--}}
{{--            <a href="{{route('locale', 'az')}}" class="lang-link"><img src="assets/img/az.gif"--}}
{{--                                                                       class="lang-img {{\Illuminate\Support\Facades\App::getLocale()== 'az' ? 'active' : ''}}"--}}
{{--                                                                       alt=""></a>--}}
{{--            <a href="{{route('locale', 'en')}}" class="lang-link"> <img src="assets/img/en.gif"--}}
{{--                                                                        class="lang-img {{\Illuminate\Support\Facades\App::getLocale()== 'en' ? 'active' : ''}}"--}}
{{--                                                                        alt=""></a>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <nav class="navbar navbar-expand navbar-light menu">--}}
{{--        <div class="cntr">--}}
{{--            <div class class=" collapse navbar-collapse" id="navbarNavDropdown">--}}
{{--                <ul class="navbar-nav">--}}
{{--                    <li class="nav-item active">--}}
{{--                        <a class="nav-link" href="index.html"> <span class="">{{__('all.home')}}</span></a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"--}}
{{--                           aria-haspopup="true" aria-expanded="false">--}}
{{--                            {{__('all.court')}}--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                            <a class="dropdown-item" href="about.html">{{__('all.general_information')}}</a>--}}
{{--                            <a class="dropdown-item" href="">{{__('all.chairman_of_the_court')}}</a>--}}
{{--                            <a class="dropdown-item" href="about.html">{{__('all.presidium')}}</a>--}}
{{--                            <a class="dropdown-item" href="about.html">{{__('all.judges')}}</a>--}}
{{--                            <a class="dropdown-item" href="judicial_apparatus.html">{{__('all.court_apparatus')}}</a>--}}
{{--                            <a class="dropdown-item" href="court90.html">{{__('all.supreme_court-90')}}</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"--}}
{{--                           aria-haspopup="true" aria-expanded="false">{{__('all.press_service')}}</a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                            <a class="dropdown-item" href="news.html">{{__('all.news')}}</a>--}}
{{--                            <a class="dropdown-item" href="decision.html">{{__('all.reports')}}</a>--}}
{{--                            <a class="dropdown-item" href="gallery.html">{{__('all.photo_gallery')}}</a>--}}
{{--                            <a class="dropdown-item" href="videogallery.html">{{__('all.video_materials')}}</a>--}}
{{--                            <a class="dropdown-item" href="decision.html">{{__('all.articles')}}</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}

{{--                    <div class="dropdown nav-item">--}}
{{--                        <a href="#" class="nav-link nav-akt dropdown-toggle" data-toggle="dropdown"--}}
{{--                           id="navbarDropdownMenuLink" aria-haspopup="true"--}}
{{--                           aria-expanded="false">{{__('all.legal_acts')}}</a>--}}
{{--                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                            <li class="dropdown-submenu nav-item dropdown">--}}
{{--                                <a class="test dropdown-item" tabindex="-1"--}}
{{--                                   href="#">{{__('all.Legal_acts_of_the_Respublic_of_Azerbaijan')}}<span--}}
{{--                                            class="caret"></span></a>--}}
{{--                                <ul class="dropdown-menu">--}}
{{--                                    <li><a class="dropdown-item" tabindex="-1"--}}
{{--                                           href="decision.html">{{__('all.Constitution_Codes_and_Laws')}}</a></li>--}}
{{--                                    <li><a class="dropdown-item" tabindex="-1"--}}
{{--                                           href="decision.html">{{__('all.decrees_and_orders')}}</a></li>--}}
{{--                                    <li><a class="dropdown-item" tabindex="-1"--}}
{{--                                           href="decision.html">{{__('all.decisions_of_the_national_assembly')}}</a>--}}
{{--                                    </li>--}}
{{--                                    <li><a class="dropdown-item" tabindex="-1"--}}
{{--                                           href="decision.html">{{__('all.decisions_of_the_constitutional_court')}}</a>--}}
{{--                                    </li>--}}
{{--                                    <li><a class="dropdown-item" tabindex="-1"--}}
{{--                                           href="decision.html">{{__('all.Plenum_decisions_of_the_Supreme_Court')}}</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a class="dropdown-item" tabindex="-1"--}}
{{--                                   href="decision.html">{{__('all.Legal_acts_of_the_Nakhchivan_Autonomous_Republic')}}</a>--}}
{{--                            </li>--}}
{{--                            <li><a class="dropdown-item" tabindex="-1"--}}
{{--                                   href="decision.html">{{__('all.international_legal_documents')}}</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}

{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"--}}
{{--                           aria-haspopup="true" aria-expanded="false">{{__('all.Documents')}}</a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                            <a class="dropdown-item" href="decision.html">{{__('all.Decisions_of_the_presidium')}}</a>--}}
{{--                            <a class="dropdown-item" href="about.html">{{__('all.Decisions')}}</a>--}}
{{--                            <a class="dropdown-item" href="bulletins.html">{{__('all.bulletins')}}</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"--}}
{{--                           aria-haspopup="true" aria-expanded="false">{{__('all.e-services')}}</a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                            <a class="dropdown-item" href="letter.html">{{__('all.online_applications')}}</a>--}}
{{--                            <a class="dropdown-item" target="blank"--}}
{{--                               href="https://courts.gov.az/az/nakhchivansupreme">{{__('all.cases_under_consideration')}}</a>--}}
{{--                            <a class="dropdown-item" target="blank"--}}
{{--                               href="https://courts.gov.az/az/nakhchivansupreme">{{__('all.search_for_solutions')}}</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"--}}
{{--                           aria-haspopup="true" aria-expanded="false">{{__('all.for_users')}}</a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                            <a class="dropdown-item" href="contact.html">{{__('all.contact')}}</a>--}}
{{--                            <a class="dropdown-item" href="reception_days.html">{{__('all.reception_days')}}</a>--}}
{{--                            <a class="dropdown-item"--}}
{{--                               href="apellyasiya.html">{{__('all.Procedure_for_filing_an_appeal')}}</a>--}}
{{--                            <a class="dropdown-item"--}}
{{--                               href="about.html">{{__('all.Procedure_for_filing_a_cassation_appeal')}}</a>--}}
{{--                            <a class="dropdown-item" href="courts.html">{{__('all.Courts_of_Nakhchivan_AR')}}</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <form class="form-inline mr-auto form-outline d-flex">--}}
{{--                        <input class="form-control mr-sm-2" type="text" placeholder="{{__('all.search')}} "--}}
{{--                               aria-label="Search"--}}
{{--                               style="width: 70px; margin:10px 0;">--}}
{{--                        <button class="btn btn-unique btn-rounded btn-sm my-0" type="submit"><i class="fas fa-search"--}}
{{--                                                                                                style="color: #fff; font-size: small;"></i>--}}
{{--                        </button>--}}
{{--                    </form>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}

{{--    <nav class="navbar navbar-light light-blue lighten-4 hamburger-menu">--}}
{{--        <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse"--}}
{{--                data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false"--}}
{{--                aria-label="Toggle navigation"><span class="dark-blue-text"><i--}}
{{--                        class="fas fa-bars fa-1x"></i></span></button>--}}
{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent1">--}}

{{--            <ul class="navbar-nav">--}}
{{--                <li class="nav-item active">--}}
{{--                    <a class="nav-link" href="index.html"> <span class="">{{__('all.home')}}</span></a>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"--}}
{{--                       aria-haspopup="true" aria-expanded="false">--}}
{{--                        {{__('all.court')}}--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                        <a class="dropdown-item" href="about.html"> {{__('all.general_information')}}</a>--}}
{{--                        <a class="dropdown-item" href="college.html">{{__('all.chairman_of_the_court')}}</a>--}}
{{--                        <a class="dropdown-item" href="about.html">{{__('all.presidium')}}</a>--}}
{{--                        <a class="dropdown-item" href="about.html">{{__('all.judges')}}</a>--}}
{{--                        <a class="dropdown-item" href="judicial_apparatus.html">{{__('all.court_apparatus')}}</a>--}}
{{--                        <a class="dropdown-item" href="structure.html">{{__('all.supreme_court-90')}}</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"--}}
{{--                       aria-haspopup="true" aria-expanded="false">{{__('all.press_service')}}</a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                        <a class="dropdown-item" href="news.html">{{__('all.news')}}</a>--}}
{{--                        <a class="dropdown-item" href="decision.html">{{__('all.reports')}}</a>--}}
{{--                        <a class="dropdown-item" href="gallery.html">{{__('all.photo_gallery')}}</a>--}}
{{--                        <a class="dropdown-item" href="videogallery.html">{{__('all.video_materials')}}</a>--}}
{{--                        <a class="dropdown-item" href="decision.html">{{__('all.articles')}}</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <div class="dropdown nav-item">--}}
{{--                    <a href="#" class="nav-link nav-akt dropdown-toggle" data-toggle="dropdown"--}}
{{--                       id="navbarDropdownMenuLink" aria-haspopup="true"--}}
{{--                       aria-expanded="false">{{__('all.legal_acts')}}</a>--}}
{{--                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                        <li class="dropdown-submenu">--}}
{{--                            <a class="test dropdown-item" tabindex="-1"--}}
{{--                               href="#">{{__('all.Legal_acts_of_the_Respublic_of_Azerbaijan')}}<span--}}
{{--                                        class="caret"></span></a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li><a class="dropdown-item" tabindex="-1"--}}
{{--                                       href="decision.html">{{__('all.Constitution_Codes_and_Laws')}}</a></li>--}}
{{--                                <li><a class="dropdown-item" tabindex="-1"--}}
{{--                                       href="decision.html">{{__('all.decrees_and_orders')}}</a></li>--}}
{{--                                <li><a class="dropdown-item" tabindex="-1"--}}
{{--                                       href="decision.html">{{__('all.decisions_of_the_national_assembly')}}</a></li>--}}
{{--                                <li><a class="dropdown-item" tabindex="-1"--}}
{{--                                       href="decision.html">{{__('all.decisions_of_the_constitutional_court')}}</a></li>--}}
{{--                                <li><a class="dropdown-item" tabindex="-1"--}}
{{--                                       href="decision.html">{{__('all.Plenum_decisions_of_the_Supreme_Court')}}</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li><a class="dropdown-item" tabindex="-1"--}}
{{--                               href="decision.html">{{__('all.Legal_acts_of_the_Nakhchivan_Autonomous_Republic')}}</a>--}}
{{--                        </li>--}}
{{--                        <li><a class="dropdown-item" tabindex="-1"--}}
{{--                               href="decision.html">{{__('all.international_legal_documents')}}</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"--}}
{{--                       aria-haspopup="true" aria-expanded="false">{{__('all.Documents')}}</a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                        <a class="dropdown-item" href="decision.html">{{__('all.Decisions_of_the_presidium')}}</a>--}}
{{--                        <a class="dropdown-item" href="about.html">{{__('all.Decisions')}}</a>--}}
{{--                        <a class="dropdown-item" href="bulletins.html">{{__('all.bulletins')}}</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"--}}
{{--                       aria-haspopup="true" aria-expanded="false">{{__('all.e-services')}}</a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                        <a class="dropdown-item" href="letter.html">{{__('all.online_applications')}}</a>--}}
{{--                        <a class="dropdown-item" target="blank"--}}
{{--                           href="https://courts.gov.az/az/nakhchivansupreme">{{__('all.cases_under_consideration')}}</a>--}}
{{--                        <a class="dropdown-item" target="blank"--}}
{{--                           href="https://courts.gov.az/az/nakhchivansupreme">{{__('all.search_for_solutions')}}</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"--}}
{{--                       aria-haspopup="true" aria-expanded="false">{{__('all.for_users')}}</a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                        <a class="dropdown-item" href="contact.html">{{__('all.contact')}}</a>--}}
{{--                        <a class="dropdown-item" href="reception_days.html">{{__('all.reception_days')}}</a>--}}
{{--                        <a class="dropdown-item"--}}
{{--                           href="apellyasiya.html">{{__('all.Procedure_for_filing_an_appeal')}}</a>--}}
{{--                        <a class="dropdown-item"--}}
{{--                           href="about.html">{{__('all.Procedure_for_filing_a_cassation_appeal')}}</a>--}}
{{--                        <a class="dropdown-item" href="letter.html">{{__('all.Courts_of_Nakhchivan_AR')}}</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <form class="form-inline mr-auto form-outline d-flex">--}}
{{--                    <input class="form-control mr-sm-2 mt-2 mb-2" type="text" placeholder="{{__('all.search')}}"--}}
{{--                           aria-label="Search" style="width: 70px; ">--}}
{{--                    <button class="btn btn-unique btn-rounded btn-sm my-0" type="submit"><i class="fas fa-search"--}}
{{--                                                                                            style="color: #fff; font-size: small;"></i>--}}
{{--                    </button>--}}
{{--                </form>--}}

{{--            </ul>--}}
{{--        </div>--}}
{{--    </nav>--}}
    <div class="about-content container">
        <h3 class="about-title">Ümumi məlumat</h3>
        <h3 class="second-title">Naxçıvan Muxtar Respublikası Ali Məhkəməsi apellyasiya instansiyası məhkəməsi kimi öz ərazi yurisdiksiyasına aid edilmiş birinci instansiya məhkəmələri tərəfindən baxılmış işlər üzrə məhkəmə aktlarından verilmiş apellyasiya şikayətləri və apellyasiya
            protestləri üzrə işlərə baxır. Naxçıvan Muxtar Respublikası Ali Məhkəməsi mülki kollegiyadan, inzibati kollegiyadan, kommersiya kollegiyasından və cinayət kollegiyadan ibarətdir.</h3>
        <h2 class="about-title-se">NAXÇIVAN MR ALİ MƏHKƏMƏSİNİN TARİXİ</h2>
        <p class="about-text">Naxçıvan Muxtar Respublikasının Ali Məhkəməsi ölkəmizin məhkəmə orqanları sistemində özünəməxsus yer tutur. Məhkəmələr və hakimlər haqqında Azərbaycan Respublikasının 1997-ci il 10 iyun tarixli Qanununda Naxçıvan MR Ali Məhkəməsi apellyasiya instansiyası
            məhkəməsi kimi təsbit edilmişdir. Lakin digər apellyasiya məhkəmələrindən fərqli olaraq, Naxçıvan MR Ali Məhkəməsi Məhkəmələr və hakimlər haqqında Qanunun 52-ci maddəsinə əsasən həm də Naxçıvan Muxtar Respublikasında ali məhkəmə organı funksiyasını
            yerinə yetirir və bundan irəli gələn Naxçıvan Muxtar Respublikasının Konstitusiyası ilə nəzərdə tutulmuş konstitusiya nəzarəti üzrə səlahiyyətləri həyata keçirir (Naxçıvan Muxtar Respublikası Konstitusiyasının 16, 44-cü maddələri).</p>
        <p class="about-text">Naxçıvan Muxtar Respublikasının Ali Məhkəməsi bu günədək uzun tarixi yol keçmiş, bu tarix Naxçıvan Muxtar Respublikasının, bütövlükdə Azərbaycanın tarixi ilə sıx bağlı olub, ölkənin və muxtar respublikanın müxtəlif zaman kəsiyində yaşadığı dövrü
            özündə əks etdirmişdir.</p>
        <p class="about-text">
            İlk dəfə Azərbaycan Demokratik Cumhuriyyəti dövründə (1918-1920) başlanılan məhkəmə orqanları sisteminin yaradılması prosesi milli hakimiyyətin sügutu nəticəsində başa çatdırılmamış qaldı.
        </p>
        <p class="about-text">Lakin, Sovet hakimiyyətinin qurulmasından az müddət sonra Azərbaycanda yenidən məhkəmə orqanlarının təşkilinə başlanıldı.</p>
        <p class="about-text">Azərbaycan SSR Mərkəzi İcraiyyə Komitəsinin 1922-ci il 09 dekabr tarixdə keçirilən 2-ci sessiyasında «Azərbaycan SSR Məhkəmə quruluşu haqqında» ilk Əsasnamə qəbul edildi.</p>
        <p class="about-text">1922-ci il 30 dekabr tarixdə SSRİ-nin yaradılması ilə əlaqədar digər dövlət strukturlarında olduğu kimi Azərbaycan SSR məhkəmə orqanları sistemində də müəyyən dəyişikliklər həyata keçirildi. 1924-cü il 29 oktyabr tarixdə «SSRİ müttəfiq respublikalarının
            məhkəmə quruluşunun əsasları haqqında» qanun qəbul edildikdən sonra buna uyğun olaraq Azərbaycan SSR MİK özünün 1925-ci il 3 yanvar tarixli qanunu ilə Azərbaycan SSR Yuxarı Məhkəməsini Azərbaycan SSR Ali Məhkəməsinə çevirdi və buna müvafiq
            olaraq Naxçıvan MSSR-də fəaliyyət göstərən bölmə də artıq 3 oktyabr 1925-ci il tarixdən Ali Məhkəmənin Naxçıvan MSSR-də bölməsi adlandırıldı.</p>
        <p class="about-text">Ali Məhkəmənin Naxçıvan MSSR-də fəaliyyət göstərən bölməsi həm onun səlahiyyətlərinə aid edilmiş cinayət və mülki işlər üzrə birinci instansiya məhkəməsi olaraq, həm də əhatə etdiyi ərazidə təşkil olunmuş xalq məhkəmələri üçün yuxarı məhkəmə orqanı
            kimi təxminən 1934-cü ilin ortalarınadək fəaliyyət göstərdi.</p>
        <p class="about-text">
            Azərbaycan SSR MİK-nin və XKS-nin 23 avqust 1934-cü il tarixli qərarı ilə 6 iyul 1927-ci il tarixdən etibarən respublikada məhkəmə quruluşu məsələlərini tənzimləyən Əsasnaməyə bir sıra dəyişikliklər edildli. Həmin dəyişikliklərdən biri də Azərbaycan SSR
            Ali Məhkəməsinin Naxçıvan MSSR-də fəaliyyət göstərən bölməsinin ləğv edilməsi və onun əvəzinə Naxçıvan MSSR Baş Məhkəməsinin yaradılması idi.
        </p>
        <p class="about-text">
            Qeyd olunan tarixdən yaradılan, 1937-ci ildə Azərbaycan SSR-in yeni Konstitusiyasının qəbul edilməsindən sonra Naxçıvan MSSR Ali Məhkəməsi adını daşıyan məhkəmə müxtəlif vaxtlarda müvafiq qanunvericiliyin dəyişilməsinə baxmayaraq, bütün sovet dövrü ərzində
            demək olar ki, ciddi dəyişikliyə uğramadı və ona aid edilmiş işlərə birinci və yuxarı instansiya məhkəməsi qismində baxmaq, həmçinin onun fəaliyyəti dairəsində olan məhkəmələr üzərində məhkəmə nəzarətini həyata keçirmək funksiyalarıni saxladı.
        </p>
        <p class="about-text">
            SSRİ-nin sügutundan az müddət əvvəl 1990-cı il 26 iyun tarixdə qəbul edilən «Azərbaycan SSR-də məhkəmə quruluşu haqqında» yeni qanun bu sahədə bəzi dəyişkliklərin həyata keçirilməsini nəzərdə tuturdu.
        </p>
        <p class="about-text">
            Lakin həmin dövrdə SSRİ-də, o cümlədən Azərbaycanda cərayan edən hadisələr, ən başlıcası 18 oktyabr 1991-ci ildə Azərbaycanın dövlət müstəqilliyini əldə etməsi məhkəmə quruluşunun, ədalət mühakiməsi qaydalarının daha geniş və köklü şəkildə dəyişdirilməsini
            tələb edirdi.
        </p>
        <p class="about-text">
            Buna baxmayaraq, digər sahələrdə olduğu kimi, məhkəmə orqanları sistemində də həmin illərdə aparılan dəyişikliklər yetərli deyildi.
        </p>
        <p class="about-text">
            Ancaq 1993-cü ildə xalqın ümummilli lideri möhtərəm Heydər Əliyevin hakimiyyətə qayıdışı ilə bu islahatların aparlması üçün real şərait yarandı və Prezident H.Əliyevin bilavasitə rəhbərliyi ilə Azərbaycan Respublikasının müstəqil, hüquqi dövlət kimi təşəkkül
            tapmasını təmin edə biləcək məhkəmə islahatlarına başlanıldı.s
        </p>
        <p class="about-text">
            Bu islahatların bünövrəsində möhtərəm Heydər Əliyevin rəhbərliyi ilə hazırlanmış 12 noyabr 1995-ci ildə ümumxalq səsverməsi yolu ilə qəbul edilmiş müstəqil Azərbycan Respublikasının Konstitusiyası və onun əsasında 10 iyun 1997-ci ildə qəbul edilən «Məhkəmələr
            və hakimlər haqqında» Azərbaycan Respublikasının Qanunu dayanır.
        </p>
        <p class="about-text">«Məhkəmələr və Hakimlər haqqında» 10 iyun 1997-ci il tarixli Qanun Azərbaycan Respublikasında üçpilləli məhkəmə sistemini bərqərar etdi və müvafiq Məcəllələr, o cümlədən Azərbaycan Respublikasının Mülki-Prosessual, Cinayət-Prosessual Məcəllələri
            qəbul edildikdən sonra 2000-ci ilin sentyabr ayından bu sistem real olaraq fəaliyyət göstərməyə başladı.</p>
        <p class="about-text">
            Qanuna görə bu üçpilləli sistem daxilində Naxçıvan MR Ali Məhkəməsinin yeri həm birinci instansiya, həm də ikinci-apellyasiya instansiyası məhkəməsi kimi müəyyən edildi.
        </p>
        <p class="about-text">
            Bu təyinata uyğun olaraq Ali Məhkəmənin tərkibində qanunla onun səlahiyyətlərinə aid edilmiş ağır cinayət işlərinə baxan ağır cinayətlərə dair işlər üzrə birinci instansiya kollegiyası, muxtar respublikanın ərazisində fəaliyyət göstərən rayon (şəhər)
            məhkəmələrinin cinayət işləri və inzibati xətalara dair materiallar eləcə də mülki işlər üzrə qanuni qüvvəyə minməmiş qərarlarından verilən apellyasiya şikayətlərinə və protestlərinə apellyasiya məhkəməsi qismində baxan cinayət işləri və inzibati
            xətalara dair işlər üzrə, eləcə də mülki işlər üzrə apellyasiya kollegiyaları yaradıldı.
        </p>
        <p class="about-text">
            Azərbaycan Respublikası Prezidentinin 17 iyun 1999-cu il tarixli Fərmanına əsasən Naxçıvan MR Ali Məhkəməsinin hakimlərinin sayı 14 nəfər müəyyən olundu və 2000-ci ilin sentyabrından 2003-cü ilin yanvarınadək məhkəmə hakim heyəti ilə tam komplektləşdirildi.
        </p>
        <p class="about-text">
            2000-ci ilin sentyabrından ötən dövr ərzində bu formada təşkil olunmuş Naxçıvan MR Ali Məhkəməsinin, ümumiyyətlə Azərbaycanın bütün məhkəmə orqanlarının fəaliyyəti üçpilləli məhkəmə sisteminin sovet dövründə və 2000-ci ilin sentyabr ayınadək Azərbaycan
            Respublikasında mövcud olan ikipilləli məhkəmə sistemi ilə müqayisədə daha mütərəqqi məhkəmə quruluşu forması olduğunu sübut etdi.
        </p>
        <p class="about-text">
            Lakin, bir tərəfdən Azərbaycan Respublikasında gedən inkişaf prosesləri və Azərbaycan Respublikasının Avropa ailəsinə, nüfuzlu beynəlxalq təşkilatlara daha sıx inteqrasiyası, digər tərəfdən Azərbaycan Respublikasının Apellyasiya və İqtisad məhkəmələrinin
            bölgələrdən uzaqda - Bakı şəhərində təşkil olunmasından törəyən çətinliklər məhkəmə quruluşunda dəyişikliklərin edilməsini bir zərurət kimi meydana gətirdi.
        </p>
        <p class="about-text">
            Həmin məhkəmələrin bölgələrdən çox uzaqda yerləşməsi ilə bağlı yaranan problemlər Naxçıvan Muxtar Respublikasına münasibətdə özünü daha qabarıq şəkildə biruzə verirdi.
        </p>
        <p class="about-text">
            Çünki, birinci instansiya məhkəmələri kimi fəaliyyət göstərən Naxçıvan MR Ali Məhkəməsinin ağır cinayətlərə dair işlər üzrə kollegiyasının, Naxçıvan Muxtar Respublikasının Hərbi Məhkəməsinin və Naxçıvan MR İqtisad Məhkəməsinin qərarlarından verilən protest
            və şikayətlərə müvafiq olaraq Azərbaycan Respublikasının Apellyasiya Məhkəməsində və Azərbaycan Respublikasının İqtisad Məhkəməsində baxılırdı. Naxçıvan Muxtar Respublikasına qarşı Ermənistan tərəfindən tətbiq olunan blokada isə muxtar respublikada
            yaşayan vətəndaşlarımızın həmin məhkəmələrdə baxılan işlərlə əlaqədar Bakı şəhərinə gedib-gəlmələri üçün çox ciddi əngəllər törədirdi.
        </p>
        <p class="about-text">
            Azərbaycan Respublikasının 30 dekabr 2005-ci il tarixli Qanunu ilə Məhkəmələr və hakimlər haqqında Qanuna, Azərbaycan Respublikasının bəzi qanunvericilik aktlarına dəyişikliklər və əlavələr edilməsi barədə Azərbaycan Respublikasının 2007-ci il 16 iyun
            tarixli Qanunu ilə müvafiq prosesual qanunvericiliyə əlavə və dəyişikliklərin edilməsi və Azərbaycan Respublikası Prezidenti tərəfindən məhkəmə hakimiyyətinin müasirləşdirilməsi məsələlərinə həsr olunmuş 19 yanvar 2006-cı il tarixli Fərmanın
            verilməsi nəticəsində məhkəmə islahatları növbəti mərhələyə yüksəldi və bu mərhələdə Naxçıvan Muxtar Respublikasının Ali Məhkəməsi də çox ciddi, mütərəqqi dəyişikliklərə uğradı.
        </p>
        <p class="about-text">
            Prosessual hüquq normalarının dəyişilməsini nəzərdə tutan 2007-ci il 16 iyun tarixli Qanunun 16 iyul 2009-cu ildə qüvvəyə minməsilə Naxçıvan Muxtar Respublikasında ayrıca Ağır Cinayətlərə Dair İşlər üzrə Məhkəmə yaradıldı və bununla əlaqədar Naxçıvan
            Muxtar Respublikasının Ali Məhkəməsinin tərkibində olan Ağır Cinayətlərə Dair İşlər üzrə I instansiya kollegiyası ləğv olundu. Eyni zamanda Ali Məhkəmədə əvvəldən mövcud olan Mülki işlər üzrə kollegiyadan və Cinayət işləri və inzibati xətalara
            dair işlər üzrə kollegiyadan savayı daha iki struktur - İqtisadi mübahisələrə dair işlər üzrə kollegiya və Hərbi məhkəmələrin işləri üzrə kollegiya yaradıldı.
        </p>
        <p class="about-text">
            Yeni kollegiyaların yaradılmasından sonra 2009-cu ilin ilul ayından etibarən artıq Naxçıvan Muxtar Respublikasının Hərbi Məhkəməsinin baxdığı işlər (o cümlədən ağır cinayətlərlə bağlı işlər) üzrə çəxarılmış qərarlardan verilən şikayət və protestlərə həmçinin
            Naxçıvan MR İqtisad Məhkəməsinin qərarlarından verilən şikayətlərə müvafiq olaraq Hərbi məhkəmələrin işləri üzrə kollegiyada və İqtisadi mübahisələrə dair işlər üzrə kollegiyada baxılır. Ağır Cinayətlərə dair İşlər Üzrə Naxçıvan Muxtar Respublikası
            Məhkəməsinin çıxardığı qərarlardan verilən şikayət və protestlərə isə Naxçıvan Muxtar Respublikası Ali Məhkəməsinin cinayət işləri və inzibati xətalara dair işlər üzrə kollegiyasında baxılır.
        </p>
        <p class="about-text">
            Bu yeniliklər Ali Məhkəmə tərəfindən işlərə birinci instansiya gaydasında baxılmasını istisna edir və Ali Məhkəmənin sırf apellyasiya instansiyası məhkəməsi kimi fəaliyyət göstərməsini nəzərdə tutur.
        </p>
        <p class="about-text">
            Bununla yanaşı qanunvericiliyə gətirilən yeniliklər Naxçıvan Muxtar Respublikası Ali Məhkəməsinin Naxçıvan MR Konstitusiyası ilə təsbit edilən muxtar respublikada konstitusiya nəzarətinin həyata keçirilməsi ilə bağlı funksiyalarına toxunmamışdır.
        </p>
        <p class="about-text">
            Məhkəm hüquq islahatlarının davamı kimi Məhkəmələr və hakimlər haqqında və Məhkəmə-Hüquq Şurası haqqında Azərbaycan Respublikasının qanunlarına dəyişikliklər və əlavələr edilməsi barədə Azərbaycan Respublikasının 22 iyun 2010-cu il tarixli qanununa əsasən
            Naxçıvan Muxtar Respublikası Ali Məhkəməsinin kollegiyalarının adları dəyişdirilərək mülki kollegiya, inzibati-iqtisadi kollegiya, cinayət kollegiyası və hərbi kollegiya adlandırılmışdır. “Məhkəmələr və hakimlər haqqında” Azərbaycan Respublikasının
            Qanununda dəyişiklik edilməsi barədə 9 iyul 2019-cu il tarixli Qanunla Naxçıvan Muxtar Respublikası Ali Məhkəməsi mülki kollegiyadan, kommersiya kollegiyasından, inzibati kollegiyadan və cinayət kollegiyasından ibarət tərkibdə fəaliyyət göstərir.
        </p>
        <p class="about-text">
            Muxtar Respublikanın Ali Məhkəməsində «Məhkəmələr və hakimlər haqqında» Qanununun 54-cü maddəsinə əsasən Rəyasət Heyəti fəaliyyət göstərir.
        </p>
        <p class="about-text">
            Rəyasət Heyətinin tərkibinə Ali Məhkəmənin sədri, onun müavini və kollegiya sədrləri daxildir.
        </p>
        <p class="about-text">
            Qanuna görə Rəyasət Heyəti ədalət mühakiməsi funksiyasını yerinə yetirmir və qanunla onun səlahiyyətlərinə aid edilmiş məhkəmənin fəaliyyətinin təmin edilməsi ilə bağlı digər məsələləri həll edir, o cümlədən hakimləri kollegiyalar üzrə bölüşdürür, məhkəmə
            təcrübəsinin ümumiləşdirilməsi və məhkəmə statistikasının təhlili barədə materiallara baxır, qanunvericilik aktlarının düzgün tətbiq edilməsi barədə muxtar respublikanın rayon (şəhər) məhkəmələrinə metodiki kömək göstərir, Naxçıvan Muxtar
            Respublikasının Ali Məhkəməsi yanında Elmi-Məsləhət Şurasının əsasnaməsini və tərkibini təsdiq edir və bir sıra başqa məsələləri həll edir.
        </p>
        <p class="about-text">
            Elmi-Məsləhət Şurasının Əsasnaməsi və tərkibi Ali Məhkəmənin Rəyasət Heyətinin qərarı ilə təsdiq edilmiş və 2004-cü ildən Şura fəaliyyətə başlamışdır.
        </p>
        <p class="about-text">
            Naxçıvan Muxtar Respublikasının digər məhkəmələri kimi, Ali Məhkəmənin də fəaliyyətinin müasir tələblər səviyyəsində təşkil olunmasında Naxçıvan Muxtar Respublikasında hüquq institutlarının inkişafı haqqında Azərbaycan Respublikası Prezidentinin 2 noyabr
            2006-cı il tarixli Fərmanının böyük rolu olmuşdur.
        </p>
        <p class="about-text">
            Muxtar respublikada qısa müddət ərzində bu Fərmanın realizə edilməsi təmin olunmuş və artıq 2007-ci ilin noyabr ayının 29-da Naxçıvan Muxtar Respublikası Ali Məclisi Sədrinin iştirakı ilə Ali Məhkəmənin yeni inzibati binası istifadəyə verilmişdir.
        </p>
        <p class="about-text">
            Naxçıvan şəhərinin mərkəzində yerləşən bu görkəmli binada hakimlərin, məhkəmə aparatı işçilərinin keyfiyyətli və səmərəli fəaliyyət göstərməsi üçün zəruri şərait yüksək səviyyədə təmin edilmişdir.
        </p>
        <p class="about-text">Bir tərəfdən qanunvericiliyə gətirilən yeniliklər, digər tərəfdən isə məhkəmələrin maddi təminat məsələlərinə göstərilən diqqət, o cümlədən hakimlərin, məhkəmə personalının iş şəraitinin müasir meyarlar səviyyəsinə çatdırılması Naxçıvan Muxtar
            Respublikası Ali Məhkəməsi tərəfindən ədalət mühakiməsinin həyata keçirilməsi üzrə vəzifələrinin keyfiyyətlə yerinə yetirilməsinə, insan hüquq və azadlıglarının səmərəli şəkildə müdafiə olunmasına xidmət edir.</p>

    </div>
    <footer>
        <div class="footer ">
            <a href="" class=footer-logo>
                <img src="{{asset('storage/'.setting('site.favicon'))}}" class="logo-img" alt="">
                <p class="logo-text">{{__('all.Supreme_Court_of_the_Nakhchivan_Autonomous_Republic')}}</p>
            </a>
            <div class=" footer-menu  container">
                <div class=" main-menu">
                    <a href="" class="menu-link bold">{{__('all.home')}}</a>
                </div>
                <div class=" main-menu">
                    <a href="" class="menu-link bold">{{__('all.court')}}</a>
                    <p class="menu-text"><a href="about.html">{{__('all.general_information')}}</a></p>
                    <p class="menu-text"><a href="college.html">{{__('all.chairman_of_the_court')}}</a></p>
                    <p class="menu-text"><a href="about.html">{{__('all.presidium')}}</a></p>
                    <p class="menu-text"><a href="about.html">{{__('all.judges')}}</a></p>
                    <p class="menu-text"><a href="judicial_apparatus.html">{{__('all.court_apparatus')}}</a></p>
                    <p class="menu-text"><a href="">{{__('all.supreme_court-90')}}</a></p>
                </div>
                <div class=" main-menu">
                    <a href="" class="menu-link bold">{{__('all.press_service')}}</a>
                    <p class="menu-text"><a href="news.html">{{__('all.news')}}</a></p>
                    <p class="menu-text"><a href="decision.html">{{__('all.reports')}}</a></p>
                    <p class="menu-text"><a href="gallery.html">{{__('all.photo_gallery')}}</a></p>
                    <p class="menu-text"><a href="videogallery.html">{{__('all.video_materials')}}</a></p>
                    <p class="menu-text"><a href="decision.html">{{__('all.articles')}}</a></p>
                </div>
                <div class="main-menu">
                    <a href="" class="menu-link bold">{{__('all.legal_acts')}}</a>
                    <p class="menu-text"><a href="">{{__('all.Legal_acts_of_the_Respublic_of_Azerbaijan')}}</a></p>
                    <p class="menu-text"><a
                                href="decision.html">{{__('all.Legal_acts_of_the_Nakhchivan_Autonomous_Republic')}}</a>
                    </p>
                    <p class="menu-text"><a href="decision.html">{{__('all.international_legal_documents')}}</a></p>
                </div>
                <div class="main-menu">
                    <a href="" class="menu-link bold">{{__('all.Documents')}}</a>
                    <p class="menu-text"><a href="decision.html">{{__('all.international_legal_documents')}}</a></p>
                    <p class="menu-text"><a href="about.html">{{__('all.international_legal_documents')}}</a></p>
                    <p class="menu-text"><a href="bulletins.html">{{__('all.bulletins')}}</a></p>
                </div>
                <div class="main-menu">
                    <a href="" class="menu-link bold">{{__('all.e-services')}}</a>
                    <p class="menu-text"><a href="letter.html">{{__('all.online_applications')}}</a></p>
                    <p class="menu-text"><a href="https://courts.gov.az/az/nakhchivansupreme"
                                            target="blank">{{__('all.cases_under_consideration')}}</a></p>
                    <p class="menu-text"><a target="blank"
                                            href="https://courts.gov.az/az/nakhchivansupreme">{{__('all.search_for_solutions')}}</a>
                    </p>
                </div>
                <div class="main-menu">
                    <a href="" class="menu-link bold">{{__('all.for_users')}}</a>
                    <p class="menu-text"><a href="">{{__('all.contact')}}</a></p>
                    <p class="menu-text"><a href="">{{__('all.reception_days')}}</a></p>
                    <p class="menu-text"><a href="apellyasiya.html">{{__('all.Procedure_for_filing_an_appeal')}}</a></p>
                    <p class="menu-text"><a href="about.html">{{__('all.Procedure_for_filing_a_cassation_appeal')}}</a>
                    </p>
                    <p class="menu-text"><a href="courts.html">{{__('all.Courts_of_Nakhchivan_AR')}}</a></p>

                </div>
            </div>

        </div>
        <div class="copyright">
            <p class="copy-text"><a href="http://rabite.nmr.az/" target="blank" class="copy-link">
                    © {{ date('Y') }}{{__('all.Design')}}</a></p>
        </div>
    </footer>
@endsection