<?php

namespace App\Http\Controllers;

use App\Ampdecision;
use App\Appelyasiya;
use App\Article;
use App\Bulletin;
use App\Cassasion;
use App\Constitution;
use App\Court;
use App\Decre;
use App\Decresorder;
use App\Fotoqalereya;
use App\Internationaldocument;
use App\Kmdecision;
use App\Mehkemeaparati;
use App\Mmdecision;
use App\Models\About;
use App\Models\Category;
use App\Models\College;
use App\Models\Contact;
use App\Models\Decision;
use App\Models\Judge;
use App\Models\Letter;
use App\Models\Page;
//use App\Models\Gallery;
use App\Models\Gallery;
use App\Models\Reyaset;
use App\News;
use App\Nmrcourt;
use App\Nmrlegalact;
use App\Onlydecision;
use App\Order;
use App\Presidium;
use App\Receptionday;
use App\Report;
use App\Supremedecision;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{
//    public function aboutView()
//    {
//        $abouts = About::find(1);
//        return view('about', compact('abouts', $abouts));
//    }
    public function about()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $abouts = About::get();
        return view('about', compact('abouts', $abouts,'locale'));
    }

    public function college()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $colleges = College::get();
        return view('colleges', compact('colleges', 'locale'));
    }

    public function court()
    {
//digerlerini de bunun kimi etmek, amma title-nin tercumesi ishlemir.
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $category = Category::where('id', 28)->get();
        $courts = Court::orderBy('id', 'asc')->paginate(8);
        return view('court', compact('courts', 'locale', 'category'));
    }

    public function decre(Request $request)
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $decres = Court::where('id', $request->decre)->get();
        return view('decree', compact('decres', 'locale'));
    }
    public function order()
    {
        $orders = Order::get();
        return view('order', compact('orders', $orders));
    }
    public function reyaset()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $reyasets = Reyaset::get();
        return view('reyaset', compact('reyasets', 'locale'));
    }

    public function decision()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $decisions= Decision::orderBy('id', 'asc')->paginate(10);
        return view('decision', compact('decisions', 'locale'));
    }

    public function report(Request $request)
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $reports= Decision::where('id', $request->report)->get();
        return view('report', compact('reports', 'locale'));
    }



    public function gallery()
    {
        $galleries= Gallery::get();
        return view('gallery', compact('galleries', $galleries));
    }
    public function contact()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $contacts= Contact::get();
        return view('contact', compact('contacts', 'locale'));
    }

    public function receptionday()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $receptiondays= \App\Models\Receptionday::get();
        return view('receptionday', compact('receptiondays', 'locale'));
    }

    public function cassasion()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $cassasions= \App\Models\Cassasion::get();
        return view('cassasion', compact('cassasions', 'locale'));
    }

    public function nmrcourt()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $nmrcourts= Nmrcourt::get();
        return view('nmrcourt', compact('nmrcourts','locale'));
    }

    public function letter()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $letters= \App\Models\Letter::get();
        return view('letter', compact('letters', 'locale'));
    }

    public function mail()
    {
        $mails= Letter::get();
        return view('mail', compact('mails', $mails));
    }

    public function supremedecision()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $supremedecisions= Supremedecision::orderBy('id', 'asc')->paginate(10);
        return view('supremedecision', compact('supremedecisions', 'locale'));
    }

    public function rhdecision(Request $request)
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $rhdecisions= Supremedecision::where('id', $request->rhdecision)->get();
        return view('rhdecision', compact('rhdecisions', 'locale'));
    }

    public function judge()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $judges= Judge::get();
        return view('judge', compact('judges', 'locale'));
    }

    public function article()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $articles= Article::orderBy('id', 'asc')->paginate(5);
        return view('article', compact('articles', 'locale'));
    }

    public function inarticle(Request $request)
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $inarticles= Article::where('id', $request->inarticle)->get();
        return view('inarticle', compact('inarticles', 'locale'));
    }

    public function onlydecision()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $onlydecisions= Onlydecision::get();
        return view('onlydecision', compact('onlydecisions', 'locale'));
    }

    public function bulletin()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $bulletins= Bulletin::orderBy('id', 'asc')->paginate(10);
        return view('bulletin', compact('bulletins', 'locale'));
    }

    public function bulletinpdf(Request $request)
    {
        $bulletinpdfs= Bulletin::where('id', $request->bulletinpdf)->get();
        return view('bulletinpdf', compact('bulletinpdfs', $bulletinpdfs));
    }

    public function fotoqalereya()
    {
        $fotoqalereyas=Fotoqalereya::get();
        return view('fotoqalereya', compact('fotoqalereyas', $fotoqalereyas));
    }

    public function video()
    {
        $videos=Video::get();
        return view('video', compact('videos', $videos));
    }

    public function appelyasiya()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $appelyasiyas=Appelyasiya::get();
        return view('appelyasiya', compact('appelyasiyas', 'locale'));
    }

    public function chappelyasiya(Request $request)
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $chappelyasiyas= Appelyasiya::where('id', $request->chappelyasiya)->get();
        return view('chappelyasiya', compact('chappelyasiyas', 'locale'));
    }


    public function decresorder()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $decresorders=Decresorder::orderBy('id', 'asc')->paginate(10);
        return view('decresorder', compact('decresorders', 'locale'));
    }

    public function decresorderonly(Request $request)
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $decresorderonlies= Decresorder::where('id', $request->decresorderonly)->get();
        return view('decresorderonly', compact('decresorderonlies', 'locale'));
    }



    public function mmdecision()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $mmdecisions=Mmdecision::orderBy('id', 'asc')->paginate(10);
        return view('mmdecision', compact('mmdecisions', 'locale'));
    }

    public function mmdecisiononly(Request $request)
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $mmdecisiononlies= Decresorder::where('id', $request->mmdecisiononly)->get();
        return view('mmdecisiononly', compact('mmdecisiononlies', 'locale'));
    }


    public function kmdecision()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $kmdecisions=Kmdecision::orderBy('id', 'asc')->paginate(10);
        return view('kmdecision', compact('kmdecisions','locale'));
    }

    public function kmdecisiononly(Request $request)
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $kmdecisiononlies= Kmdecision::where('id', $request->kmdecisiononly)->get();
        return view('kmdecisiononly', compact('kmdecisiononlies', 'locale'));
    }


    public function ampdecision()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $ampdecisions=Ampdecision::orderBy('id', 'asc')->paginate(10);
        return view('ampdecision', compact('ampdecisions', 'locale'));
    }

    public function ampdecisiononly(Request $request)
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $ampdecisiononlies= Ampdecision::where('id', $request->ampdecisiononly)->get();
        return view('ampdecisiononly', compact('ampdecisiononlies', 'locale'));
    }

    public function nmrlegalact()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $nmrlegalacts=Nmrlegalact::orderBy('id', 'asc')->paginate(10);
        return view('nmrlegalact', compact('nmrlegalacts', 'locale'));
    }

    public function nmrlegalactonly(Request $request)
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $nmrlegalactonlies= Nmrlegalact::where('id', $request->nmrlegalactonly)->get();
        return view('nmrlegalactonly', compact('nmrlegalactonlies', 'locale'));
    }


    public function internationaldocument()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $internationaldocuments=Internationaldocument::orderBy('id', 'asc')->paginate(10);
        return view('internationaldocument', compact('internationaldocuments', 'locale'));
    }

    public function internationalpdf(Request $request)
    {
        $internationalpdfs=  Internationaldocument::where('id', $request->internationalpdf)->get();
        return view('internationalpdf', compact('internationalpdfs', $internationalpdfs));
    }


    public function news()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $newss=News::orderBy('id', 'desc')->paginate(5);
        return view('news', compact('newss', 'locale'));
    }

    public function singlenews(Request $request)
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $singlenewss=News::where('id', $request->singlenews)->get();
        return view('singlenews', compact('singlenewss', 'locale'));
    }


//    public function court()
//    {
//        $courts = Court::get();
//        return view('court', compact('courts', $courts));
//    }
//
//    public function decre(Request $request)
//    {
//        $decres = Court::where('id', $request->decre)->get();
//        return view('decree', compact('decres', $decres));
//    }








    public function constitution()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $constitutions=Constitution::orderBy('id', 'asc')->paginate(10);
        return view('constitution', compact('constitutions', 'locale'));
    }

    public function constitutiononly(Request $request)
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $constitutiononlys= Constitution::where('id', $request->constitutiononly)->get();
        return view('constitutiononly', compact('constitutiononlys', 'locale'));
    }

    public function mehkemeaparati()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $mehkemeaparatis=Mehkemeaparati::get();
        return view('mehkemeaparati', compact('mehkemeaparatis', 'locale'));
    }



}
