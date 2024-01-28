<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Config\Controller;
use Illuminate\Support\Facades\{Auth, Hash, Validator};
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function store(Request $req) 
    {
        $req->validate([
            'user'  => 'required',
            'senha' => 'required'
        ],[
            'user.required'  => 'O campo de usuário é obrigatório',
            'senha.required' => 'O campo de senha é obrigatório'
        ]);

        $credentials = $req->only('user', 'senha');

        if(!Auth::attempt(['user_name' => $credentials['user'], 'user_password' => $credentials['senha']]))
        {
            return redirect()->route('home')->withErrors([
                'message' => 'invalid'
            ]);
        }
    }
}