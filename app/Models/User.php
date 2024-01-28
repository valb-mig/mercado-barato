<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table      = 'mb_sys_users';
    protected $primaryKey = 'user_id';
    public    $timestamps = true;

    protected $fillable = [
        'user_name', 
        'user_email', 
        'user_image', 
        'user_password'
    ];
}