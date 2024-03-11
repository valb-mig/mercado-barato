<?php

namespace App\Helpers\Pages\Setor;

class SetorHelper
{
    public static function getTableListSetor($produtos) 
    {
        $listProdutos = [
            'header' => [
                [
                    'class' => '',
                    'data'  => 'Código'
                ],
                [
                    'class' => '',
                    'data'  => 'Nome'
                ],
                [
                    'class' => 'text-center',
                    'data'  => 'Quantidade'
                ],
                [
                    'class' => '',
                    'data'  => 'Lote'
                ],
                [
                    'class' => 'text-center',
                    'data'  => 'Validade'
                ]
            ]
        ];

        $listProdutos['body'] = [];

        foreach($produtos as $key => $produto)
        {
            $listProdutos['body'][$key]['codigo'] = [
                'class' => '',
                'data'  => '#'.$produto->id
            ];
            $listProdutos['body'][$key]['nome'] = [
                'class' => '',
                'data'  => $produto->produto_nome
            ];
            $listProdutos['body'][$key]['qtd'] = [
                'class' => 'text-center',
                'data'  => $produto->produto_qtd
            ];
            $listProdutos['body'][$key]['lote'] = [
                'class' => '',
                'data'  => '#'.$produto->id_lote
            ];

            $validade = now() > $produto->produto_validade ?  'text-light-0 bg-red-500' : 'bg-light-0';

            $listProdutos['body'][$key]['validade'] = [
                'class' => 'd-flex justify-center',
                'data'  => "<div class='d-flex p-2'><p class='m-0 p-1 $validade rounded'>".date('d/m/Y', strtotime($produto->produto_validade))."</p></div>"
            ];
        }

        return $listProdutos;
    }
}