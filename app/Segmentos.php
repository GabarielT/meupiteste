<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Segmentos extends Model
{
    use Notifiable;

    protected $table = "pss_segmentos";
    protected $fillable = [
        'pss_segmento'
    ];
}
