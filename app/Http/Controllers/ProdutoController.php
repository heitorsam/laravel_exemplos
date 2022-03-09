<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){

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

    }

    public function cadastrar(){

        return view('produtos.cadastrar');
    }
}
