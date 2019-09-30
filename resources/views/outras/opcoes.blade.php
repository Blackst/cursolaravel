@extends('layouts.principal')

@section('titulo', 'Opcoes')

@section('conteudo')

    <div class="options">
        <ul>
            <li><a class="warning @if($opcao == 1) selected @endif" href="{{ route('opcoes', 1)}}">warning</a></li>
            <li><a class="info @if($opcao == 2) selected @endif" href="{{ route('opcoes', 2)}}">info</a></li>
            <li><a class="success @if($opcao == 3) selected @endif" href="{{ route('opcoes', 3)}}">success</a></li>
            <li><a class="error @if($opcao == 4) selected @endif" href="{{ route('opcoes', 4)}}">error</a></li>
        </ul>
    </div>

    @if (isset($opcao))
        
        @switch($opcao)
            @case(1)
                @component('components.alerta',['titulo'=>'Erro Fatal', 'tipo'=>'warning'])
                <p><strong>Warning</strong></p>
                <p>Ocorreu um erro Inesperado</p>
                @endcomponent
                @break
            @case(2)
                @component('components.alerta',['titulo'=>'Erro Fatal', 'tipo'=>'info'])
                <p><strong>Erro Inesperado</strong></p>
                <p>Ocorreu um erro Inesperado</p>
                @endcomponent
                @break
            @case(3)
                @component('components.alerta',['titulo'=>'Erro Fatal', 'tipo'=>'success'])
                <p><strong>Erro Inesperado</strong></p>
                <p>Ocorreu um erro Inesperado</p>
                @endcomponent
                @break
            @case(4)
                @component('components.alerta',['titulo'=>'Erro Fatal', 'tipo'=>'error'])
                <p><strong>Erro Inesperado</strong></p>
                <p>Ocorreu um erro Inesperado</p>
                @endcomponent
                @break
            @default
                
        @endswitch
    @endif

@endsection