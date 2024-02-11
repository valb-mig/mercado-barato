<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setores extends Model
{
    use HasFactory;

    protected $table      = 'mb_setores';
    protected $primaryKey = 'id';
    public    $timestamps = true;

    protected $fillable = [
        'setor_nome', 
        'setor_gestor'
    ];
}