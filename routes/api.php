<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\VideoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/article', [ArticleController::class, 'index'])->name('article.index');
Route::get('/latest-article', [ArticleController::class, 'latest'])->name('article.latest');

Route::get('/serie', [SerieController::class, 'index'])->name('serie.index');

Route::get('/video', [VideoController::class, 'index'])->name('video.index');