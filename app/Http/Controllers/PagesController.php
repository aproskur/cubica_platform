<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class PagesController extends Controller
{


  public function index() {
    $games = Game::all();
    return view('index', ['games' => $games]);
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
