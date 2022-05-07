<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LyricSubmitController;
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

//Route::get('/', function () {
//    return view('components.');
//});

Route::get('/',[PostController::class,'index'])->name('home');
Route::get('/myanmar-songs',[PostController::class,'show_all_lyrics'])->name('lyrics');

Route::get('/{slug}/myanmar-song',[PostController::class,'show'])->name('lyric.show');

/* Artist Route*/
Route::get('/artists',[ArtistController::class,'index'])->name('index.artist');
Route::get('/{slug}/artists',[ArtistController::class,'show'])->name('show.song');

//Search route

Route::get('/autocomplete-search',[SearchController::class,'autocompleteSearch']);
Route::get('/search',[SearchController::class,'search'])->name('search');

// submit song lyric
Route::get('/submit-song-lyric',[LyricSubmitController::class,'index'])->name('lyric.submit');
Route::post('/submit-song-lyrics',[LyricSubmitController::class,'storeFormSubmit'])->name('form.store');
Route::get('/thankyou',[LyricSubmitController::class,'thankyou'])->name('show.thank');

// sitemap
Route::get('/sitemap.xml',[SitemapXmlController::class,'index']);
