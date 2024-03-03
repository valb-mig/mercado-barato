@extends('layout')
@section('title', 'Mercado Barato - Login')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endpush

@section('content')
    <section class="d-flex gap-3 flex-column w-100">
        <h1 class="d-flex justify-content-center">Login</h1>
        <x-form.body action="/user/login">
            <x-form.input 
                id="username" 
                label="Usuário" 
                type="text" 
                icon="user" 
                placeholder="Nome do usuário"
            />

            <x-form.input 
                id="password" 
                name="password"
                label="Senha" 
                type="password" 
                icon="lock-closed" 
                placeholder="Senha"
            />
            <hr>

            <div class="d-flex w-100 justify-content-between">

                <div class="d-flex align-items-center gap-2">
                    <x-checkbox name="remember_me"/>Lembre-se de mim
                </div>

                <div>
                    <a href="/user/register" class="btn btn-default">Registre-se</a>
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </div>
        </x-form.body>
        <div class="container d-flex w-100 justify-end">
            <a href="/user/password">
                Esqueci minha senha
            </a>
        </div>
    </section>
@endsection

@section('footer')
    <x-config.layout.footer/>
@endsection