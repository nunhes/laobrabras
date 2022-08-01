<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidadan extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'apelido1',
        'nif',
        'tfnomovil',
        'email',
        'localidade',
        'updated_at',
        'created_at'
    ];
}
