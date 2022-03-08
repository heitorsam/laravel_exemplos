<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $nome = "Heitor";
    $idade = 28;
    $array_num = [10,20,30,40,50];
    $array_nomes = ["Heitor", "Bruna", "Xena", "Hercules"];

    return view('welcome', [
                            'nome' => $nome, 
                            'idade' => $idade, 
                            'profissao' => "Médico",
                            'lista_num' => $array_num,
                            'lista_nomes' => $array_nomes

                           ]);
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/produtos/{id?}', function ($id = null) {

    $var_busca = request('busca');

    return view('produtos', ['id' => $id, 'res_busca' => $var_busca]);
});