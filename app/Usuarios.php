<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Cargos;

class Usuarios extends Authenticatable
{

    use Notifiable;
    protected $table = 'pss_usuarios';

    protected $fillable = [
        'pss_nome', 'pss_matricula' , 'pss_cpf', 'pss_telefone' , 'pss_celular' , 'pss_email' , 'pss_usuario' , 'pss_habilitado' ,
    ];

     protected $hidden = [
        'pss_senha', 'remember_token'
    ];


     protected $casts = [
    ];
}
