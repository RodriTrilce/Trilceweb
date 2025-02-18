<?php

namespace App\Models\Out;

use Illuminate\Database\Eloquent\Model;

class MailInicialModel extends Model
{
    protected $table = '_mail_db_los_olivos_inicial';
    protected $fillable = ['email', 'send1'];
}
