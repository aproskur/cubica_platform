<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Game::create([
          'name' => 'Приключения тома Сойера и его закадычного друга',
          'price' => 650,
          'excerpt' => 'Увлекательная и очень интересная игра',
          'subscr_price' => 1650
        ]);

        Game::create([
          'name' => 'Короткое название',
          'price' => 750,
          'excerpt' => 'Полезная игра',
          'subscr_price' => 1750
        ]);

        Game::create([
          'name' => 'Игра',
          'price' => 650,
          'excerpt' => 'Игра, в которой сложные задания',
          'subscr_price' => 1850
        ]);

        Game::create([
          'name' => 'Загадочная история Бенджамина Баттона',
          'price' => 750,
          'excerpt' => 'Загадочная игра с загадочным сюжетом',
          'subscr_price' => 1650
        ]);

        Game::create([
          'name' => 'Арктика',
          'price' => 750,
          'excerpt' => 'Игра про пингвинов',
          'subscr_price' => 1650
        ]);



    }
}
