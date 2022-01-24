@extends('main')
{{--@section('title', '-'.$page->title)--}}
@section('header')
@section('content')
    <div class="about-content container">
{{--        @forelse($pages as $page)--}}
            <h3 class="about-title">{{$pages->title}}</h3>
            <h3 class="second-title">Naxçıvan Muxtar Respublikası Ali Məhkəməsi apellyasiya instansiyası məhkəməsi kimi öz ərazi yurisdiksiyasına aid edilmiş birinci instansiya məhkəmələri tərəfindən baxılmış işlər üzrə məhkəmə aktlarından verilmiş apellyasiya şikayətləri və apellyasiya
                protestləri üzrə işlərə baxır. Naxçıvan Muxtar Respublikası Ali Məhkəməsi mülki kollegiyadan, inzibati kollegiyadan, kommersiya kollegiyasından və cinayət kollegiyadan ibarətdir.</h3>
            <h2 class="about-title-se">NAXÇIVAN MR ALİ MƏHKƏMƏSİNİN TARİXİ</h2>
            <p class="about-text">Naxçıvan Muxtar Respublikasının Ali Məhkəməsi ölkəmizin məhkəmə orqanları sistemində özünəməxsus yer tutur. Məhkəmələr və hakimlər haqqında Azərbaycan Respublikasının 1997-ci il 10 iyun tarixli Qanununda Naxçıvan MR Ali Məhkəməsi apellyasiya instansiyası
                məhkəməsi kimi təsbit edilmişdir. Lakin digər apellyasiya məhkəmələrindən fərqli olaraq, Naxçıvan MR Ali Məhkəməsi Məhkəmələr və hakimlər haqqında Qanunun 52-ci maddəsinə əsasən həm də Naxçıvan Muxtar Respublikasında ali məhkəmə organı funksiyasını
                yerinə yetirir və bundan irəli gələn Naxçıvan Muxtar Respublikasının Konstitusiyası ilə nəzərdə tutulmuş konstitusiya nəzarəti üzrə səlahiyyətləri həyata keçirir (Naxçıvan Muxtar Respublikası Konstitusiyasının 16, 44-cü maddələri).</p>
{{--        @empty--}}
{{--            Yoxdur.--}}
{{--        @endforelse--}}

        {{--    <p class="about-text">Naxçıvan Muxtar Respublikasının Ali Məhkəməsi bu günədək uzun tarixi yol keçmiş, bu tarix Naxçıvan Muxtar Respublikasının, bütövlükdə Azərbaycanın tarixi ilə sıx bağlı olub, ölkənin və muxtar respublikanın müxtəlif zaman kəsiyində yaşadığı dövrü--}}
        {{--        özündə əks etdirmişdir.</p>--}}
        {{--    <p class="about-text">--}}
        {{--        İlk dəfə Azərbaycan Demokratik Cumhuriyyəti dövründə (1918-1920) başlanılan məhkəmə orqanları sisteminin yaradılması prosesi milli hakimiyyətin sügutu nəticəsində başa çatdırılmamış qaldı.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">Lakin, Sovet hakimiyyətinin qurulmasından az müddət sonra Azərbaycanda yenidən məhkəmə orqanlarının təşkilinə başlanıldı.</p>--}}
        {{--    <p class="about-text">Azərbaycan SSR Mərkəzi İcraiyyə Komitəsinin 1922-ci il 09 dekabr tarixdə keçirilən 2-ci sessiyasında «Azərbaycan SSR Məhkəmə quruluşu haqqında» ilk Əsasnamə qəbul edildi.</p>--}}
        {{--    <p class="about-text">1922-ci il 30 dekabr tarixdə SSRİ-nin yaradılması ilə əlaqədar digər dövlət strukturlarında olduğu kimi Azərbaycan SSR məhkəmə orqanları sistemində də müəyyən dəyişikliklər həyata keçirildi. 1924-cü il 29 oktyabr tarixdə «SSRİ müttəfiq respublikalarının--}}
        {{--        məhkəmə quruluşunun əsasları haqqında» qanun qəbul edildikdən sonra buna uyğun olaraq Azərbaycan SSR MİK özünün 1925-ci il 3 yanvar tarixli qanunu ilə Azərbaycan SSR Yuxarı Məhkəməsini Azərbaycan SSR Ali Məhkəməsinə çevirdi və buna müvafiq--}}
        {{--        olaraq Naxçıvan MSSR-də fəaliyyət göstərən bölmə də artıq 3 oktyabr 1925-ci il tarixdən Ali Məhkəmənin Naxçıvan MSSR-də bölməsi adlandırıldı.</p>--}}
        {{--    <p class="about-text">Ali Məhkəmənin Naxçıvan MSSR-də fəaliyyət göstərən bölməsi həm onun səlahiyyətlərinə aid edilmiş cinayət və mülki işlər üzrə birinci instansiya məhkəməsi olaraq, həm də əhatə etdiyi ərazidə təşkil olunmuş xalq məhkəmələri üçün yuxarı məhkəmə orqanı--}}
        {{--        kimi təxminən 1934-cü ilin ortalarınadək fəaliyyət göstərdi.</p>--}}
        {{--    <p class="about-text">--}}
        {{--        Azərbaycan SSR MİK-nin və XKS-nin 23 avqust 1934-cü il tarixli qərarı ilə 6 iyul 1927-ci il tarixdən etibarən respublikada məhkəmə quruluşu məsələlərini tənzimləyən Əsasnaməyə bir sıra dəyişikliklər edildli. Həmin dəyişikliklərdən biri də Azərbaycan SSR--}}
        {{--        Ali Məhkəməsinin Naxçıvan MSSR-də fəaliyyət göstərən bölməsinin ləğv edilməsi və onun əvəzinə Naxçıvan MSSR Baş Məhkəməsinin yaradılması idi.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        Qeyd olunan tarixdən yaradılan, 1937-ci ildə Azərbaycan SSR-in yeni Konstitusiyasının qəbul edilməsindən sonra Naxçıvan MSSR Ali Məhkəməsi adını daşıyan məhkəmə müxtəlif vaxtlarda müvafiq qanunvericiliyin dəyişilməsinə baxmayaraq, bütün sovet dövrü ərzində--}}
        {{--        demək olar ki, ciddi dəyişikliyə uğramadı və ona aid edilmiş işlərə birinci və yuxarı instansiya məhkəməsi qismində baxmaq, həmçinin onun fəaliyyəti dairəsində olan məhkəmələr üzərində məhkəmə nəzarətini həyata keçirmək funksiyalarıni saxladı.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        SSRİ-nin sügutundan az müddət əvvəl 1990-cı il 26 iyun tarixdə qəbul edilən «Azərbaycan SSR-də məhkəmə quruluşu haqqında» yeni qanun bu sahədə bəzi dəyişkliklərin həyata keçirilməsini nəzərdə tuturdu.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        Lakin həmin dövrdə SSRİ-də, o cümlədən Azərbaycanda cərayan edən hadisələr, ən başlıcası 18 oktyabr 1991-ci ildə Azərbaycanın dövlət müstəqilliyini əldə etməsi məhkəmə quruluşunun, ədalət mühakiməsi qaydalarının daha geniş və köklü şəkildə dəyişdirilməsini--}}
        {{--        tələb edirdi.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        Buna baxmayaraq, digər sahələrdə olduğu kimi, məhkəmə orqanları sistemində də həmin illərdə aparılan dəyişikliklər yetərli deyildi.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        Ancaq 1993-cü ildə xalqın ümummilli lideri möhtərəm Heydər Əliyevin hakimiyyətə qayıdışı ilə bu islahatların aparlması üçün real şərait yarandı və Prezident H.Əliyevin bilavasitə rəhbərliyi ilə Azərbaycan Respublikasının müstəqil, hüquqi dövlət kimi təşəkkül--}}
        {{--        tapmasını təmin edə biləcək məhkəmə islahatlarına başlanıldı.s--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        Bu islahatların bünövrəsində möhtərəm Heydər Əliyevin rəhbərliyi ilə hazırlanmış 12 noyabr 1995-ci ildə ümumxalq səsverməsi yolu ilə qəbul edilmiş müstəqil Azərbycan Respublikasının Konstitusiyası və onun əsasında 10 iyun 1997-ci ildə qəbul edilən «Məhkəmələr--}}
        {{--        və hakimlər haqqında» Azərbaycan Respublikasının Qanunu dayanır.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">«Məhkəmələr və Hakimlər haqqında» 10 iyun 1997-ci il tarixli Qanun Azərbaycan Respublikasında üçpilləli məhkəmə sistemini bərqərar etdi və müvafiq Məcəllələr, o cümlədən Azərbaycan Respublikasının Mülki-Prosessual, Cinayət-Prosessual Məcəllələri--}}
        {{--        qəbul edildikdən sonra 2000-ci ilin sentyabr ayından bu sistem real olaraq fəaliyyət göstərməyə başladı.</p>--}}
        {{--    <p class="about-text">--}}
        {{--        Qanuna görə bu üçpilləli sistem daxilində Naxçıvan MR Ali Məhkəməsinin yeri həm birinci instansiya, həm də ikinci-apellyasiya instansiyası məhkəməsi kimi müəyyən edildi.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        Bu təyinata uyğun olaraq Ali Məhkəmənin tərkibində qanunla onun səlahiyyətlərinə aid edilmiş ağır cinayət işlərinə baxan ağır cinayətlərə dair işlər üzrə birinci instansiya kollegiyası, muxtar respublikanın ərazisində fəaliyyət göstərən rayon (şəhər)--}}
        {{--        məhkəmələrinin cinayət işləri və inzibati xətalara dair materiallar eləcə də mülki işlər üzrə qanuni qüvvəyə minməmiş qərarlarından verilən apellyasiya şikayətlərinə və protestlərinə apellyasiya məhkəməsi qismində baxan cinayət işləri və inzibati--}}
        {{--        xətalara dair işlər üzrə, eləcə də mülki işlər üzrə apellyasiya kollegiyaları yaradıldı.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        Azərbaycan Respublikası Prezidentinin 17 iyun 1999-cu il tarixli Fərmanına əsasən Naxçıvan MR Ali Məhkəməsinin hakimlərinin sayı 14 nəfər müəyyən olundu və 2000-ci ilin sentyabrından 2003-cü ilin yanvarınadək məhkəmə hakim heyəti ilə tam komplektləşdirildi.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        2000-ci ilin sentyabrından ötən dövr ərzində bu formada təşkil olunmuş Naxçıvan MR Ali Məhkəməsinin, ümumiyyətlə Azərbaycanın bütün məhkəmə orqanlarının fəaliyyəti üçpilləli məhkəmə sisteminin sovet dövründə və 2000-ci ilin sentyabr ayınadək Azərbaycan--}}
        {{--        Respublikasında mövcud olan ikipilləli məhkəmə sistemi ilə müqayisədə daha mütərəqqi məhkəmə quruluşu forması olduğunu sübut etdi.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        Lakin, bir tərəfdən Azərbaycan Respublikasında gedən inkişaf prosesləri və Azərbaycan Respublikasının Avropa ailəsinə, nüfuzlu beynəlxalq təşkilatlara daha sıx inteqrasiyası, digər tərəfdən Azərbaycan Respublikasının Apellyasiya və İqtisad məhkəmələrinin--}}
        {{--        bölgələrdən uzaqda - Bakı şəhərində təşkil olunmasından törəyən çətinliklər məhkəmə quruluşunda dəyişikliklərin edilməsini bir zərurət kimi meydana gətirdi.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        Həmin məhkəmələrin bölgələrdən çox uzaqda yerləşməsi ilə bağlı yaranan problemlər Naxçıvan Muxtar Respublikasına münasibətdə özünü daha qabarıq şəkildə biruzə verirdi.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        Çünki, birinci instansiya məhkəmələri kimi fəaliyyət göstərən Naxçıvan MR Ali Məhkəməsinin ağır cinayətlərə dair işlər üzrə kollegiyasının, Naxçıvan Muxtar Respublikasının Hərbi Məhkəməsinin və Naxçıvan MR İqtisad Məhkəməsinin qərarlarından verilən protest--}}
        {{--        və şikayətlərə müvafiq olaraq Azərbaycan Respublikasının Apellyasiya Məhkəməsində və Azərbaycan Respublikasının İqtisad Məhkəməsində baxılırdı. Naxçıvan Muxtar Respublikasına qarşı Ermənistan tərəfindən tətbiq olunan blokada isə muxtar respublikada--}}
        {{--        yaşayan vətəndaşlarımızın həmin məhkəmələrdə baxılan işlərlə əlaqədar Bakı şəhərinə gedib-gəlmələri üçün çox ciddi əngəllər törədirdi.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        Azərbaycan Respublikasının 30 dekabr 2005-ci il tarixli Qanunu ilə Məhkəmələr və hakimlər haqqında Qanuna, Azərbaycan Respublikasının bəzi qanunvericilik aktlarına dəyişikliklər və əlavələr edilməsi barədə Azərbaycan Respublikasının 2007-ci il 16 iyun--}}
        {{--        tarixli Qanunu ilə müvafiq prosesual qanunvericiliyə əlavə və dəyişikliklərin edilməsi və Azərbaycan Respublikası Prezidenti tərəfindən məhkəmə hakimiyyətinin müasirləşdirilməsi məsələlərinə həsr olunmuş 19 yanvar 2006-cı il tarixli Fərmanın--}}
        {{--        verilməsi nəticəsində məhkəmə islahatları növbəti mərhələyə yüksəldi və bu mərhələdə Naxçıvan Muxtar Respublikasının Ali Məhkəməsi də çox ciddi, mütərəqqi dəyişikliklərə uğradı.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        Prosessual hüquq normalarının dəyişilməsini nəzərdə tutan 2007-ci il 16 iyun tarixli Qanunun 16 iyul 2009-cu ildə qüvvəyə minməsilə Naxçıvan Muxtar Respublikasında ayrıca Ağır Cinayətlərə Dair İşlər üzrə Məhkəmə yaradıldı və bununla əlaqədar Naxçıvan--}}
        {{--        Muxtar Respublikasının Ali Məhkəməsinin tərkibində olan Ağır Cinayətlərə Dair İşlər üzrə I instansiya kollegiyası ləğv olundu. Eyni zamanda Ali Məhkəmədə əvvəldən mövcud olan Mülki işlər üzrə kollegiyadan və Cinayət işləri və inzibati xətalara--}}
        {{--        dair işlər üzrə kollegiyadan savayı daha iki struktur - İqtisadi mübahisələrə dair işlər üzrə kollegiya və Hərbi məhkəmələrin işləri üzrə kollegiya yaradıldı.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        Yeni kollegiyaların yaradılmasından sonra 2009-cu ilin ilul ayından etibarən artıq Naxçıvan Muxtar Respublikasının Hərbi Məhkəməsinin baxdığı işlər (o cümlədən ağır cinayətlərlə bağlı işlər) üzrə çəxarılmış qərarlardan verilən şikayət və protestlərə həmçinin--}}
        {{--        Naxçıvan MR İqtisad Məhkəməsinin qərarlarından verilən şikayətlərə müvafiq olaraq Hərbi məhkəmələrin işləri üzrə kollegiyada və İqtisadi mübahisələrə dair işlər üzrə kollegiyada baxılır. Ağır Cinayətlərə dair İşlər Üzrə Naxçıvan Muxtar Respublikası--}}
        {{--        Məhkəməsinin çıxardığı qərarlardan verilən şikayət və protestlərə isə Naxçıvan Muxtar Respublikası Ali Məhkəməsinin cinayət işləri və inzibati xətalara dair işlər üzrə kollegiyasında baxılır.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        Bu yeniliklər Ali Məhkəmə tərəfindən işlərə birinci instansiya gaydasında baxılmasını istisna edir və Ali Məhkəmənin sırf apellyasiya instansiyası məhkəməsi kimi fəaliyyət göstərməsini nəzərdə tutur.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        Bununla yanaşı qanunvericiliyə gətirilən yeniliklər Naxçıvan Muxtar Respublikası Ali Məhkəməsinin Naxçıvan MR Konstitusiyası ilə təsbit edilən muxtar respublikada konstitusiya nəzarətinin həyata keçirilməsi ilə bağlı funksiyalarına toxunmamışdır.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        Məhkəm hüquq islahatlarının davamı kimi Məhkəmələr və hakimlər haqqında və Məhkəmə-Hüquq Şurası haqqında Azərbaycan Respublikasının qanunlarına dəyişikliklər və əlavələr edilməsi barədə Azərbaycan Respublikasının 22 iyun 2010-cu il tarixli qanununa əsasən--}}
        {{--        Naxçıvan Muxtar Respublikası Ali Məhkəməsinin kollegiyalarının adları dəyişdirilərək mülki kollegiya, inzibati-iqtisadi kollegiya, cinayət kollegiyası və hərbi kollegiya adlandırılmışdır. “Məhkəmələr və hakimlər haqqında” Azərbaycan Respublikasının--}}
        {{--        Qanununda dəyişiklik edilməsi barədə 9 iyul 2019-cu il tarixli Qanunla Naxçıvan Muxtar Respublikası Ali Məhkəməsi mülki kollegiyadan, kommersiya kollegiyasından, inzibati kollegiyadan və cinayət kollegiyasından ibarət tərkibdə fəaliyyət göstərir.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        Muxtar Respublikanın Ali Məhkəməsində «Məhkəmələr və hakimlər haqqında» Qanununun 54-cü maddəsinə əsasən Rəyasət Heyəti fəaliyyət göstərir.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        Rəyasət Heyətinin tərkibinə Ali Məhkəmənin sədri, onun müavini və kollegiya sədrləri daxildir.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        Qanuna görə Rəyasət Heyəti ədalət mühakiməsi funksiyasını yerinə yetirmir və qanunla onun səlahiyyətlərinə aid edilmiş məhkəmənin fəaliyyətinin təmin edilməsi ilə bağlı digər məsələləri həll edir, o cümlədən hakimləri kollegiyalar üzrə bölüşdürür, məhkəmə--}}
        {{--        təcrübəsinin ümumiləşdirilməsi və məhkəmə statistikasının təhlili barədə materiallara baxır, qanunvericilik aktlarının düzgün tətbiq edilməsi barədə muxtar respublikanın rayon (şəhər) məhkəmələrinə metodiki kömək göstərir, Naxçıvan Muxtar--}}
        {{--        Respublikasının Ali Məhkəməsi yanında Elmi-Məsləhət Şurasının əsasnaməsini və tərkibini təsdiq edir və bir sıra başqa məsələləri həll edir.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        Elmi-Məsləhət Şurasının Əsasnaməsi və tərkibi Ali Məhkəmənin Rəyasət Heyətinin qərarı ilə təsdiq edilmiş və 2004-cü ildən Şura fəaliyyətə başlamışdır.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        Naxçıvan Muxtar Respublikasının digər məhkəmələri kimi, Ali Məhkəmənin də fəaliyyətinin müasir tələblər səviyyəsində təşkil olunmasında Naxçıvan Muxtar Respublikasında hüquq institutlarının inkişafı haqqında Azərbaycan Respublikası Prezidentinin 2 noyabr--}}
        {{--        2006-cı il tarixli Fərmanının böyük rolu olmuşdur.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        Muxtar respublikada qısa müddət ərzində bu Fərmanın realizə edilməsi təmin olunmuş və artıq 2007-ci ilin noyabr ayının 29-da Naxçıvan Muxtar Respublikası Ali Məclisi Sədrinin iştirakı ilə Ali Məhkəmənin yeni inzibati binası istifadəyə verilmişdir.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">--}}
        {{--        Naxçıvan şəhərinin mərkəzində yerləşən bu görkəmli binada hakimlərin, məhkəmə aparatı işçilərinin keyfiyyətli və səmərəli fəaliyyət göstərməsi üçün zəruri şərait yüksək səviyyədə təmin edilmişdir.--}}
        {{--    </p>--}}
        {{--    <p class="about-text">Bir tərəfdən qanunvericiliyə gətirilən yeniliklər, digər tərəfdən isə məhkəmələrin maddi təminat məsələlərinə göstərilən diqqət, o cümlədən hakimlərin, məhkəmə personalının iş şəraitinin müasir meyarlar səviyyəsinə çatdırılması Naxçıvan Muxtar--}}
        {{--        Respublikası Ali Məhkəməsi tərəfindən ədalət mühakiməsinin həyata keçirilməsi üzrə vəzifələrinin keyfiyyətlə yerinə yetirilməsinə, insan hüquq və azadlıglarının səmərəli şəkildə müdafiə olunmasına xidmət edir.</p>--}}

    </div>


@endsection