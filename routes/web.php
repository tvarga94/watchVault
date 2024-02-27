<?php

use App\Http\Controllers\CanvasUiController;
use App\Http\Controllers\WatchController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', function () {
    return view('contact/contact');
});

Route::get('about', function () {
    return view('contact/about');
});

Route::get('proba/{slug}', [CanvasUiController::class, 'getAllPostsWithSpecificTopic']);

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


Route::get('/watch', [WatchController::class, 'index'])->name('watch');
Route::post('/watch/addWatch', [WatchController::class, 'add']);
Route::get('/watch/delete/{id}', [WatchController::class, 'delete']);
Route::get('/watch/edit/{id}', [WatchController::class, 'edit']);
Route::post('/watch/edit/{id}', [WatchController::class, 'update']);
