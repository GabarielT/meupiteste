<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Questionarios extends Model
{
    use Notifiable;

    protected $table = "pss_questionarios";

    protected $fillable = [
        'pss_id_codigo', 'feedback'
    ];

    protected $hidden = [
    ];

    protected $casts = [
    ];
}
