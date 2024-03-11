@extends('layout')
@section('title', 'Mercado Barato - Administração')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
@endpush

@section('header')
    @include('layouts.header')
@endsection

@section('content')

    <x-title.page-title icon="home" title="Home" desc="{{\App\Helpers\GlobalHelper::getTimeGreetings()}}!, {{$user->username}}"/>

    <div class="flex flex-col gap-2">

        <div class="flex flex-col md:flex-row gap-2">
            <x-section.box title="Mais vendidos" id="mais-vendidos" class="w-full md:w-1/2">
            </x-section.box>

            <x-section.box title="Inventário total" id="inventario-total" class="w-full md:w-1/2">
            </x-section.box>
        </div>

        <div class="row flex flex-col gap-2">
            <x-section.box title="Setores" id="capacidade-estoque" class="w-full">
                @foreach ($setores as $setor)
                    <a class="flex flex-col w-full m-2 relative" href="/setor/{{$setor->id}}">

                        <div class="flex flex-col w-full bg-light-1 hover:bg-light-0 hover:border-light-1 border-[1px] rounded text-decoration-none justify-center items-center">
                            <div class="relative text-dark-0">
                                <x-bladewind::progress-circle
                                    color="blue"
                                    percentage="{{$setor->porcentagem}}"
                                    size="200"
                                    circle_width="10"
                                />
                            </div>

                            <span class="flex flex-col text-light-3 absolute">
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
    </div>
@endsection
