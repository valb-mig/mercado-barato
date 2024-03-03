<?php

namespace App\Http\Controllers\Pages\Produto;

use App\Http\Controllers\Config\Controller;
use App\Models\{Setores, Produtos};
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProdutoController extends Controller
{
    public function index($id = null)
    {
    }

    public function add(Request $req, $id)
    {
        $req->validate([
            'foto'       => 'required|file|max:10240|mimes:jpeg,png,jpg',
            'nome'       => 'required',
            'quantidade' => 'required',
            'validade'   => 'required',
            'lote'       => 'required',
            'preco'      => 'required'
        ],[
            'foto.required'          => 'O campo de foto é obrigatório',
            'foto.max'               => 'Arquivo com tamanho alem do limite (10mb)',
            'foto.file'              => 'Tipo do arquivo não permitido (jpeg,png,jpg)',
            'nome.required'       => 'O campo de nome é obrigatório',
            'quantidade.required' => 'O campo de quantidade é obrigatório',
            'validade.required'   => 'O campo de validade é obrigatório',
            'preco.required'      => 'O campo de preço é obrigatório',
            'lote.required'       => 'O campo de lote é obrigatório'
        ]);

        $produto = $this->createProduto($id, $req);

        return redirect()->route('setor', ['id' => $id]);
    }

    private function createProduto(int $id, object $req):object
    {
        $produto = new Produtos;

        $produto->id_setor         = $id;
        $produto->id_lote          = $req->input('lote');
        $produto->produto_nome     = $req->input('nome');
        $produto->produto_preco    = floatval(str_replace('R$','', str_replace('.','', str_replace(',','.', $req->input('preco')))));
        $produto->produto_base64   = 'data:image/png;base64,'.base64_encode(file_get_contents($req->file('foto')->getPathname()));
        $produto->produto_desconto = 0;
        $produto->produto_qtd      = $req->input('quantidade');
        $produto->produto_validade = Carbon::createFromFormat('d/m/Y', $req->input('validade'))->format('Y-m-d');

        $produto->updated_at = now();
        $produto->created_at = now();

        $produto->save();

        return $produto;
    }
}
