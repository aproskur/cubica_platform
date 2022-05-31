<?php

namespace App\Classes;
use App\Classes\Game;


class Game {


  public $gameName;
  public $gameDescription;
  public $gamePrice;


public function __construct($name, $desc, $price) {
  $this->gameName = $name;
  $this->gameDescription = $desc;
  $this->gamePrice = $price;
}

  public function getName() {
    return $this->gameName;
  }

  public function getPrice() {
    return $this->gamePrice;
  }

  public function getDescription() {
    return $this->gameDescription;
  }
}
