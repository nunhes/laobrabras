<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use DB;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'codpostal',
        'databaja',
        'dataprimeirocontacto',
        'email',
        'enderezo',
        'fax',
        'localidade',
        'nome',
        'notabaja',
        'numtrabajadores',
        'observacions',
        'outrarelacionconcelleria',
        'tfnofijo',
        'tfnomovil',
        'web',
        'actividade_id',
        'centro_id',
        'orientador_id',
        'provincia_id'
    ];
}


// codpostal,databaja,dataprimeirocontacto,email,enderezo,fax,localidade,nome,notabaja,numtrabajadores,observacions,outrarelacionconcelleria,tfnofijo,tfnomovil,web,actividade_id,centro_id,orientador_id,provincia_id