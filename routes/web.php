<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get("/articles/{id}", [ArticleController::class, 'show']);

// Routes for praktikum 3
Route::get('/home', [PageController::class, 'index']);

Route::prefix('product')->group(function () {
    Route::get('/list', [PageController::class, 'product']);
});

Route::get('/news/{page}', [PageController::class, 'news']);

Route::prefix('program')->group(function () {
    Route::get('/list', [PageController::class, 'program']);
});

Route::resource('contact', PageController::class);
// End of routes for praktikum 3