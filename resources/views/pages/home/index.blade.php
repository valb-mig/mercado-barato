@extends('layout')
@section('title', 'Mercado Barato - Homepage')

@section('styles')
      <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
@endsection

@section('header')

@endsection

@error('error')
    <span class="text-danger small">
        {{ $message }}
    </span>
@enderror

@section('content')

    <section class="d-flex gap-3 flex-column w-100">

        <div class="d-flex justify-content-center w-100">
            <img src="{{ asset('img/icon-d.png') }}" width="100px"/>
        </div>

        <div class="container form-login">

            <form action="/login" method="POST" class="d-flex flex-column gap-2">
                @csrf

                <x-input 
                    label="Usuário" 
                    type="text" 
                    icon="fa fa-user" 
                    id="user" 
                    placeholder="ex: jhon.doe"
                />

                @error('user')
                    <span class="text-danger small">
                        {{ $message }}
                    </span>
                @enderror
                
                <x-input 
                    label="Senha" 
                    type="password" 
                    icon="fa fa-lock" 
                    id="senha" 
                    placeholder="ex: Abc_123"
                />

                @error('password')
                    <span class="text-danger small">
                        {{ $message }}
                    </span>
                @enderror

                <div class="d-flex w-100 gap-2 text-center justify-content-end">
                    <a href="/user/register">Registre-se</a>
                    <button type="submit" class="btn btn-success">Login</button>
                </div>

            </form>
        </div>
    </section>

@endsection

@section('footer')
@endsection