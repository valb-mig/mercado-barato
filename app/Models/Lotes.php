<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lotes extends Model
{
    use HasFactory;

    protected $table      = 'mb_lotes';
    protected $primaryKey = 'id';
    public    $timestamps = true;

    protected $fillable = [
        'lote_nome'
    ];
}