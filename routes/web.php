<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CatalogueCardController;
use App\Models\Game;
use App\Http\Controllers\GamesController;

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

//Route::get('/', function() {
//  return view('welcome');
//});

Route::get('/', [PagesController::class, 'mainPage']);

Route::get('/signup', function() {
  return view('user_access.signup');
});

Route::get('/shop', function() {
  return view('shop');
});

Route::get('/game-page', [PagesController::class, 'gamePage'])->name('game-page');

Route::get('/test', function() {
  return view('test');
});

Route::get('/games_test', function() {
  return view('games_test', [
    'games' => Game::all()
  ]);
});

Route::resource('/games', GamesController::class);
//Route::get('/{game}', function(Game $game){
//  return view('game', [
//    'game'=>$game;
//  ]);
//}

//Route::get('/', function () {
//    return redirect()->route('index');
//})->name('/');

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
