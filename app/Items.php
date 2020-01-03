<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $table = 'pss_items';

    protected $fillable = [
        'pss_id_quest', 'pss_id_pergunta', 'pss_id_resposta'
    ];
}
