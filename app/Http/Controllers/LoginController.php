<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Config\Controller;
use Illuminate\Support\Facades\{Auth};
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() 
    {
        return view('auth.login');
    }

    public function login(Request $req) 
    {
        $credenciais = $req->validate([
            'username' => 'required',
            'password' => 'required|min:8'
        ],[
            'username.required' => 'O campo de usuário é obrigatório',
            'password.required' => 'O campo de senha é obrigatório'
        ]);

        if(Auth::attempt($credenciais))
        {
            session()->flash('alert', 'Usuário logado!');
            return redirect()->route('home');
        }
        else
        {
            session()->flash('alert', 'Credenciais inválidas.');
            return redirect()->route('login');
        }
}
}