<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games';

    protected $primaryKey = 'id';

   // public $name;
   // public $price;
   // public $excerpt;
   // public $id;
   //
   //  public function __construct($name, $price, $excerpt, $id) {
   //     $this->name = $name;
   //     $this->price = $price;
   //     $this->excerpt = $excerpt;
   //     $this->id = $id;
   // }


    public function getName() {
      return $this->name;
    }

    public function getPrice() {
      return $this->price;
    }

    public function getSubscrPrice() {
      return $this->subscr_price;
    }

    public function getDescription() {
      return $this->excerpt;
    }

    public function getId() {
      return $this->id;
    }

}
