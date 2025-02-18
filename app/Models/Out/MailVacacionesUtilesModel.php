<?php

namespace App\Models\Out;

use Illuminate\Database\Eloquent\Model;

class MailVacacionesUtilesModel extends Model
{
    protected $table = '_mail_db_maranga';
    protected $fillable = ['email', 'send1'];
}
