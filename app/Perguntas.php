<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perguntas extends Model
{
   	protected $table='pss_perguntas';
    protected $fillable = [
        'pss_id_categoria', 'pss_pergunta', 'pss_habilitado'
    ];

	public function categoria(){

		return $this->belongsTo(Categoria::class);
	}
}
