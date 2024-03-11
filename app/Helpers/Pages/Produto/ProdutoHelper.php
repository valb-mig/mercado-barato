<?php

namespace App\Helpers\Pages\Produto;
use App\Models\Produtos;
use Carbon\Carbon;

class ProdutoHelper
{
    public static function createProduto(int $id, object $req):void
    {
        $produto = new Produtos;

        $produto->id_setor         = $id;
        $produto->id_lote          = $req->input('lote');
        $produto->produto_nome     = $req->input('nome');
        $produto->produto_preco    = floatval(str_replace('R$','', str_replace('.','', str_replace(',','.', $req->input('preco')))));
        $produto->produto_base64   = 'data:image/png;base64,'.base64_encode(file_get_contents($req->file('foto')->getPathname()));
        $produto->produto_desconto = 0;
        $produto->produto_medida   = $req->input('medida');
        $produto->produto_qtd      = $req->input('quantidade');
        $produto->produto_validade = Carbon::createFromFormat('d/m/Y', $req->input('validade'))->format('Y-m-d');

        $produto->updated_at = now();
        $produto->created_at = now();

        $produto->save();
    }

    public static function editProduto(int $id, object $req):void
    {
        $produto = Produtos::find($id);

        // $produto->id_setor         = $id;
        $produto->id_lote          = $req->input('lote');
        $produto->produto_nome     = $req->input('nome');
        $produto->produto_preco    = floatval(str_replace('R$','', str_replace('.','', str_replace(',','.', $req->input('preco')))));
        // $produto->produto_base64   = 'data:image/png;base64,'.base64_encode(file_get_contents($req->file('foto')->getPathname()));
        $produto->produto_desconto = 0;
        $produto->produto_medida   = $req->input('medida');
        $produto->produto_qtd      = $req->input('quantidade');
        $produto->produto_validade = Carbon::createFromFormat('d/m/Y', $req->input('validade'))->format('Y-m-d');

        $produto->updated_at = now();
        // $produto->created_at = now();

        $produto->save();
    }

    public static function removeProduto(int $id):void
    {
        $produto = Produtos::find($id);
        $produto->delete();
    }
}