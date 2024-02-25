<?php

namespace App\Http\Controllers\Pages\Auth\Login;

use App\Http\Controllers\Config\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() 
    {
        return view('pages.auth.login.index');
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
            session()->flash('success', 'Usuário logado!');
            return redirect()->route('home');
        }
        else
        {
            session()->flash('danger', 'Usuário inváldo!');
            return redirect()->route('login');
        }
    }
}