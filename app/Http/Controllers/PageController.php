<?php

namespace App\Http\Controllers;

use App\Appelyasiya;
use App\Article;
use App\Bulletin;
use App\Cassasion;
use App\Court;
use App\Decre;
use App\Fotoqalereya;
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
use App\Nmrcourt;
use App\Onlydecision;
use App\Order;
use App\Presidium;
use App\Receptionday;
use App\Report;
use App\Supremedecision;
use App\Video;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aboutView()
    {
        $abouts = About::find(1);
        return view('about', compact('abouts', $abouts));
    }

    public function college()
    {
        $colleges = College::get();
        return view('colleges', compact('colleges', $colleges));
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
        $reyasets = Reyaset::get();
        return view('reyaset', compact('reyasets', $reyasets));
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
        $contacts= Contact::get();
        return view('contact', compact('contacts', $contacts));
    }

    public function receptionday()
    {
        $receptiondays= Receptionday::get();
        return view('receptionday', compact('receptiondays', $receptiondays));
    }

    public function cassasion()
    {
        $cassasions= Cassasion::get();
        return view('cassasion', compact('cassasions', $cassasions));
    }

    public function nmrcourt()
    {
        $nmrcourts= Nmrcourt::get();
        return view('nmrcourt', compact('nmrcourts', $nmrcourts));
    }

    public function letter()
    {
        $letters= Letter::get();
        return view('letter', compact('letters', $letters));
    }

    public function mail()
    {
        $mails= Letter::get();
        return view('mail', compact('mails', $mails));
    }

    public function supremedecision()
    {
        $supremedecisions= Supremedecision::get();
        return view('supremedecision', compact('supremedecisions', $supremedecisions));
    }

    public function rhdecision(Request $request)
    {
        $rhdecisions= Supremedecision::where('id', $request->rhdecision)->get();
        return view('rhdecision', compact('rhdecisions', $rhdecisions));
    }

    public function judge()
    {
        $judges= Judge::get();
        return view('judge', compact('judges', $judges));
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
        $onlydecisions= Onlydecision::get();
        return view('onlydecision', compact('onlydecisions', $onlydecisions));
    }

    public function bulletin()
    {
        $bulletins= Bulletin::get();
        return view('bulletin', compact('bulletins', $bulletins));
    }

//    public function bulletinpdf(Request $request)
//    {
//        $bulletinpdfs= Bulletin::where('id', $request->bulletinpdf)->get();
//        return view('bulletinpdf', compact('bulletinpdfs', $bulletinpdfs));
//    }

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
        $appelyasiyas=Appelyasiya::get();
        return view('appelyasiya', compact('appelyasiyas', $appelyasiyas));
    }

    public function chappelyasiya(Request $request)
    {
        $chappelyasiyas= Appelyasiya::where('id', $request->chappelyasiya)->get();
        return view('chappelyasiya', compact('chappelyasiyas', $chappelyasiyas));
    }
}
