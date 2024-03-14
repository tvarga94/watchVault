<?php

use App\Http\Controllers\CanvasUiController;
use App\Http\Controllers\CustomLoginController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OptionsController;
use App\Http\Controllers\WatchController;
use Canvas\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [FrontendController::class, 'showMainPage']);
Route::get('/contact', [FrontendController::class, 'showMainPage'])->name('contact');
Route::get('/about', [FrontendController::class, 'showAboutPage'])->name('about');
Route::get('/advertising', [FrontendController::class, 'showAdvertisingPage'])->name('advertising');

Route::post('/canvas/login', [CustomLoginController::class, 'store']);
Route::post('/newsletter/store', [NewsletterController::class, 'store']);

Route::prefix('canvas-ui')->group(function () {
    Route::prefix('api')->group(function () {
        Route::get('posts', [CanvasUiController::class, 'getPosts']);
        Route::get('posts/{slug}', [CanvasUiController::class, 'showPost'])
             ->middleware('Canvas\Http\Middleware\Session');

        Route::get('tags', [CanvasUiController::class, 'getTags']);
        Route::get('tags/{slug}', [CanvasUiController::class, 'showTag']);
        Route::get('tags/{slug}/posts', [CanvasUiController::class, 'getPostsForTag']);

        Route::get('topics', [CanvasUiController::class, 'getTopics']);
        Route::get('topics/{slug}', [CanvasUiController::class, 'showTopic']);
        Route::get('topics/{slug}/posts', [CanvasUiController::class, 'getPostsForTopic']);

        Route::get('users/{id}', [CanvasUiController::class, 'showUser']);
        Route::get('users/{id}/posts', [CanvasUiController::class, 'getPostsForUser']);
    });

    Route::get('/{view?}', [CanvasUiController::class, 'index'])
         ->where('view', '(.*)')
         ->name('canvas-ui');
});

Route::middleware([Authenticate::class])->group(function () {
    Route::get('/start', [FrontendController::class, 'showStartPage'])->name('start');

    Route::get('/options', [OptionsController::class, 'index']);
    Route::post('/options/store', [OptionsController::class, 'store']);

    Route::get('/watch', [WatchController::class, 'index'])->name('watch');
    Route::post('/watch/addWatch', [WatchController::class, 'add']);
    Route::get('/watch/delete/{id}', [WatchController::class, 'delete']);
    Route::get('/watch/edit/{id}', [WatchController::class, 'edit']);
    Route::post('/watch/edit/{id}', [WatchController::class, 'update']);

    Route::get('watch/import', [ExcelController::class, 'import']);
    Route::get('watch/export', [ExcelController::class, 'export']);
});
