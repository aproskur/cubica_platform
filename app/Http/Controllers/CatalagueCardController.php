<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalagueCardController extends Controller
{


  @return void

  public $gameName = "Игра 3";
  public $gameDescription = "Описание третьей игры";
  public $gamePrice = "650 RUB";



  public function render()
{
    return view('components.catalogue-card');
}

}
