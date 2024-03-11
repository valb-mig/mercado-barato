@extends('layout')
@section('title', 'Mercado Barato - Produto')

@section('header')
    @include('layouts.header')
    @include('layouts.breadcrumbs', [
        'paths' => [
            ['label' => 'Home', 'url' => '/home'],
            ['label' => 'Setor', 'url' => '/setor/' . $produto->id_setor],
            ['label' => 'Produto', 'url' => '/produto/' . $produto->id]
        ]
    ])
@endsection

@section('content')
    <x-title.page-title icon="fruit" title="{{ucfirst($produto->produto_nome)}}" desc="Tela de informações sobre o produto ({{$produto->produto_nome}})"/>

    <div class="flex w-full justify-center">
        <section class="flex flex-col gap-2 border border-light-1 p-2 rounded w-[80vw]">
            <header class="flex w-full justify-end gap-2">

                <x-button.action style="info" onclick="$('#modal_edit').fadeToggle()">
                    @include('components.config.icon', [
                        'icon'  => 'pencil',
                    ])
                </x-button.action>

                <form method="post" action="/produto/remove/">
                    @csrf
                    <input class="hidden" name="id_produto" value="{{$produto->id}}"/>
                    <input class="hidden" name="id_setor"   value="{{$produto->id_setor}}"/>
                    <x-button.action style="danger" type="submit">
                        @include('components.config.icon', [
                            'icon'  => 'trash',
                        ])
                    </x-button.action>
                </form>

            </header>
            <main class="flex flex-col md:gap-10 w-full justify-center px-2 md:flex-row">
                <div class="flex w-full md:w-1/2 relative">
                    <img src="{{$produto->produto_base64}}" width="70%" class="flex w-full md:max-w-[25rem] justify-center border border-light-1 p-2 rounded"/>
                    <span class="absolute flex items-center justify-center top-0 bg-light-1 w-[2rem] h-[2rem] rounded-full">{{$produto->produto_qtd}}x</span>
                </div>
                <div class="flex w-full md:w-1/2">
                    <div class="flex flex-col w-full">
                        <span class="flex w-full text-[3rem] justify-center">{{ucfirst($produto->produto_nome)}}</span>
                        <table class="flex justify-between w-full rounded bg-light-1">
                            <tr>
                                <td><strong>Lote:</strong></td>
                                <td><small>{{$produto->id_lote}}</small></td>
                            </tr>
                            <tr>
                                <td><strong>Setor:</strong></td>
                                <td><small>{{$produto->id_setor}}</small></td>
                            </tr>
                            <tr>
                                <td><strong>Preço:</strong></td>
                                <td><small>R$ {{number_format($produto->produto_preco / 100, 2, ',', '.')}}
                                    @if ($produto->produto_medida == "k")
                                        /kg
                                    @elseif ($produto->produto_medida == "g")
                                        /g
                                    @endif
                                </small></td>
                            </tr>
                            <tr>
                                <td><strong>Val:</strong></td>
                                <td><small>{{date('d/m/Y', strtotime($produto->produto_validade))}}</small></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </main>
        </section>
    </div>

    <x-modal.form id="edit" action="/produto/{{$produto->id}}/edit" title="Editar produto">

        <x-input.text 
            id="nome" 
            label="Produto" 
            icon="cart" 
            placeholder="Nome do produto"
            value="{{$produto->produto_nome}}"
        />

        <x-input.text 
            id="quantidade" 
            label="Quantidade" 
            type="number" 
            icon="calc" 
            placeholder="Quantidade do produto"
            class="number"
            value="{{$produto->produto_qtd}}"
        />

        <div class="flex gap-2">
            <x-input.text 
                id="preco" 
                label="Preço" 
                type="text" 
                icon="money" 
                placeholder="Preço do produto"
                class="money"
                value="R$ {{number_format($produto->produto_preco / 100, 2, ',', '.')}}"
            />

            <x-input.select 
                id="medida" 
                type="select" 
                icon="info" 
                placeholder="Medida"
                selected="{{$produto->produto_medida}}"
                :options="[
                    'u' => 'Unidade',
                    'k' => 'Kilo',
                    'g' => 'Grama'
                ]"
            />
        </div>

        <x-input.text 
            id="validade" 
            label="Validade" 
            type="text" 
            icon="calendar" 
            placeholder="Validade"
            class="date"
            value="{{date('d/m/Y', strtotime($produto->produto_validade))}}"
        />

        <x-input.text 
            id="lote" 
            label="Lote" 
            type="number" 
            icon="qr-code" 
            placeholder="Lote"
            class="number"
            value="{{$produto->id_lote}}"
        />
        
    </x-modal.form>
@endsection
