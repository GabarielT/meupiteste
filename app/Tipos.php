<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Tipos extends Model
{
    use Notifiable;

    protected $table = "pss_tipos";


    protected $fillable = ['pss_tipo'];
}
