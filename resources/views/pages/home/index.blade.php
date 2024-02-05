@extends('layout')
@section('title', 'Mercado Barato - Login')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
@endsection

@section('header')
    @include('components.layout.header',[
        'items' => [
            'Home' => '/home'
        ]
    ])

    @include('components.layout.breadcrumbs',[
        'paths' => [
            'Home' => '/home'
        ]
    ])
@endsection

@section('content')

    <h1>Bem vindo!, {{$user->username}}</h1>

    <section>
        <h2>Setor A</h2>
        <div>
            
        </div>
    </section>
@endsection