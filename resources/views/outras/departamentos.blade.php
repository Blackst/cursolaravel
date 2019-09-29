@extends('layouts.principal')

@section('titulo', 'Departamentos')

@section('conteudo')

    <h3>Departamentos</h3>

    <ul>
        <li>Computadores</li>
        <li>Eletronicos</li>
        <li>Acessórios</li>
        <li>Roupas</li>
    </ul>

@component('components.alerta')//Card do produto
@endcomponent

@endsection