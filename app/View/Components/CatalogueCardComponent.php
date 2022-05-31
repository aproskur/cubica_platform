<?php

namespace App\View\Components;


use Illuminate\View\Component;
use App\Classes\Game;
use App\Classes\GameDB;




class CatalogueCardComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
     public $game;

     public $gameName;
     public $gameDescription;
     public $gamePrice;


    public function __construct($game)
    {
        $this->game = $game;
        $this->gameName = $this->game->getName();
        $this->gameDescription = $this->game->getDescription();
        $this->gamePrice = $this->game->getPrice();
    }




/*
public function __construct($game)
{
    $this->game = new Game();
    $this->gameName = $this->game->getName();
    $this->gameDescription = $this->game->getDescription();
    $this->gamePrice = $this->game->getPrice();
}
*/

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        return view('components.catalogue-card-component');
    }
}
