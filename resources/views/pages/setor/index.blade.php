@extends('layout')
@section('title', 'Mercado Barato - Setor - '.$setor->setor_nome)

@section('header')
    @include('components.config.layout.header')
@endsection

@section('content')

    <div class="d-flex justify-content-between align-items-center">

        <x-title.page-title icon="{{$setor->setor_icone}}" title="{{$setor->setor_nome}}" desc="Produtos inseridos no setor de {{$setor->setor_nome}}"/>

        <span class="bg-light-1 border-1 border-light-2 p-1 rounded">
            <small>
                <b>{{$produtos->count()}}/{{$setor->setor_capacidade}}</b>
            </small>
        </span>
    </div>

    <div class="flex w-100 gap-2 my-2 text-center justify-content-start">
        <x-button.action id="add" type="success" onclick="$('#modal_add').fadeToggle()">
            @include('components.config.icon', [ 'icon'  => 'plus' ])
        </x-button.action>  
        <x-form.input 
            id="search" 
            type="text" 
            icon="magnify" 
            placeholder="Pesquisa"
        />
    </div>

    <section>
        <div class="flex w-full h-full gap-2 p-2 border-1 border-light-1 rounded">
            @foreach ($produtos as $produto)
                <a href="/produto/{{$produto->id}}" class="no-underline text-dark-0 relative bg-light-1 p-2 rounded border-1 border-light-2">
                    <div class="absolute top-0 right-0">
                        <span class="flex items-center justify-center p-2 rounded-circle bg-light-0 border-1 border-light-2 w-[40px] h-[40px]">
                            {{$produto->produto_qtd}}x
                        </span>
                    </div>
                    <div>
                        <img width="250px" class="rounded" src="{{$produto->produto_base64}}"/>
                    </div>
                    <div class="flex flex-col w-full gap-2">
                        <div class="text-[2em]">
                            {{$produto->produto_nome}}
                        </div>
                        <table class="flex border-collapse bg-light-0 p-2 rounded">
                            <tr class="mb-4">
                                <td class="text-center text-[0.9em] bg-light-1 p-1 rounded">
                                    <span class="text-[1.2em]">
                                        <b>Preço</b>
                                    </span> 
                                </td>
                                <td>
                                    <small>R$ {{number_format($produto->produto_preco / 100, 2, ',', '.')}}</small>
                                </td>
                            </tr>
                            <tr class="mb-4">
                                <td class="text-center text-[0.9em] bg-light-1 p-1 rounded">
                                    <span class="text-[1.2em]">
                                        <b>Lote</b>
                                    </span> 
                                </td>
                                <td>
                                    <small>#{{$produto->id_lote}}</small>
                                </td>
                            </tr>
                            <tr class="mb-4">
                                <td class="text-center text-[0.9em] bg-light-1 p-1 rounded">
                                    <span class="text-[1.2em]">
                                        <b>Val</b>
                                    </span>
                                </td>
                                <td>
                                    <small>{{\Carbon\Carbon::parse($produto->produto_validade)->format('d/m/Y')}}</small>
                                </td>
                            </tr>
                        </table>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="container mt-4">
            {{ $produtos->links('components.config.layout.paginator') }}
        </div>
    </section>
    
    <x-modal.form id="add" action="/setor/{{$setor->id}}/add" title="Adicionar produtos">

        <x-form.input 
            id="foto" 
            label="Foto" 
            type="file" 
            icon="camera" 
            placeholder="Foto do usuário (jpeg,png,jpg)"
        />

        <x-form.input 
            id="nome" 
            label="Produto" 
            type="text" 
            icon="cart" 
            placeholder="Nome do produto"
        />

        <x-form.input 
            id="quantidade" 
            label="Quantidade" 
            type="number" 
            icon="calc" 
            placeholder="Quantidade do produto"
            class="number"
        />

        <x-form.input 
            id="preco" 
            label="Preço" 
            type="text" 
            icon="money" 
            placeholder="Preço do produto"
            class="money"
        />

        <x-form.input 
            id="validade" 
            label="Validade" 
            type="text" 
            icon="calendar" 
            placeholder="Validade"
            class="date"
        />

        <x-form.input 
            id="lote" 
            label="Lote" 
            type="number" 
            icon="qr-code" 
            placeholder="Lote"
            class="number"
        />
        
    </x-modal.form>

@endsection