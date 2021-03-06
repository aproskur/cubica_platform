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

Route::get('/', [PagesController::class, 'index'])->name('main');
Route::get('games', [PagesController::class, 'getGamePage'])->name('game-page');

Route::get('/signup', function() {
  return view('user_access.signup');
});

Route::get('games/{game}', function($game) {
  return view('game', [
    'game' => Game::findOrFail($game)
  ]);
});

//Route::get('game/{game}', function($game) {
//  return view('game');
//})->name('test-view');

//Route::get('test/{test}', function($test) {
//  return view('game');
//})->name('test-view');

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
