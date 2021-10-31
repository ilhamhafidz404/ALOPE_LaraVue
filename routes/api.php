<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\TagController;
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
Route::get('/article/{article:slug}', [ArticleController::class, 'read'])->name('article.read');

Route::get('/serie', [SerieController::class, 'index'])->name('serie.index');
Route::get('/serie/{serie:slug}', [SerieController::class, 'filterContent'])->name('serie.filterContent');

Route::get('/tag', TagController::class)->name('tag');

Route::get('/video', [VideoController::class, 'index'])->name('video.index');
Route::get('/video/{video:slug}', [VideoController::class, 'stream'])->name('video.stream');
