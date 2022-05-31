<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function gamePage() {
    $url = route('game-page');
    return view('game-page')->with('game-page', $url);
  }
}
