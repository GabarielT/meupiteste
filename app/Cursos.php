<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Cursos extends Model
{
    use Notifiable;

    protected $table = "pss_cursos";
    protected $fillable = [
        'pss_cursos', 'pss_codigo', 'pss_nome', 'pss_id_tipos', 'pss_id_segmentos', 'pss_id_municipios', 'habilitado'
    ];
}
