<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Turmas extends Model
{
    use Notifiable;

    protected $table = "pss_turmas";
    protected $fillable = [ 'pss_id_turma', 'pss_codigo_turma', 'pss_id_instrutor', 'pss_id_curso', 'pss_data_inicio', 'pss_data_final', 'pss_horario', 'pss_qnt_alunos', 'pss_situacao', ];
}
