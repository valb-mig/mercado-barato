<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table      = 'mb_sys_users';
    protected $primaryKey = 'id';
    public    $timestamps = true;

    protected $fillable = [
        'username', 
        'password',
        'email', 
        'image'
    ];
}