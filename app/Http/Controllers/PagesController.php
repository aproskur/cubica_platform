<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Launch_link;
use Illuminate\Support\Str;

class PagesController extends Controller
{

  /* Функция загружает страницу запуска игры */
  public function renderLaunchGamePage($game_id) {
    $games_table = Game::all();
    $game = Game::findOrFail($game_id);
    $game_excerpt = Str::limit($game->name, $limit=25, $end='...');
    $links = Launch_link::query()
      -> select('id', 'link', 'link_alias', 'launch_quantity', 'expiry', 'archived', 'active')
      -> orderBy('created_at', 'desc')
      -> get();
    $links_collection = $links->sortBy('archived');
    return view('launch', ['all_games' => $games_table, 'game' => $game, 'excerpt' => $game_excerpt, 'links' => $links_collection ]);
  }



  public function getCartPage() {
    return view('cart');
  }

  public function getAboutPage() {
    return view('about');
  }

  public function getSupportPage() {
    return view('support');
  }

  public function getGameSupportPage() {
    return view('gamesupport');
  }

  public function getSubscrPage() {
    return view('subscriptions');
  }






}
