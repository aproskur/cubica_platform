<?php
namespace app\Classes;
use App\Classes\Game;
use App\View\Components\CatalogueCardComponent;


$game1 = new Game("Игра", "Описание игры", "500 RUB");
$game2 = new Game("Ещё игра", "Описание новой игры", "450RUB");
$game3 = new Game("Игра 3", "Описание игры 3", "550RUB");
$game4 = new Game("Игра 4", "Описание игры 4", "650RUB");

$gamesArray = array($game1, $game2, $game3, $game4);

public function getAllGames() {
  return $gamesArray;
}
