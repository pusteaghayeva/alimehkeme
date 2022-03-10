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

        $news = News::where('image', '!=', '')->limit(3)->withTranslations()->orderBy('id', 'desc')->get();


        $usefull_links= UsefullLink::where('status', 1)->get();

        $slider_todays= SliderToday::get();


        $categories= Category::where('status', 1)->get();
        $categories = $categories->translate(app()->getLocale());

        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $elaqes= Elaqe::get();


        $locale = \Illuminate\Support\Facades\Session::get('locale');
        $shikayets= Shikayet::get();

        return view('home.index', compact( 'sliders', 'elaqes', 'shikayets',  'news', 'categories',    'usefull_links','contacts',  'slider_todays', 'locale'));
    }
}
