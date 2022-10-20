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

Route::get('/', [PagesController::class, 'index'])->name('main');
//Route::get('games', [PagesController::class, 'getGamePage'])->name('game-page');
Route::get('/cart', [PagesController::class, 'getCartPage'])->name('cart');
Route::get('/about', [PagesController::class, 'getAboutPage'])->name('about');
Route::get('/support', [PagesController::class, 'getSupportPage'])->name('support');
Route::get('/gamesupport', [PagesController::class, 'getGameSupportPage'])->name('gamesupport');
//Route::get('/launch', [PagesController::class, 'getGameLaunchPage'])->name('launch');
Route::get('/subscriptions', [PagesController::class, 'getSubscrPage'])->name('subscriptions');
Route::get('launch/{game_id}', [GamesController::class, 'renderLaunchGamePage'])->name('launch-game');
Route::post('launch', [GamesController::class, 'editAlias'])->name('alias');

//Route::get('/launch', [PagesController::class, 'getGameLaunchPage'])->name('launch'); //tmp method for test!!!


Route::get('/signup', function() {
  return view('user_access.signup');
});

Route::get('games/{game}', function($game) {
  return view('game', [
    'game' => Game::findOrFail($game)
  ]);
});

Route::get('launch/edit/{id}', [GamesController::class, 'editLinkAlias']);
Route::post('launch/edit/', [GamesController::class, 'createAlias']);
Route::post('launch/generate-link/{id}', [GamesController::class, 'generateLink'])->name('generate-link');
Route::put('launch/update-link/{id}/{link_id}', [GamesController::class, 'updateLink'])->name('update-link');
Route::post('launch/create-link/{id}', [GamesController::class, 'createLink'])->name('create-link');
Route::delete('launch/delete/{id}', [GamesController::class, 'deleteLink'])->name('delete');
Route::put('launch/edit-alias', [GamesController::class, 'editAlias'])->name('edit-alias');
Route::put('launch/archive/{id}', [GamesController::class, 'archiveLink'])->name('archive');
/*
Route::get('launch/{game_id}', function($game_id) {
  $games_table = Game::all();
  $game = Game::findOrFail($game_id);
  $game_excerpt = Str::limit($game->name, $limit=25, $end='...');
  return view('launch', ['all_games' => $games_table, 'game' => $game, 'excerpt' => $game_excerpt ]);
})->name('launch-game');
*/


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
