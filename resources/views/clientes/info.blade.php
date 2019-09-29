@extends('layouts.principal')

@section('titulo', 'Informação do clientes')

@section('conteudo')

    <h3>Informações do clientes</h3>

    <p>ID: {{$cliente['id']}}</p>
    <p>Nome: {{$cliente['nome']}}</p>
    <br>

    <a href="{{route('clientes.index')}}">Voltar</a>

@endsection