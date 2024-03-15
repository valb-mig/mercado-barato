<?php

namespace App\Http\Controllers\Pages\Home;

use App\Http\Controllers\Config\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\{
    Setores, 
    Produtos
};

class HomeController extends Controller
{
    public function index()
    {
        $setores = [];

        foreach(Setores::get() as $setor)
        {
            $setores[$setor->id] = $setor;

            $qtd = Produtos::where('id_setor', $setor->id)
                            ->sum('produto_qtd');

            if($qtd > 0)
            {
                $setores[$setor->id]['porcentagem'] = round(($qtd / $setor->setor_capacidade ) * 100);
            }
            else
            {
                $setores[$setor->id]['porcentagem'] = 0;
            }
        }

        return view('pages.home.index',[
            'user'     => Auth::user(),
            'setores'  => $setores,
            'produtos' => Produtos::all()
        ]);
    }
}