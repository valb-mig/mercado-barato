<?php

namespace App\Http\Controllers\Pages\User;

use App\Http\Controllers\Config\Controller;
use App\Models\{User, UserArquivos};

class UsuarioController extends Controller
{
    public function index($id = null)
    {
        if(!isset($id) || empty($id))
        {
            session()->flash('danger', 'Usuário não informado!');
            return redirect()->route('home');
        }

        $usuario = User::where('id', $id)->first();
        $image   = UserArquivos::where('id_sys_user', $id)->first();

        if(!$usuario)
        {
            session()->flash('danger', 'Usuário não encontrado!');
            return redirect()->route('home');
        }

        return view('pages.user.index',[
            'user' => $usuario,
            'image' => $image->arquivo_base64
        ]);
    }
}
