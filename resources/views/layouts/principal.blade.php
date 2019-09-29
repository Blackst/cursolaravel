<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template</title>
<link rel="stylesheet" href="{{asset('css/principal.css')}}">
</head>
<body>
    <div class="row">
        <div class="col1">
            <div class="menu">
                <ul>
                  <!--O * no clientes.* é para tudo que for relacionado a clientes marque como ativo e o link fique marcado.-->
                <li><a class="{{request()->routeIS('clientes.*') ? 'active' : ''}}" href="{{route('clientes.index')}}">Clientes</a></li>
                <li><a class="{{request()->routeIS('produtos') ? 'active' : ''}}" href="{{route('produtos')}}">Produtos</a></li>
                <li><a class="{{request()->routeIS('departamentos') ? 'active' : ''}}" href="{{route('departamentos')}}">Departamentos</a></li>
                </ul>
            </div>
        </div>
        <div class="col2">
            @yield('conteudo')  
        </div>
    </div>
</body>
</html>