<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $table      = 'mb_produtos';
    protected $primaryKey = 'id';
    public    $timestamps = true;

    protected $fillable = [
        'id_lote', 
        'id_setor',
        'produto_nome',
        'produto_preco',
        'produto_desconto',
        'produto_base64',
        'produto_qtd',
        'produto_validade',
        'produto_medida'
    ];
}