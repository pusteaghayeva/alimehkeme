<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
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
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//page

//Route::get('/{slug}', [\App\Http\Controllers\PageController::class, 'about'])
//->name('{slug}');
//Route::get('/{slug}', [\App\Http\Controllers\PageController::class, 'college'])
//    ->name('{slug}');
//about
Route::get('/about', [\App\Http\Controllers\PageController::class, 'aboutView'])
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


////POST
//Route::get('post/{slug}', function($slug){
//    $post = App\Post::where('slug', '=', $slug)->firstOrFail();
//    return view('post', compact('post'));
//});


//Route::get('news/{id}')