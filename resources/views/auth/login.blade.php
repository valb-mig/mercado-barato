@extends('layout')
@section('title', 'Mercado Barato - Login')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endpush

@section('content')
    <section class="d-flex gap-3 flex-column w-100">
        <div class="container form-login">
            
            <form action="/user/login" method="POST" class="d-flex flex-column gap-2">
                @csrf

                <x-form-input 
                    id="username" 
                    label="Usuário" 
                    type="text" 
                    icon="fa fa-user" 
                    placeholder="Nome do usuário"
                />

                <x-form-input 
                    id="password" 
                    label="Senha" 
                    type="password" 
                    icon="fa fa-lock" 
                    placeholder="Senha"
                />

                <div class="d-flex w-100 gap-2 text-center justify-content-end">
                    <a href="/user/register" class="btn btn-default">Registre-se</a>
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </form>
        </div>
    </section>
@endsection