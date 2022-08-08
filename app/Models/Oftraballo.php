<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oftraballo extends Model
{
    use HasFactory;

    protected $fillable = [
        'posto',
        'data',
        'nummeses',
        'numpostosofertados',
        'observacions',
        'accionsfe_id',
        'id_empresa',
        'categoriaprofesional_id',
        'estudiosminimos',
        'updated_at',
        'created_at'
    ];
}


