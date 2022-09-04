<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asunto extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',                // title
        'description',         // body
        'datainicio',          // due_at
        'codigo',
        'coste',
        'costeasoc',
        'datafin',
        'nummatriculadostotal',
        'nummatriculadosweb',
        'needssanitario',
        'programa_id',
        'user_id'
    ];
}
