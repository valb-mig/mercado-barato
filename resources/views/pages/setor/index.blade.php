@extends('layout')
@section('title', 'Mercado Barato - Setor - '.$setor->setor_nome)

@section('header')
    @include('layouts.header')
    @include('layouts.breadcrumbs', [
        'paths' => [
            ['label' => 'Home', 'url' => '/home'],
            ['label' => 'Setor', 'url' => '/setor/' . $setor->id]
        ]
    ])
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

        <x-input.file 
            id="foto" 
            label="Foto" 
            type="file" 
            icon="camera" 
            placeholder="Foto do produto (jpeg,png,jpg)"
        />

        <x-input.text 
            id="nome" 
            label="Produto" 
            icon="cart" 
            placeholder="Nome do produto"
        />

        <x-input.text 
            id="quantidade" 
            label="Quantidade" 
            type="number" 
            icon="calc" 
            placeholder="Quantidade do produto"
            class="number"
        />

        <div class="flex gap-2">
            <x-input.text 
                id="preco" 
                label="Preço" 
                type="text" 
                icon="money" 
                placeholder="Preço do produto"
                class="money"
            />

            <x-input.select 
                id="medida" 
                type="select" 
                icon="info" 
                placeholder="Medida"
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
        />

        <x-input.text 
            id="lote" 
            label="Lote" 
            type="number" 
            icon="qr-code" 
            placeholder="Lote"
            class="number"
        />
        
    </x-modal.form>

@endsection