<?php

namespace App\Http\Controllers\Auth\Register;

use App\Models\User;
use App\Http\Controllers\Config\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('auth.register');
    }

    public function register(Request $req) 
    {
        $req->validate([
            'username'      => 'required|max:20',
            'email'         => 'required|email',
            'password'      => 'required|min:8',
            'password_conf' => 'required|min:8'
        ],[
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
                $user = new User();

                $user->username       = $req->username;
                $user->image          = '';
                $user->email          = $req->email;
                $user->password       = bcrypt($req->password);
                $user->remember_token = '';
                $user->updated_at     = now();
                $user->created_at     = now();
                
                $user->save(); 

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
}