<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

use Illuminate\Http\Request;

Route::get('/ola', function () {
    echo "Olá";
});

Route::get('/ola/{nome}/{sobrenome}', function ($nome, $sobrenome) {
    echo "Olá! Seja Bem vindo, $nome $sobrenome !";
});

Route::get('/seunome/{nome?}', function ($nome=null) { //O ? significa que o parametro virou opcional
    if (isset($nome)) {
        return "Ola! Seja Bem vindo, $nome!";
        return "Você não digitou nehum nome.";
    }
});

Route::get('/rotacomregras/{nome}/{n}', function ($nome, $n) {
    for ($i=0; $i < $n; $i++) { 
        echo "Ola! Seja Bem vindo, $nome! <br>";
    }
})->where('nome', '[A-Za-z]+')->where('n', '[0-9]+');//Com essas expressoes regulares primeiro vai pedir so leras e a segunda so numeros.

Route::prefix('/app')->group(function(){ //Isso serve para colocar rotas agrupadas

    Route::get('/', function () {
        return view('app');
    })->name('app'); //Esse comando se chama helper para ajudar caso o prefixo do grupo mude não quebre o link da rota

    Route::get('/user', function () {
        return view('user');
    })->name('app.user');

    Route::get('/profile', function () {
        return view('profile');
    })->name('app.profile');
});

Route::get('/produtos', function () { //Rota de helper fora de agrupamento
    echo "<h1>Produtos</h1>";
    echo "<ol>";
    echo "<li>Notebook</li>";
    echo "<li>Impressora</li>";
    echo "<li>Mouse</li>";
    echo "<ol>";
})->name('meusprodutos');

Route::redirect('todosprodutos1', 'produtos', 301); //Redireciona uma rota para outra.

Route::get('todosprodutos2', function () {
    return redirect()->route('meusprodutos'); //Redirecionamento como se estivesse vindo do controller.
});

/////////////////////////////////////////////////

Route::post('/requisicoes', function(Request $request){
    return 'Hello POST';
});

Route::delete('/requisicoes', function(Request $request){
    return 'Hello DELETE';
});

Route::put('/requisicoes', function(Request $request){ //o comando put e o patch servem para salvar as coisas e da pra requisitar com ARC.
    return 'Hello PUT';
});

Route::patch('/requisicoes', function(Request $request){ 
    return 'Hello patch';
});

Route::options('/requisicoes', function(Request $request){
    return 'Hello OPTIONS';
});

Route::get('/requisicoes', function(Request $request){
    return 'GET';
});