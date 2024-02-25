@extends('layout')
@section('title', 'Mercado Barato - Register')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endpush

@section('content')
    <section class="d-flex gap-3 flex-column w-100">
        <h1 class="d-flex justify-content-center">Registre-se</h1>
        <x-form.body action="/user/register">
            <x-form.input 
                id="username" 
                label="Usuário" 
                type="text" 
                icon="user" 
                placeholder="Nome do usuário"
            />

            <x-form.input 
                id="email" 
                label="Email" 
                type="email" 
                icon="at" 
                placeholder="Email"
            />

            <x-form.input 
                label="Senha" 
                name="password"
                type="password" 
                icon="lock-closed" 
                id="password" 
                placeholder="Senha"
            />

            <x-form.input 
                label="Confirmar senha" 
                name="password"
                type="password" 
                icon="lock-closed" 
                id="password_conf" 
                placeholder="Confirme a senha"
            />
            <hr>
            
            <div>
                <div class="d-flex w-100 gap-2 text-center justify-content-end">
                    <a href="/user/login" class="btn btn-default">Já possui uma conta?</a>
                    <button type="submit" class="btn btn-success">Registrar</button>
                </div>
            </div>
        </x-form.body>
    </section>
@endsection

@section('footer')
    <x-config.layout.footer/>
@endsection