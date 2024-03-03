<?php

namespace App\Http\Controllers\Pages\Setor;

use App\Http\Controllers\Config\Controller;
use App\Models\{Setores, Produtos};
use App\Helpers\Pages\Setor\SetorHelper;

class SetorController extends Controller
{
    public function index($id = null)
    {
        if(!isset($id) || empty($id))
        {
            session()->flash('danger', 'Setor não informado!');
            return redirect()->route('home');
        }

        $setor = Setores::where('id', $id)->first();

        if(!$setor)
        {
            session()->flash('danger', 'Setor não encontrado!');
            return redirect()->route('home');
        }

        $produtos = Produtos::where('id_setor', $id)->paginate(10);

        return view('pages.setor.index',[
            'setor'    => $setor,
            'produtos' => $produtos
        ]);
    }
}
