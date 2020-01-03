<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Codigos extends Model
{


    use Notifiable;
    protected $table = "pss_codigos";

    protected $fillable = [
        'pss_codigo' , 'pss_id_usuario' , 'pss_id_turma' , 'pss_uso' ,
    ];


     protected $hidden = [

    ];


     protected $casts = [
    ];
}
