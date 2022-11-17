<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Game;
use App\Models\Launch_link;

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
         //$this->call('GameTableSeeder');
         //$this->call('LaunchLinksTableSeeder');

         Game::truncate();
         Launch_link::truncate();
         Launch_link::create([
           'id' => uniqid(),
           'link' => 'https://cubica.ru/play='.Str::random(12),
           'link_alias' => 'Ссылка для рассылки',
           'launch_quantity' => 6,
           'expiry' => '2022-09-22'
         ]);

         Launch_link::create([
           'id' => uniqid(),
           'link' => 'https://cubica.ru/play='.Str::random(12),
           'launch_quantity' => 10,
           'expiry' => '2022-10-15',
           'active' => 1
         ]);

         Launch_link::create([
           'id' => uniqid(),
           'link' => 'https://cubica.ru/play='.Str::random(12),
           'launch_quantity' => 100,
           'expiry' => '2022-09-22'
         ]);

         Launch_link::create([
           'id' => uniqid(),
           'link' => 'https://cubica.ru/play='.Str::random(12),
           'launch_quantity' => 5,
           'expiry' => '2022-09-10',
           'active' => 1
         ]);


         Game::create([
           'name' => 'Арктика',
           'price' => 750,
           'excerpt' => 'Игра про пингвинов',
           'subscr_price' => 1650,
           'cover_photo_path' => 'antarctica.png'
         ]);


         Game::create([
           'name' => 'Приключения Тома Сойера и его закадычного друга',
           'price' => 650,
           'excerpt' => 'Увлекательная и очень интересная игра',
           'subscr_price' => 1650,
           'cover_photo_path' => 'tomsoyer.webp'
         ]);

         Game::create([
           'name' => 'Пингвины',
           'price' => 750,
           'excerpt' => 'Полезная игра',
           'subscr_price' => 1750,
           'cover_photo_path' => 'pinguin_portrait.png'
         ]);

         Game::create([
           'name' => 'Игра',
           'price' => 650,
           'excerpt' => 'Игра, в которой сложные задания',
           'subscr_price' => 1850,
           'cover_photo_path' => 'mikhail-vasilyev-Qmox1MkYDnY-unsplash.jpg'
         ]);

         Game::create([
           'name' => 'Загадочная история Бенджамина Баттона',
           'price' => 750,
           'excerpt' => 'Загадочная игра с загадочным сюжетом',
           'subscr_price' => 1650,
           'cover_photo_path' => 'fatty-corgi-wHgkrmuMFOY-unsplash.jpg'
         ]);





    }
}
