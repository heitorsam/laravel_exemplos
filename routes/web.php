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

/* Utilizando Controllers */
/* Criando rota via cmd php artisan make:controller ProdutoController */

/* Para criar o banco é necessário configurar o arquivo .env */
/* php artisan migrate */

use App\Http\Controllers\ProdutoController;

Route::get('/', [ProdutoController::class, 'index']);
Route::get('/produtos/cadastrar', [ProdutoController::class, 'cadastrar']);


Route::get('/contato', function () {
    return view('contato');
});

Route::get('/produtos/{id?}', function ($id = null) {

    $var_busca = request('busca');

    return view('produtos', ['id' => $id, 'res_busca' => $var_busca]);
});