<?php

namespace App\Http\Controllers\Pages\Produto;

use App\Http\Controllers\Config\Controller;
use Illuminate\Http\Request;
use App\Models\Produtos;
use App\Helpers\Pages\Produto\ProdutoHelper;

class ProdutoController extends Controller
{
    private $medidas = ['u', 'k', 'g'];

    public function index($id = null)
    {
        if(!isset($id) || empty($id))
        {
            session()->flash('danger', 'Produto não informado!');
            return back();
        }

        $produto = Produtos::where('id', $id)->first();

        if(!$produto)
        {
            session()->flash('danger', 'Produto não encontrado!');
            return back();
        }

        return view('pages.produto.index',[
            'produto' => $produto,
        ]);
    }

    public function add(Request $req, $id)
    {
        $req->validate([
            'foto'       => 'required|file|max:10240|mimes:jpeg,png,jpg',
            'nome'       => 'required',
            'quantidade' => 'required',
            'validade'   => 'required',
            'lote'       => 'required',
            'preco'      => 'required',
            'medida'     => 'required'
        ],[
            'foto.required'       => 'O campo de foto é obrigatório',
            'foto.max'            => 'Arquivo com tamanho alem do limite (10mb)',
            'foto.file'           => 'Tipo do arquivo não permitido (jpeg,png,jpg)',
            'nome.required'       => 'O campo de nome é obrigatório',
            'quantidade.required' => 'O campo de quantidade é obrigatório',
            'validade.required'   => 'O campo de validade é obrigatório',
            'preco.required'      => 'O campo de preço é obrigatório',
            'lote.required'       => 'O campo de lote é obrigatório',
            'medida.required'     => 'O campo de medida é obrigatório'
        ]);

        if(!in_array($req->input('medida'), $this->medidas))
        {
            session()->flash('danger', 'Medida inválida!');
            return redirect()->route('setor', ['id' => $id]);
        }

        ProdutoHelper::createProduto($id, $req);

        return redirect()->route('setor', ['id' => $id]);
    }

    public function edit(Request $req, $id)
    {
        if(!in_array($req->input('medida'), $this->medidas))
        {
            session()->flash('danger', 'Medida inválida!');
            return redirect()->route('produto', ['id' => $id]);
        }

        ProdutoHelper::editProduto($id, $req);

        return redirect()->route('produto', ['id' => $id]);
    }

    public function remove(Request $req) 
    {
        $req->validate([ 
            'id_produto' => 'required',
            'id_setor'   => 'required',
        ]);

        ProdutoHelper::removeProduto($req->input('id_produto'));

        return redirect()->route('setor', [
            'id' =>  $req->input('id_setor')
        ]);
    }
}
