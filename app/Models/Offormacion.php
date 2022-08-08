<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offormacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'dataata',
        'datadende',
        'lugar',
        'numhoras',
        'numprazas',
        'tipo',
        'id_empresa',
        'accionsfe_id',
        'updated_at',
        'created_at'
    ];
}

