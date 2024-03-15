@extends('layout')
@section('title', 'Mercado Barato - Administração')

@section('header')
    @include('layouts.header')
@endsection

@section('content')

    <x-title.page-title icon="home" title="Home" desc="{{\App\Helpers\GlobalHelper::getTimeGreetings()}}!, {{$user->username}}"/>

    <div class="flex flex-col gap-2">

        <div class="row flex flex-col gap-2">
            <x-section.box title="Setores" id="capacidade-estoque" class="w-full">
                @foreach ($setores as $setor)
                    <a class="flex flex-col w-full m-2 relative" href="/setor/{{$setor->id}}">

                        <div class="flex flex-col w-full transition-all bg-light-0 hover:bg-light-1 border-[1px] rounded text-decoration-none justify-center items-center">
                            <div class="relative text-dark-0">
                                <x-bladewind::progress-circle
                                    color="blue"
                                    percentage="{{$setor->porcentagem}}"
                                    size="200"
                                    circle_width="10"
                                />
                            </div>

                            <span class="flex flex-col text-light-2 absolute">
                                @include('components.config.icon', [
                                    'icon'  => $setor->setor_icone,
                                    'width' => '80px'
                                ])
                                <p class="flex justify-center w-full mb-2 text-light-0 bg-light-2 rounded">{{$setor->setor_nome}}</p>
                            </span>  
                        </div>

                        <span class="text-light-3 absolute right-0 p-1">
                            <p class="flex justify-center w-full text-light-0 bg-light-2 mr-3 rounded">
                                {{$setor->porcentagem}}% / 100%
                            </p>
                        </span> 
                                        
                    </a>
                @endforeach
            </x-section.box>
        </div>

        <x-section.box title="Produtos cadastrados" id="produtos-cadastrados" class="w-full">
            <table class="w-full text-sm text-left">
                <thead class="text-xs uppercase text-dark-0 bg-light-2">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Código
                        </th>
                        <th scope="col" class="px-6 py-3">
                            # Lote
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Produto
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Quantidade
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Valor
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Medida
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Validade
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $produto)
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-dark-0 whitespace-nowrap">
                                {{$produto->id}}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-dark-0 whitespace-nowrap">
                                #{{$produto->id_lote}}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-dark-0 whitespace-nowrap">
                                {{$produto->produto_nome}}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-dark-0 whitespace-nowrap">
                                {{$produto->produto_qtd}}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-dark-0 whitespace-nowrap">
                                R$ {{number_format($produto->produto_preco / 100, 2, ',', '.')}}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-dark-0 whitespace-nowrap">
                                @if ($produto->produto_medida == "k")
                                    kg
                                @elseif ($produto->produto_medida == "g")
                                    g
                                @else
                                    Unidade
                                @endif
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-dark-0 whitespace-nowrap">
                                {{date('d/m/Y H:i:s', strtotime($produto->produto_validade))}}
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </x-section.box>
    </div>
@endsection
