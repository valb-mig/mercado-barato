@extends('layout')
@section('title', 'Mercado Barato - Register')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endsection

@section('content')

    <x-alert class="bg-green-700 text-green-100 p-4"/>

    <section class="d-flex gap-3 flex-column w-100">

        <div class="container form-register">

            <form action="/user/register" method="POST" class="d-flex flex-column gap-2">
                @csrf

                <x-form-input 
                    id="username" 
                    label="Usuário" 
                    type="text" 
                    icon="fa fa-user" 
                    placeholder="ex: jhon.doe"
                />

                @error('username')
                    <span class="text-danger small">
                        {{ $message }}
                    </span>
                @enderror
                
                <x-form-input 
                    id="email" 
                    label="Email" 
                    type="email" 
                    icon="fa fa-at" 
                    placeholder="ex: jhon.doe@example.com"
                />

                @error('email')
                    <span class="text-danger small">
                        {{ $message }}
                    </span>
                @enderror

                <x-form-input 
                    label="Senha" 
                    type="password" 
                    icon="fa fa-lock" 
                    id="password" 
                    placeholder="ex: Abc_123"
                />

                @error('password')
                    <span class="text-danger small">
                        {{ $message }}
                    </span>
                @enderror

                <x-form-input 
                    label="Confirmar senha" 
                    type="password" 
                    icon="fa fa-lock" 
                    id="password_conf" 
                    placeholder="ex: Abc_123"
                />

                @error('password_conf')
                    <span class="text-danger small">
                        {{ $message }}
                    </span>
                @enderror

                <div class="d-flex w-100 gap-2 text-center justify-content-end">
                    <a href="/user/login" class="btn btn-default">Login</a>
                    <button type="submit" class="btn btn-success">Registrar</button>
                </div>

            </form>
        </div>
    </section>

@endsection

@section('footer')
@endsection