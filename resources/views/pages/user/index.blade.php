@extends('layout')
@section('title', 'Mercado Barato - User')

@section('header')
    @include('components.config.layout.header')
@endsection

@section('content')
    <div class="flex w-full justify-center">
        <section class="flex felx-col border-1 border-light-1 p-2 rounded">
            <header>
            </header>
            <main>
                <div class="flex gap-2 justify-start items-center">
                    <img src="{{$image}}" width="100px" class="bg-light-1 p-2 rounded"/>
                    {{$user->username}}
                </div>
                <table class="flex justify-between">
                    <tr>
                        <td><strong>E-mail</strong></td>
                        <td><small>{{$user->email}}</small></td>
                    </tr>
                    {{-- <tr>
                        <td></td>
                        <td>{{$user->data_nascto}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>{{$user->telefone}}</td>
                    </tr> --}}
                    <tr>
                        <td><strong>Cadastro</strong></td>
                        <td><small>{{\Carbon\Carbon::parse($user->created_at)->format('d/m/Y')}}</small></td>
                    </tr>
                </table>
            </main>
        </section>
    </div>
@endsection
