@extends('layout')
@section('title', 'Mercado Barato - Administração')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
@endpush

@section('header')
    @include('components.config.layout.header')
@endsection

@section('content')

    <h1>{{\App\Helpers\GlobalHelper::getTimeGreetings()}}!, {{$user->username}}</h1>

    <div class="row d-flex flex-column gap-2">
        <x-section.box title="Setores" id="capacidade-estoque" class="col-sm-12">
            @foreach ($setores as $setor)
                <a class="d-flex flex-column w-100 m-2 position-relative" href="/setor/{{$setor->id}}">

                    <div class="d-flex flex-column w-100 bg-light-1 hover:bg-light-0 hover:border-light-1 border-[1px] rounded text-decoration-none justify-content-center align-items-center">
                        <div class="position-relative text-dark-0">
                            <x-bladewind::progress-circle
                                color="blue"
                                percentage="{{$setor->porcentagem}}"
                                size="200"
                                circle_width="10"
                            />
                        </div>

                        <span class="d-flex flex-column text-light-3 position-absolute">
                            @include('components.config.icon', [
                                'icon'  => $setor->setor_icone,
                                'width' => '80px'
                            ])
                            <p class="d-flex justify-content-center w-100 mb-2 text-light-0 bg-light-2 rounded">{{$setor->setor_nome}}</p>
                        </span>  
                    </div>

                    <span class="text-light-3 position-absolute right-0 p-1">
                        <p class="d-flex justify-content-center w-100 text-light-0 bg-light-2 mr-3 rounded">
                            {{$setor->porcentagem}}%
                        </p>
                    </span> 
                                    
                </a>
            @endforeach
        </x-section.box>
    </div>
@endsection
