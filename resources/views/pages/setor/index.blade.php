@extends('layout')
@section('title', 'Mercado Barato - Setor - '.$setor->setor_nome)

@section('header')
    @include('components.config.layout.header')
@endsection

@section('content')

    <div class="d-flex justify-content-between align-items-center">
        <h1 class="d-flex align-items-center">
            <div class="d-flex align-items-center gap-1">
                @include('components.config.icon', [
                    'icon'  => $setor->setor_icone,
                    'width' => '80px'
                ])
                {{$setor->setor_nome}}
            </div>
        </h1>

        <span class="bg-light-1 border-1 border-light-2 p-1 rounded">
            <small>
                <b>{{$produtos->count()}}/{{$setor->setor_capacidade}}</b>
            </small>
        </span>
    </div>

    <div class="d-flex w-100 gap-2 m-2 text-center justify-content-start">
        <x-button.rounded id="add" onclick="$('#modal_add').fadeToggle()" class="w-[40px] h-[40px]">
            @include('components.config.icon', [ 'icon'  => 'plus' ])
        </x-button.rounded>
    </div>

    <x-list.page-list
        :items="$produtos"
        :header="$lista['header']"
        :body="$lista['body']"
    />

    <x-modal.form id="add" action="/setor/{{$setor->id}}/add" title="Adicionar produtos">
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