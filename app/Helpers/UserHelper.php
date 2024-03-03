<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use App\Models\UserArquivos;

class UserHelper
{
    public static function getUserData():object
    {
        $user = Auth::user();
        return $user;
    }

    public static function getUserImage(int $userId) 
    {
        return UserArquivos::where('id_sys_user', $userId)->first();
    }
}