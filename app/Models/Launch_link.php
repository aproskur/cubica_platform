<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Launch_link extends Model
{
    use HasFactory;


      //Это надо для того чтобы laravel понял, что id это string(varchar).
      //ID для ссылки генерируется приложением, а не БД
    public $incrementing = false;
    protected $casts = ['id' => 'string'];
    protected $keyType = 'string';
    protected $primaryKey  = 'id';

}
