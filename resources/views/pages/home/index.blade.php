@extends('layout')
@section('title', 'Mercado Barato - Login')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
@endpush

@section('header')
    @include('components.layout.header')
@endsection

@section('content')

    <h1>{{$timeGreetings}}!, {{$user->username}}</h1>

    <div class="container">
        <section id="capacidade-estoque">
            <span class="label d-flex">
                <p class="m-0 p-2 bg-light-1 rounded-top">Capacidade do estoque</p>
            </span>

            <div class="d-flex justify-content-center rounded-bottom border-2 border-light-1">

                @foreach ($setores as $setor)
                <a class="btn bt-default">
                    <span>
                        <x-carbon-fruit-bowl />
                        {{$setor->setor_nome}}
                    </span>
                </a>
                @endforeach

            </div>
        </section>
    </div>
    
@endsection