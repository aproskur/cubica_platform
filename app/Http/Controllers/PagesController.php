<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class PagesController extends Controller
{

//  public function gamePage() {
  //  $url = route('game-page');
  //  return view('game-page')->with('game-page', $url);
//  }

  public function index() {
    $games = Game::all();
    return view('index', ['games' => $games]);
  }

  public function getGamePage($game) {
    return view('game', [
      'game' => Game::findOrFail($game)
    ]);
  }


}
