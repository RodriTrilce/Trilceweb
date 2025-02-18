<?php

namespace App\Models\Out;

use Illuminate\Database\Eloquent\Model;

class Testmail extends Model
{
    protected $table = 'lista_prueba';

    protected $fillable = ['name', 'email', 'send1', 'send2'];

}
