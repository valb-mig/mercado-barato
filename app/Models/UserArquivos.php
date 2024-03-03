<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserArquivos extends Model
{
    use HasFactory;

    protected $table      = 'mb_sys_users_arquivos';
    protected $primaryKey = 'id';
    public    $timestamps = true;

    protected $fillable = [
        'arquivo_nome', 
        'arquivo_tipo', 
        'arquivo_base64',
        'id_sys_user'
    ];
}