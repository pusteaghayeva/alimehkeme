<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Facades\Voyager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('locale/{locale}', [\App\Http\Controllers\LanguageController::class, 'index'])->name('locale');
 //Admin Panel




//Language
Route::get('loc/{locale}', function($locale){
    $langs = ['az', 'en'];
    if(in_array($locale, $langs)){
        Session::put('locale', $locale);
    }else{
        Session::put('locale', "az");
    }
    return redirect()->back();
})->name('locale');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/login', [\TCG\Voyager\Http\Controllers\VoyagerAuthController::class, 'login'])->name('login');
Route::get('logout', [\TCG\Voyager\Http\Controllers\VoyagerAuthController::class, 'logout']);
//page

//Route::get('/{slug}', [\App\Http\Controllers\PageController::class, 'about'])
//->name('{slug}');
//Route::get('/{slug}', [\App\Http\Controllers\PageController::class, 'college'])
//    ->name('{slug}');
//about
Route::get('/about', [\App\Http\Controllers\PageController::class, 'about'])
    ->name('about');
//
Route::get('/colleges', [\App\Http\Controllers\PageController::class, 'college'])
    ->name('colleges');

Route::get('/court', [\App\Http\Controllers\PageController::class, 'court'])
    ->name('court');

Route::get('/decree', [\App\Http\Controllers\PageController::class, 'decre'])
    ->name('decre');

Route::get('/order', [\App\Http\Controllers\PageController::class, 'order'])
    ->name('order');

Route::get('/reyaset', [\App\Http\Controllers\PageController::class, 'reyaset'])
    ->name('reyaset');


Route::get('/report', [\App\Http\Controllers\PageController::class, 'report'])
    ->name('report');


Route::get('/decision', [\App\Http\Controllers\PageController::class, 'decision'])
    ->name('decision');



Route::get('/gallery', [\App\Http\Controllers\PageController::class, 'gallery'])
    ->name('gallery');

Route::get('/contact', [\App\Http\Controllers\PageController::class, 'contact'])
    ->name('contact');

Route::get('/receptionday', [\App\Http\Controllers\PageController::class, 'receptionday'])
    ->name('receptionday');

Route::get('/cassasion', [\App\Http\Controllers\PageController::class, 'cassasion'])
    ->name('cassasion');

Route::get('/nmrcourt', [\App\Http\Controllers\PageController::class, 'nmrcourt'])
    ->name('nmrcourt');

Route::get('/letter', [\App\Http\Controllers\PageController::class, 'letter'])
    ->name('letter');

Route::get('/mail', [\App\Http\Controllers\PageController::class, 'mail'])
    ->name('mail');


Route::get('/supremedecision', [\App\Http\Controllers\PageController::class, 'supremedecision'])
    ->name('supremedecision');

Route::get('/rhdecision', [\App\Http\Controllers\PageController::class, 'rhdecision'])
    ->name('rhdecision');

Route::get('/judge', [\App\Http\Controllers\PageController::class, 'judge'])
    ->name('judge');

Route::get('/article', [\App\Http\Controllers\PageController::class, 'article'])
    ->name('article');

Route::get('/inarticle', [\App\Http\Controllers\PageController::class, 'inarticle'])
    ->name('inarticle');


Route::get('/onlydecision', [\App\Http\Controllers\PageController::class, 'onlydecision'])
    ->name('onlydecision');

Route::get('/bulletin', [\App\Http\Controllers\PageController::class, 'bulletin'])
    ->name('bulletin');
//
//Route::get('/bulletinpdf', [\App\Http\Controllers\PageController::class, 'bulletinpdf'])
//    ->name('bulletinpdf');

Route::get('/fotoqalereya', [\App\Http\Controllers\PageController::class, 'fotoqalereya'])
    ->name('fotoqalereya');

Route::get('/video', [\App\Http\Controllers\PageController::class, 'video'])
    ->name('video');

Route::get('/appelyasiya', [\App\Http\Controllers\PageController::class, 'appelyasiya'])
    ->name('appelyasiya');

Route::get('/chappelyasiya', [\App\Http\Controllers\PageController::class, 'chappelyasiya'])
    ->name('chappelyasiya');


Route::get('/decresorder', [\App\Http\Controllers\PageController::class, 'decresorder'])
    ->name('decresorder');

Route::get('/decresorderonly', [\App\Http\Controllers\PageController::class, 'decresorderonly'])
    ->name('decresorderonly');


Route::get('/mmdecision', [\App\Http\Controllers\PageController::class, 'mmdecision'])
    ->name('mmdecision');

Route::get('/mmdecisiononly', [\App\Http\Controllers\PageController::class, 'mmdecisiononly'])
    ->name('mmdecisiononly');

Route::get('/kmdecision', [\App\Http\Controllers\PageController::class, 'kmdecision'])
    ->name('kmdecision');

Route::get('/kmdecisiononly', [\App\Http\Controllers\PageController::class, 'kmdecisiononly'])
    ->name('kmdecisiononly');

Route::get('/ampdecision', [\App\Http\Controllers\PageController::class, 'ampdecision'])
    ->name('ampdecision');

Route::get('/ampmdecisiononly', [\App\Http\Controllers\PageController::class, 'ampdecisiononly'])
    ->name('ampdecisiononly');


Route::get('/nmrlegalact', [\App\Http\Controllers\PageController::class, 'nmrlegalact'])
    ->name('nmrlegalact');

Route::get('/nmrlegalactonly', [\App\Http\Controllers\PageController::class, 'nmrlegalactonly'])
    ->name('nmrlegalactonly');


Route::get('/internationaldocument', [\App\Http\Controllers\PageController::class, 'internationaldocument'])
    ->name('internationaldocument');

Route::get('/constitution', [\App\Http\Controllers\PageController::class, 'constitution'])
    ->name('constitution');

Route::get('/constitutiononly', [\App\Http\Controllers\PageController::class, 'constitutiononly'])
    ->name('constitutiononly');


Route::get('/mehkemeaparati', [\App\Http\Controllers\PageController::class, 'mehkemeaparati'])
    ->name('mehkemeaparati');

//Route::get('/internationalpdf', [\App\Http\Controllers\PageController::class, 'internationalpdf'])
//    ->name('internationalpdf');


//Route::prefix('court')->group(function () {
//    Route::get('/', [\App\Http\Controllers\PageController::class, 'court'])
//        ->name('court');
//
//    Route::get('/decree', [\App\Http\Controllers\PageController::class, 'decre'])
//        ->name('decre');
//
//});













//kohne

Route::get('/category', [\App\Http\Controllers\CategoryController::class, 'category'])
    ->name('category');

Route::get('/post', [\App\Http\Controllers\PostController::class, 'post'])
    ->name('post');



Route::get('/appeal', [\App\Http\Controllers\AppealController::class, 'AppealView'])
    ->name('appeal');

Route::get('/nmrferman', [\App\Http\Controllers\NmrfermanController::class, 'NmrfermanView'])
    ->name('nmrferman');


Route::get('/nmrserencam', [\App\Http\Controllers\NmrserencamController::class, 'NmrserencamView'])
    ->name('nmrserencam');

Route::get('/nmrcourt90', [\App\Http\Controllers\Nmrcourt90Controller::class, 'Nmrcourt90View'])
    ->name('nmrcourt90');

Route::get('/chapellyasiya', [\App\Http\Controllers\ChapellyasiyaController::class, 'ChapellyasiyaView'])
    ->name('chapellyasiya');

Route::get('/miapellyasiya', [\App\Http\Controllers\MiapellyasiyaController::class, 'MiapellyasiyaView'])
    ->name('miapellyasiya');


Route::get('/singlenews', [\App\Http\Controllers\PageController::class, 'singlenews'])
    ->name('singlenews');

Route::get('/news', [\App\Http\Controllers\PageController::class, 'news'])
    ->name('news');



////POST
//Route::get('post/{slug}', function($slug){
//    $post = App\Post::where('slug', '=', $slug)->firstOrFail();
//    return view('post', compact('post'));
//});






//Route::get('news/{id}')