@extends('layout')
@section('title', 'Mercado Barato - Login')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('header')
@endsection

@section('content')

    <x-alert class="bg-green-700 text-green-100 p-4"/>

    <section class="d-flex gap-3 flex-column w-100">

        <div class="container form-login">

            <form action="/user/login" method="POST" class="d-flex flex-column gap-2">
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
                    id="password" 
                    label="Senha" 
                    type="password" 
                    icon="fa fa-lock" 
                    placeholder="ex: Abc_123"
                />

                @error('password')
                    <span class="text-danger small">
                        {{ $message }}
                    </span>
                @enderror

                <div class="d-flex w-100 gap-2 text-center justify-content-end">
                    <a href="/user/register" class="btn btn-default">Registre-se</a>
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </form>
        </div>
    </section>

@endsection

@section('footer')
@endsection