<?php

namespace RiaChatBots\Models;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $fillable = [
        'contribuir', 'especialistas', 'date-time', 'formaatendimento', 'nome', 'urgencia'
    ];
}
