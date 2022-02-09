<?php

namespace App\Http\Controllers;

use App\Category;
use App\Complaint;
//use App\Contact;
use App\Elaqe;
use App\Models\Contact;
use App\Models\Letter;
use App\News;
use App\Shikayet;
use App\Slider;
use App\SliderToday;
use App\UsefullLink;
use App\Work;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class HomeController extends Controller
{
    public function index()
    {
        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $sliders = Slider::where('status', 1)->get();

        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $contacts = Contact::get();
//        $contacts = $contacts->translate(app()->getLocale());

//        $news = News::where('status', 1)->limit(3)->orderBy('id', 'desc')->get();
        $news = News::limit(3)->withTranslations()->orderBy('id', 'desc')->get();
//        $news = $news->translate(app()->getLocale());

//        $complaints= Complaint::where('status', 1)->get();
//        $complaints = $complaints->translate(app()->getLocale());

        $usefull_links= UsefullLink::where('status', 1)->get();
//        $usefull_links = $usefull_links->translate(app()->getLocale());

        $slider_todays= SliderToday::get();
//        $slider_todays = $slider_todays->translate(app()->getLocale());

//        $letter= Letter::get();

        $categories= Category::where('status', 1)->get();
        $categories = $categories->translate(app()->getLocale());
//        $works = Work::where('status', 1)->get();

        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $elaqes= Elaqe::get();


        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $shikayets= Shikayet::get();

        return view('home.index', compact( 'sliders', 'elaqes', 'shikayets',  'news', 'categories',    'usefull_links','contacts',  'slider_todays', 'locale'));
    }
}
