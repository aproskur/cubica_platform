<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games';

    protected $primaryKey = 'id';


    public function getName() {
      return $this->name;
    }

    public function getPrice() {
      return $this->price;
    }

    public function getDescription() {
      return $this->excerpt;
    }

    public function getId() {
      return $this->id;
    }

}
