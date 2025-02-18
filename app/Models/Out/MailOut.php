<?php

namespace App\Models\Out;

use Illuminate\Database\Eloquent\Model;

class MailOut extends Model
{
    protected $table = '_mail_db_nuevos_alumnos_2019';
    protected $fillable = ['email', 'send1'];

}
