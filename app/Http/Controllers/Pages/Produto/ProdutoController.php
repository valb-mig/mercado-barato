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
        $credenciais = $req->validate([
            'nome'       => 'required',
            'quantidade' => 'required',
            'validade'   => 'required',
            'lote'       => 'required',
            'preco'      => 'required'
        ],[
            'nome.required'       => 'O campo de nome é obrigatório',
            'quantidade.required' => 'O campo de quantidade é obrigatório',
            'validade.required'   => 'O campo de validade é obrigatório',
            'preco.required'      => 'O campo de preço é obrigatório',
            'lote.required'       => 'O campo de lote é obrigatório'
        ]);

        $produto = new Produtos;

        $produto->id_setor         = $id;
        $produto->id_lote          = $credenciais['lote'];
        $produto->produto_nome     = $credenciais['nome'];
        $produto->produto_preco    = floatval(str_replace('R$','', str_replace('.','', str_replace(',','.', $credenciais['preco']))));
        $produto->produto_desconto = 0;
        $produto->produto_qtd      = $credenciais['quantidade'];
        $produto->produto_validade = Carbon::createFromFormat('d/m/Y', $credenciais['validade'])->format('Y-m-d');

        $produto->updated_at = now();
        $produto->created_at = now();

        $produto->save();

        return redirect()->route('setor', ['id' => $id]);
    }
}
