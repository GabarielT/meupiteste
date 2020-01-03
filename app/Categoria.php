<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	protected $table='pss_categorias';
    protected $fillable = [
        'pss_categoria',
    ];

	public function perguntas()
    {
        return $this->hasMany(Perguntas::class);
    }
}
