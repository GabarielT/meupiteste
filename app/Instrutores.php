<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Instrutores extends Model
{
    use Notifiable;
    protected $table = 'pss_instrutores';

    protected $fillable = ['pss_instrutor', 'pss_habilitado',];


}
