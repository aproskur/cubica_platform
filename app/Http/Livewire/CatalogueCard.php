<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CatalogueCard extends Component
{

    public $gameName = "Игра 1";
    public $gameDescription = "Описание первой игры";
    public $gamePrice = "450 RUB";

/*
    public function mount()
    {
      $this->gameName = "Игра 1";
      $this->gameDescription = "Описание первой игры";
      $this->gamePrice = "450 RUB";
    }
*/
    public function render()
    {
        return view('livewire.catalogue-card');
    }
}
