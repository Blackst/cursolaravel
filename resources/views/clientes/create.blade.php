@extends('layouts.principal')

@section('titulo', 'Novo clientes')

@section('conteudo')

    <h3>Criar novo Cliente</h3>

    <form action="{{ route('clientes.store')}}" method="POST">
        @csrf
        <input type="text" name="nome">
        <input type="submit" value="Salvar">
    </form>

@endsection