@extends('layout')
@section('title', 'Mercado Barato - Setor - '.$setor->setor_nome)

@section('header')
    @include('components.config.layout.header')
@endsection

@section('content')

    <div class="flex justify-between items-center">

        <x-title.page-title icon="{{$setor->setor_icone}}" title="{{$setor->setor_nome}}" desc="Produtos inseridos no setor de {{$setor->setor_nome}}"/>

        <span class="bg-light-1 border border-light-2 p-1 rounded">
            <small>
                <b>{{$produtos->count()}}/{{$setor->setor_capacidade}}</b>
            </small>
        </span>
    </div>

    <livewire:pages.setor.search-items :id="$setor->id"/>
    
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