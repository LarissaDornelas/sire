<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regra extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quantidade_horarios_matutino', 'quantidade_horarios_vespertino', 'quantidade_horarios_noturno', 'quantidade_dias_reservaveis',
        'horario_inicio_matutino', 'horario_inicio_vespertino', 'horario_inicio_noturno',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];

}