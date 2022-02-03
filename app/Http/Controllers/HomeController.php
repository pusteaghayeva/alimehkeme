<?php

namespace App\Http\Controllers;

use App\Category;
use App\Complaint;
//use App\Contact;
use App\Models\Letter;
use App\News;
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

//        $contacts = Contact::where('status', 1)->get();
//        $contacts = $contacts->translate(app()->getLocale());

//        $news = News::where('status', 1)->limit(3)->orderBy('id', 'desc')->get();
        $news = News::limit(3)->withTranslations()->orderBy('id', 'desc')->get();
//        $news = $news->translate(app()->getLocale());

        $complaints= Complaint::where('status', 1)->get();
//        $complaints = $complaints->translate(app()->getLocale());

        $usefull_links= UsefullLink::where('status', 1)->get();
//        $usefull_links = $usefull_links->translate(app()->getLocale());

        $slider_todays= SliderToday::get();
//        $slider_todays = $slider_todays->translate(app()->getLocale());

//        $letter= Letter::get();

        $categories= Category::where('status', 1)->get();
        $works = Work::where('status', 1)->get();


        return view('home.index', compact('works', 'categories', 'sliders',   'news',  'complaints',  'usefull_links',  'slider_todays', 'locale'));
    }
}
