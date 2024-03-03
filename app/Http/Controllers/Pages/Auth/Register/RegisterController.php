<?php

namespace App\Http\Controllers\Pages\Auth\Register;

use App\Models\{ User, UserArquivos };
use App\Http\Controllers\Config\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.auth.register.index');
    }

    public function register(Request $req)
    {
        $req->validate([
            'foto'          => 'required|file|max:10240|mimes:jpeg,png,jpg',
            'username'      => 'required|max:20',
            'email'         => 'required|email',
            'password'      => 'required|min:8',
            'password_conf' => 'required|min:8'
        ],[
            'foto.required'          => 'O campo de foto é obrigatório',
            'foto.max'               => 'Arquivo com tamanho alem do limite (10mb)',
            'foto.file'              => 'Tipo do arquivo não permitido (jpeg,png,jpg)',
            'username.required'      => 'O campo de usuário é obrigatório',
            'email.required'         => 'O campo de email é obrigatório',
            'email.email'            => 'O email fornecido não é válido',
            'password.required'      => 'O campo de senha é obrigatório',
            'password_conf.required' => 'O campo de senha é obrigatório'
        ]);

        if($req->user_password == $req->user_password_conf)
        {
            $checkUser = User::where('username','=',$req->username)
                               ->orWhere('email',$req->email)
                               ->count() > 0 ? true : false;
            if(!$checkUser)
            {
                $user = $this->createUser($req);

                $this->saveImage($user->id, $req->file('foto'));

                session()->flash('success', "Usuário, $user->username cadastrado!");
                return redirect()->route('login');
            }
            else
            {
                session()->flash('warning', 'Usuário já existe');
                return redirect()->route('register');
            }
        }
        else
        {
            session()->flash('danger', 'As senhas não coicidem');
            return redirect()->route('register');
        }
    }

    private function createUser(object $req):object
    {
        $user = new User();

        $user->username       = $req->username;
        $user->email          = $req->email;
        $user->password       = bcrypt($req->password);
        $user->remember_token = '';
        $user->updated_at     = now();
        $user->created_at     = now();

        $user->save();

        return $user;
    }

    private function saveImage(int $userId, object $foto):void
    {
        $arquivo = new UserArquivos();

        $arquivo->arquivo_nome   = 'foto_usuario';
        $arquivo->arquivo_tipo   = $foto->getClientMimeType();
        $arquivo->arquivo_base64 = 'data:image/png;base64,'.base64_encode(file_get_contents($foto->getPathname()));
        $arquivo->id_sys_user    = $userId;
        $arquivo->updated_at = now();
        $arquivo->created_at = now();

        $arquivo->save();
    }
}
