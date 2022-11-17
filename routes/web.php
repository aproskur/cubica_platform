<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CatalogueCardController;
use App\Models\Game;
use App\Models\Launch_link;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\LinksController;
use Illuminate\Support\Str;

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

@include_once('admin_web.php');

Route::get('/', [GamesController::class, 'index']);
Route::get('games/{game}', [GamesController::class, 'show']);
Route::get('/cart', [PagesController::class, 'getCartPage'])->name('cart');
Route::get('/about', [PagesController::class, 'getAboutPage'])->name('about');
Route::get('/support', [PagesController::class, 'getSupportPage'])->name('support');
Route::get('/gamesupport', [PagesController::class, 'getGameSupportPage'])->name('gamesupport');
Route::get('/subscriptions', [PagesController::class, 'getSubscrPage'])->name('subscriptions');


//url launch/{gameId}/fetch-link используется в ajax в launch.js
Route::get('launch/{gameId}/fetch-link', [LinksController::class, 'fetchLink']);
Route::put('launch/{id}/update-alias', [LinksController::class, 'updateAlias']);
Route::post('launch/{id}/create-link', [LinksController::class, 'createLink']);
Route::get('launch/{game_id}', [PagesController::class, 'renderLaunchGamePage'])->name('launch-game');
//Route::post('launch/game/{id}/create-link', [LinksController::class, 'create'])->name('create-link');
Route::put('launch/{id}/update-link', [LinksController::class, 'update']);
Route::delete('launch/{game_id}/delete/{link_id}', [LinksController::class, 'destroy']);
Route::put('/launch/{game_id}/archive/{link_id}', [LinksController::class, 'archive']);
Route::post('launch/store', [LinksController::class, 'store'])->name('store');

Route::get('/signup', function() {
  return view('user_access.signup');
});


//Route::prefix('starter-kit')->group(function () {
//    Route::view('index', 'admin.color-version.index')->name('index');
//});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
