<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Content;
use App\Http\Controllers\DashboardController;


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

Route::middleware('auth')->group(function () {
    // いいね機能
    Route::post('content/{content}/favorites', [FavoriteController::class, 'store'])->name('favorites');
    Route::post('content/{content}/unfavorites', [FavoriteController::class, 'destroy'])->name('unfavorites');
    // マイページ機能
    Route::get('/content/mypage', [ContentController::class, 'mydata'])->name('content.mypage');
    // コメント機能
    Route::post('content/{content_id}/comments', [CommentController::class, 'store'])->name('comment.store');
    // ダッシュボードのコンテンツ一覧
    Route::get('dashboard/content', [DashboardController::class, 'index'])->name('dashboard.content');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    


});

Route::resource('tweet', TweetController::class);
Route::resource('partner', PartnerController::class);
Route::resource('content', ContentController::class);
//Route::resource('dashboard/content', DashboardController::class);



Route::get('/', function () {
    return view('welcome');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/contact', function () {
    return view('contact');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
