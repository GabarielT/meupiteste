<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Usuarios;

class Cargos extends Model
{

    use Notifiable;
    protected $table = "pss_cargos";


    protected $fillable = [
        'pss_cargo' , 'pss_id_permissao' , 'pss_permissao_nivel' , 'pss_habilitado' ,
    ];


    protected $hidden = [
    ];


    protected $casts = [
    ];

    public static function usuarios(){
        return BelongsToMany(Usuarios::class);
    }
}
