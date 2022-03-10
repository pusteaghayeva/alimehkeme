<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>{{setting('site.title')}}</title>
    {{--    <link rel="shortcut icon" href="favicon adresi" type="image/x-icon" />--}}
    <link rel="icon" href="{{asset('storage/'.setting('site.favicon'))}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous"/>--}}
    <link rel="stylesheet" href="assets/css/bootstrap.css">
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">--}}
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">--}}
{{--    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">--}}
{{--    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">--}}
    <script src="assets/js/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
</head>

<body>
<a href="#" class="back-to-top">^</a>
<div class="first position-relative">
    <div class="header-logo">
        <a href="{{route('home')}}"><img src="assets/img/mehkeme-header.png" title="Naxçıvan Muxtar Respublikası Ali Məhkəməsi" class="logo-img img-fluid" alt=""></a>
    </div>
    <div class="language">
        <a href="{{route('locale', 'az')}}" class="lang-link"><img src="assets/img/az.gif" class="lang-img {{\Illuminate\Support\Facades\App::getLocale()== 'az' ? 'active' : ''}}" alt=""></a>
        <a href="{{route('locale', 'en')}}" class="lang-link"> <img src="assets/img/en.gif" class="lang-img {{\Illuminate\Support\Facades\App::getLocale()== 'en' ? 'active' : ''}}" alt=""></a>
    </div>
</div>


<nav class="navbar navbar-expand navbar-light menu">
    <div class="cntr">
        <div class class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}"> <span class="">{{__('all.home')}}</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        {{__('all.court')}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('about')}}">{{__('all.general_information')}}</a>
                        <a class="dropdown-item" href="{{route('colleges')}}">{{__('all.chairman_of_the_court')}}</a>
                        <a class="dropdown-item" href="{{route('reyaset')}}">{{__('all.presidium')}}</a>
                        <a class="dropdown-item" href="{{route('judge')}}">{{__('all.judges')}}</a>
                        <a class="dropdown-item" href="{{route('mehkemeaparati')}}">{{__('all.court_apparatus')}}</a>
                        <a class="dropdown-item" href="{{route('court')}}">{{__('all.supreme_court-90')}}</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">{{__('all.press_service')}}</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('news')}}">{{__('all.news')}}</a>
                        <a class="dropdown-item" href="{{route('decision')}}">{{__('all.reports')}}</a>
                        <a class="dropdown-item" href="{{route('fotoqalereya')}}">{{__('all.photo_gallery')}}</a>
                        <a class="dropdown-item" href="{{route('video')}}">{{__('all.video_materials')}}</a>
                        <a class="dropdown-item" href="{{route('article')}}">{{__('all.articles')}}</a>
                    </div>
                </li>

                <div class="dropdown nav-item">
                    <a href="#" class="nav-link nav-akt dropdown-toggle" data-toggle="dropdown"
                       id="navbarDropdownMenuLink" aria-haspopup="true"
                       aria-expanded="false">{{__('all.legal_acts')}}</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li class="dropdown-submenu nav-item dropdown">
                            <a class="test dropdown-item" tabindex="-1"
                               href="#">{{__('all.Legal_acts_of_the_Respublic_of_Azerbaijan')}}<span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" tabindex="-1"
                                       href="{{route('constitution')}}">{{__('all.Constitution_Codes_and_Laws')}}</a></li>
                                <li><a class="dropdown-item" tabindex="-1"
                                       href="{{route('decresorder')}}">{{__('all.decrees_and_orders')}}</a></li>
                                <li><a class="dropdown-item" tabindex="-1"
                                       href="{{route('mmdecision')}}">{{__('all.decisions_of_the_national_assembly')}}</a>
                                </li>
                                <li><a class="dropdown-item" tabindex="-1"
                                       href="{{route('kmdecision')}}">{{__('all.decisions_of_the_constitutional_court')}}</a>
                                </li>
                                <li><a class="dropdown-item" tabindex="-1"
                                       href="{{route('ampdecision')}}">{{__('all.Plenum_decisions_of_the_Supreme_Court')}}</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" tabindex="-1"
                               href="{{route('nmrlegalact')}}">{{__('all.Legal_acts_of_the_Nakhchivan_Autonomous_Republic')}}</a>
                        </li>
                        <li><a class="dropdown-item" tabindex="-1"
                               href="{{route('internationaldocument')}}">{{__('all.international_legal_documents')}}</a></li>
                    </ul>
                </div>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">{{__('all.Documents')}}</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('supremedecision')}}">{{__('all.Decisions_of_the_presidium')}}</a>
                        <a class="dropdown-item" href="{{route('onlydecision')}}">{{__('all.Decisions')}}</a>
                        <a class="dropdown-item" href="{{route('bulletin')}}">{{__('all.bulletins')}}</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">{{__('all.e-services')}}</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('letter')}}">{{__('all.online_applications')}}</a>
                        <a class="dropdown-item" target="blank" href="https://courts.gov.az/az/nakhchivansupreme">{{__('all.cases_under_consideration')}}</a>
                        <a class="dropdown-item" target="blank" href="https://courts.gov.az/az/nakhchivansupreme">{{__('all.search_for_solutions')}}</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">{{__('all.for_users')}}</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('contact')}}">{{__('all.contact')}}</a>
                        <a class="dropdown-item" href="{{route('receptionday')}}">{{__('all.reception_days')}}</a>
                        <a class="dropdown-item" href="{{route('appelyasiya')}}">{{__('all.Procedure_for_filing_an_appeal')}}</a>
                        <a class="dropdown-item" href="{{route('cassasion')}}">{{__('all.Procedure_for_filing_a_cassation_appeal')}}</a>
                        <a class="dropdown-item" href="{{route('nmrcourt')}}">{{__('all.Courts_of_Nakhchivan_AR')}}</a>
                    </div>
                </li>
                <form action="{{route('news')}}" class="form-inline mr-auto form-outline d-flex" method="GET">
                    <input class="form-control mr-sm-2" name="search" type="text" placeholder="{{__('all.search')}} "
                           aria-label="Search"
                           style="width: 70px; margin:10px 0;">
                    <button class="btn btn-unique btn-rounded btn-sm my-0" type="submit"><i class="fas fa-search"
                                                                                            style="color: #fff; font-size: small;"></i>
                    </button>
                </form>
            </ul>
        </div>
    </div>
</nav>

<nav class="navbar navbar-light light-blue lighten-4 hamburger-menu">
    <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false"
            aria-label="Toggle navigation"><span class="dark-blue-text"><i
                    class="fas fa-bars fa-1x"></i></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent1">

        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}"> <span class="">{{__('all.home')}}</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    {{__('all.court')}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('about')}}">{{__('all.general_information')}}</a>
                    <a class="dropdown-item" href="{{route('colleges')}}">{{__('all.chairman_of_the_court')}}</a>
                    <a class="dropdown-item" href="{{route('reyaset')}}">{{__('all.presidium')}}</a>
                    <a class="dropdown-item" href="{{route('judge')}}">{{__('all.judges')}}</a>
                    <a class="dropdown-item" href="{{route('mehkemeaparati')}}">{{__('all.court_apparatus')}}</a>
                    <a class="dropdown-item" href="{{route('court')}}">{{__('all.supreme_court-90')}}</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">{{__('all.press_service')}}</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('news')}}">{{__('all.news')}}</a>
                    <a class="dropdown-item" href="{{route('decision')}}">{{__('all.reports')}}</a>
                    <a class="dropdown-item" href="{{route('fotoqalereya')}}">{{__('all.photo_gallery')}}</a>
                    <a class="dropdown-item" href="{{route('video')}}">{{__('all.video_materials')}}</a>
                    <a class="dropdown-item" href="{{route('article')}}">{{__('all.articles')}}</a>
                </div>
            </li>
            <div class="dropdown nav-item">
                <a href="#" class="nav-link nav-akt dropdown-toggle" data-toggle="dropdown"
                   id="navbarDropdownMenuLink" aria-haspopup="true"
                   aria-expanded="false">{{__('all.legal_acts')}}</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class="dropdown-submenu nav-item dropdown">
                        <a class="test dropdown-item" tabindex="-1"
                           href="#">{{__('all.Legal_acts_of_the_Respublic_of_Azerbaijan')}}<span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" tabindex="-1"
                                   href="{{route('constitution')}}">{{__('all.Constitution_Codes_and_Laws')}}</a></li>
                            <li><a class="dropdown-item" tabindex="-1"
                                   href="{{route('decresorder')}}">{{__('all.decrees_and_orders')}}</a></li>
                            <li><a class="dropdown-item" tabindex="-1"
                                   href="{{route('mmdecision')}}">{{__('all.decisions_of_the_national_assembly')}}</a></li>
                            <li><a class="dropdown-item" tabindex="-1"
                                   href="{{route('kmdecision')}}">{{__('all.decisions_of_the_constitutional_court')}}</a></li>
                            <li><a class="dropdown-item" tabindex="-1"
                                   href="{{route('ampdecision')}}">{{__('all.Plenum_decisions_of_the_Supreme_Court')}}</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" tabindex="-1"
                           href="{{route('nmrlegalact')}}">{{__('all.Legal_acts_of_the_Nakhchivan_Autonomous_Republic')}}</a>
                    </li>
                    <li><a class="dropdown-item" tabindex="-1"
                           href="{{route('internationaldocument')}}">{{__('all.international_legal_documents')}}</a>
                    </li>
                </ul>
            </div>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">{{__('all.Documents')}}</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('supremedecision')}}">{{__('all.Decisions_of_the_presidium')}}</a>
                    <a class="dropdown-item" href="{{route('onlydecision')}}">{{__('all.Decisions')}}</a>
                    <a class="dropdown-item" href="{{route('bulletin')}}">{{__('all.bulletins')}}</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">{{__('all.e-services')}}</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('letter')}}">{{__('all.online_applications')}}</a>
                    <a class="dropdown-item" target="blank" href="https://courts.gov.az/az/nakhchivansupreme">{{__('all.cases_under_consideration')}}</a>
                    <a class="dropdown-item" target="blank" href="https://courts.gov.az/az/nakhchivansupreme">{{__('all.search_for_solutions')}}</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">{{__('all.for_users')}}</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('contact')}}">{{__('all.contact')}}</a>
                    <a class="dropdown-item" href="{{route('receptionday')}}">{{__('all.reception_days')}}</a>
                    <a class="dropdown-item" href="{{route('appelyasiya')}}">{{__('all.Procedure_for_filing_an_appeal')}}</a>
                    <a class="dropdown-item" href="{{route('cassasion')}}">{{__('all.Procedure_for_filing_a_cassation_appeal')}}</a>
                    <a class="dropdown-item" href="{{route('nmrcourt')}}">{{__('all.Courts_of_Nakhchivan_AR')}}</a>
                </div>
            </li>
            <form action="{{route('news')}}" class="form-inline mr-auto form-outline d-flex" method="GET">
                <input class="form-control mr-sm-2 mt-2 mb-2"  name="search" type="text" placeholder="{{__('all.search')}}"
                       aria-label="Search" style="width: 70px; ">
                <button class="btn btn-unique btn-rounded btn-sm my-0" type="submit"><i class="fas fa-search"
                                                                                        style="color: #fff; font-size: small;"></i>
                </button>
            </form>

        </ul>
    </div>
</nav>

@yield('content')

<footer>
{{--    <div class="footer ">--}}
{{--        <a href="" class=footer-logo>--}}
{{--            <img src="{{asset('storage/'.setting('site.favicon'))}}" class="logo-img" alt="">--}}
{{--            <p class="logo-text">{{__('all.Supreme_Court_of_the_Nakhchivan_Autonomous_Republic')}}</p>--}}
{{--        </a>--}}
{{--        <div class=" footer-menu  container">--}}
{{--            <div class=" main-menu">--}}
{{--                <a href="" class="menu-link bold">{{__('all.home')}}</a>--}}
{{--            </div>--}}
{{--            <div class=" main-menu">--}}
{{--                <a href="" class="menu-link bold">{{__('all.court')}}</a>--}}
{{--                <p class="menu-text"><a href="{{route('about')}}">{{__('all.general_information')}}</a></p>--}}
{{--                <p class="menu-text"><a href="{{route('colleges')}}">{{__('all.chairman_of_the_court')}}</a></p>--}}
{{--                <p class="menu-text"><a href="{{route('reyaset')}}">{{__('all.presidium')}}</a></p>--}}
{{--                <p class="menu-text"><a href="{{route('judge')}}">{{__('all.judges')}}</a></p>--}}
{{--                <p class="menu-text"><a href="{{route('mehkemeaparati')}}">{{__('all.court_apparatus')}}</a></p>--}}
{{--                <p class="menu-text"><a href="{{route('court', ['slug'=>'court'])}}">{{__('all.supreme_court-90')}}</a></p>--}}
{{--            </div>--}}
{{--            <div class="main-menu">--}}
{{--                <a href="" class="menu-link bold">{{__('all.press_service')}}</a>--}}
{{--                <p class="menu-text"><a href="{{route('news')}}">{{__('all.news')}}</a></p>--}}
{{--                <p class="menu-text"><a href="{{route('decision')}}">{{__('all.reports')}}</a>--}}
{{--                <p class="menu-text"><a href="{{route('fotoqalereya')}}">{{__('all.photo_gallery')}}</a></p>--}}
{{--                <p class="menu-text"><a href="{{route('video')}}">{{__('all.video_materials')}}</a></p>--}}
{{--                <p class="menu-text"><a  href="{{route('article')}}">{{__('all.articles')}}</a>--}}

{{--            </div>--}}
{{--            <div class="main-menu">--}}
{{--                <a href="" class="menu-link bold">{{__('all.legal_acts')}}</a>--}}
{{--                <p class="menu-text"><a href="{{route('constitution', ['constitution'=>'constitution'])}}">{{__('all.Legal_acts_of_the_Respublic_of_Azerbaijan')}}</a></p>--}}
{{--                <p class="menu-text"><a--}}
{{--                            href="{{route('nmrlegalact')}}">{{__('all.Legal_acts_of_the_Nakhchivan_Autonomous_Republic')}}</a>--}}
{{--                </p>--}}
{{--                <p class="menu-text"><a href="{{route('internationaldocument')}}">{{__('all.international_legal_documents')}}</a></p>--}}
{{--            </div>--}}
{{--            <div class="main-menu">--}}
{{--                <a href="" class="menu-link bold">{{__('all.Documents')}}</a>--}}
{{--                <p class="menu-text"><a href="{{route('supremedecision')}}">{{__('all.Decisions_of_the_presidium')}}</a></p>--}}
{{--                <p class="menu-text"><a href="{{route('onlydecision')}}">{{__('all.Decisions')}}</a></p>--}}
{{--                <p class="menu-text"><a href="{{route('bulletin')}}">{{__('all.bulletins')}}</a></p>--}}

{{--            </div>--}}
{{--            <div class="main-menu">--}}
{{--                <a href="" class="menu-link bold">{{__('all.e-services')}}</a>--}}
{{--                <p class="menu-text"><a href="{{route('letter')}}">{{__('all.online_applications')}}</a></p>--}}
{{--                <p class="menu-text"><a target="blank" href="https://courts.gov.az/az/nakhchivansupreme">{{__('all.cases_under_consideration')}}</a></p>--}}
{{--                <p class="menu-text"><a target="blank" href="https://courts.gov.az/az/nakhchivansupreme">{{__('all.search_for_solutions')}}</a>--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="main-menu">--}}
{{--                <a href="" class="menu-link bold">{{__('all.for_users')}}</a>--}}
{{--                <p class="menu-text"><a href="{{route('contact')}}">{{__('all.contact')}}</a></p>--}}
{{--                <p class="menu-text"><a href="{{route('receptionday')}}">{{__('all.reception_days')}}</a></p>--}}
{{--                <p class="menu-text"><a href="{{route('appelyasiya')}}">{{__('all.Procedure_for_filing_an_appeal')}}</a></p>--}}
{{--                <p class="menu-text"><a href="{{route('cassasion')}}">{{__('all.Procedure_for_filing_a_cassation_appeal')}}</a></p>--}}
{{--                <p class="menu-text"><a href="{{route('nmrcourt')}}">{{__('all.Courts_of_Nakhchivan_AR')}}</a></p>--}}

{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
    <div class="copyright">
        <p class="copy-text"><a href="http://rabite.nmr.az/" target="blank" class="copy-link">
                © {{ date('Y') }}{{__('all.Design')}}</a></p>
    </div>
</footer>
<script>
    document.getElementById("click").addEventListener("click", function () {
        document.getElementById("search-field").classList.toggle("form-active");
    });

    $(document).ready(function () {
        $('.dropdown-submenu a.test').on("click", function (e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>
<script src="assets/js/main.js"></script>
<script src="assets/js/owl.carousel.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js "
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q "
        crossorigin="anonymous "></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js "
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl "
        crossorigin="anonymous "></script>
@yield('js')
</body>

</html>