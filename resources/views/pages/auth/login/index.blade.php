@extends('layout')
@section('title', 'Mercado Barato - Login')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endpush

@section('content')
    <section class="flex gap-3 flex-col w-full">
        <h1 class="flex justify-center text-[2rem]">
            Login
        </h1>
        <x-form.body action="/user/login">
            <x-input.text 
                id="username" 
                label="Usuário" 
                type="text" 
                icon="user" 
                placeholder="Nome do usuário"
            />

            <x-input.text
                id="password" 
                name="password"
                label="Senha" 
                type="password" 
                icon="lock-closed" 
                placeholder="Senha"
            />
            <hr>

            <div class="flex w-full justify-between">

                <div class="flex items-center gap-2">
                    <x-input.checkbox 
                        id="remember_me" 
                        name="remember_me"
                        label="Lembre-se de mim" 
                        type="checkbox" 
                        placeholder="Senha"
                    />
                </div>

                <div class="flex gap-2 items-center">
                    <a href="/user/register">Registre-se</a>
                    <x-button.text type="submit" style="success">Login</x-button.text>
                </div>
            </div>
        </x-form.body>
        <div class="flex w-full justify-end text-[.8rem]">
            <a href="/user/password">
                Esqueci minha senha
            </a>
        </div>
    </section>
@endsection