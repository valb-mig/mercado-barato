@extends('layout')
@section('title', 'Mercado Barato - Register')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endpush

@section('content')
    <section class="flex gap-3 flex-col w-full">
        <h1 class="flex justify-center text-[2rem]">
            Registre-se
        </h1>
        <x-form.body action="/user/register">

            <x-input.file 
                id="foto" 
                label="Foto" 
                type="file" 
                icon="camera" 
                placeholder="Foto do usuário (jpeg,png,jpg)"
            />

            <x-input.text 
                id="username" 
                label="Usuário" 
                type="text" 
                icon="user" 
                placeholder="Nome do usuário"
            />

            <x-input.text 
                id="email" 
                label="Email" 
                type="email" 
                icon="at" 
                placeholder="Email"
            />

            <x-input.text
                label="Senha" 
                name="password"
                type="password" 
                icon="lock-closed" 
                id="password" 
                placeholder="Senha"
            />

            <x-input.text 
                label="Confirmar senha" 
                name="password_conf"
                type="password" 
                icon="lock-closed" 
                id="password_conf" 
                placeholder="Confirme a senha"
            />
            <hr>
            
            <div class="flex w-full gap-2 text-center justify-end items-center">
                <a href="/user/login">Já possui uma conta?</a>
                <x-button.text type="submit" style="success">
                    Registrar
                </x-button.text>
            </div>
        </x-form.body>
    </section>
@endsection