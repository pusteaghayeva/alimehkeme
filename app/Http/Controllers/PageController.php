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
        $courts = Court::get();
        return view('court', compact('courts', $courts));
    }

    public function decre(Request $request)
    {
        $decres = Court::where('id', $request->decre)->get();
        return view('decree', compact('decres', $decres));
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
        $decisions= Decision::get();
        return view('decision', compact('decisions', $decisions));
    }

    public function report(Request $request)
    {
        $reports= Decision::where('id', $request->report)->get();
        return view('report', compact('reports', $reports));
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
        $supremedecisions= Supremedecision::get();
        return view('supremedecision', compact('supremedecisions', 'locale'));
    }

    public function rhdecision(Request $request)
    {
        $rhdecisions= Supremedecision::where('id', $request->rhdecision)->get();
        return view('rhdecision', compact('rhdecisions', $rhdecisions));
    }

    public function judge()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $judges= Judge::get();
        return view('judge', compact('judges', 'locale'));
    }

    public function article()
    {
        $articles= Article::get();
        return view('article', compact('articles', $articles));
    }

    public function inarticle(Request $request)
    {
        $inarticles= Article::where('id', $request->inarticle)->get();
        return view('inarticle', compact('inarticles', $inarticles));
    }

    public function onlydecision()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $onlydecisions= Onlydecision::get();
        return view('onlydecision', compact('onlydecisions', 'locale'));
    }

    public function bulletin()
    {
        $bulletins= Bulletin::get();
        return view('bulletin', compact('bulletins', $bulletins));
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
        $decresorders=Decresorder::get();
        return view('decresorder', compact('decresorders', $decresorders));
    }

    public function decresorderonly(Request $request)
    {
        $decresorderonlies= Decresorder::where('id', $request->decresorderonly)->get();
        return view('decresorderonly', compact('decresorderonlies', $decresorderonlies));
    }



    public function mmdecision()
    {
        $mmdecisions=Mmdecision::get();
        return view('mmdecision', compact('mmdecisions', $mmdecisions));
    }

    public function mmdecisiononly(Request $request)
    {
        $mmdecisiononlies= Decresorder::where('id', $request->mmdecisiononly)->get();
        return view('mmdecisiononly', compact('mmdecisiononlies', $mmdecisiononlies));
    }


    public function kmdecision()
    {
        $kmdecisions=Kmdecision::get();
        return view('kmdecision', compact('kmdecisions', $kmdecisions));
    }

    public function kmdecisiononly(Request $request)
    {
        $kmdecisiononlies= Kmdecision::where('id', $request->kmdecisiononly)->get();
        return view('kmdecisiononly', compact('kmdecisiononlies', $kmdecisiononlies));
    }


    public function ampdecision()
    {
        $ampdecisions=Ampdecision::get();
        return view('ampdecision', compact('ampdecisions', $ampdecisions));
    }

    public function ampdecisiononly(Request $request)
    {
        $ampdecisiononlies= Ampdecision::where('id', $request->ampdecisiononly)->get();
        return view('ampdecisiononly', compact('ampdecisiononlies', $ampdecisiononlies));
    }

    public function nmrlegalact()
    {
        $nmrlegalacts=Nmrlegalact::get();
        return view('nmrlegalact', compact('nmrlegalacts', $nmrlegalacts));
    }

    public function nmrlegalactonly(Request $request)
    {
        $nmrlegalactonlies= Nmrlegalact::where('id', $request->nmrlegalactonly)->get();
        return view('nmrlegalactonly', compact('nmrlegalactonlies', $nmrlegalactonlies));
    }


    public function internationaldocument()
    {
        $internationaldocuments=Internationaldocument::get();
        return view('internationaldocument', compact('internationaldocuments', $internationaldocuments));
    }

    public function internationalpdf(Request $request)
    {
        $internationalpdfs=  Internationaldocument::where('id', $request->internationalpdf)->get();
        return view('internationalpdf', compact('internationalpdfs', $internationalpdfs));
    }


    public function news()
    {
        $newss=News::get();
        return view('news', compact('newss', $newss));
    }

    public function singlenews(Request $request)
    {
        $singlenewss=News::where('id', $request->singlenews)->get();
        return view('singlenews', compact('singlenewss', $singlenewss));
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
        $constitutions=Constitution::get();
        return view('constitution', compact('constitutions', $constitutions));
    }

    public function constitutiononly(Request $request)
    {
        $constitutiononlys= Constitution::where('id', $request->constitutiononly)->get();
        return view('constitutiononly', compact('constitutiononlys', $constitutiononlys));
    }

    public function mehkemeaparati()
    {
        $mehkemeaparatis=Mehkemeaparati::get();
        return view('mehkemeaparati', compact('mehkemeaparatis', $mehkemeaparatis));
    }



}
