<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respostas extends Model
{
    protected $table='pss_respostas';
    protected $fillable = [
        'pss_nivel_satisfacao','pss_satisfacao',
    ];

	/*public function create($dados){
		$resposta=new Respostas();
		$resposta->pss_nivel_satisfacao=$dados['nivel'];
		$resposta->pss_satisfacao=$dados['satisfacao'];
		$resposta->save();
	}*/
}
