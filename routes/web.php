<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SitemapXmlController;


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


Route::get('/', [PostController::class, 'index'])->name('home');


Route::get('/myanmar-songs', [PostController::class, 'show_all_lyrics'])->name('lyrics');

Route::get('/{slug}/myanmar-song', [PostController::class, 'show'])->name('lyric.show');

/* Artist Route*/
Route::get('/artists', [ArtistController::class, 'index'])->name('index.artist');
Route::get('/{slug}/artists', [ArtistController::class, 'show'])->name('show.song');

//Search route

Route::get('/autocomplete-search', [SearchController::class, 'autocompleteSearch']);
Route::get('/search', [SearchController::class, 'search'])->name('search');

// Contact Form
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.submit');
Route::post('/contact-us', [ContactController::class, 'storeFormSubmit'])->name('form.store');
Route::get('/thankyou', [ContactController::class, 'thankyou'])->name('show.thank');

// sitemap
Route::get('/sitemap.xml', [SitemapXmlController::class, 'index']);

Route::get('/about-us',[AboutController::class,'index'])->name('about');


Route::get('/privacy',function(){
    return view('components.privacy-policy');
})->name('privacy');

Route::get('/disclaminer',function(){
    return view('components.disclaimer');
})->name('disclaminer');



