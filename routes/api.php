<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController\SongController;
use App\Http\Controllers\ApiController\ArtistController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// song controller
Route::get('/songs', [SongController::class, 'index'])->name('index.song');
Route::get('/songs/{slug}', [SongController::class, 'show']);

// artist Controller
Route::get('/artists', [ArtistController::class, 'index']);
Route::get('/artists/{slug}', [ArtistController::class, 'showArtistSongs']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
