<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//CHAMANDO A MODEL PRODUTO
use App\Models\Produto;


class ProdutoController extends Controller
{
    public function index(){

        //COLETANDO TODOS AS FUNCIONALIDADES DA MODEL
        $all_produtos = Produto::All();

        return view('welcome', ['all_prod' => $all_produtos]);

    }

    public function cadastrar(){

        return view('produtos.cadastrar');
    }

    public function fncCadastrarProduto(Request $request){

        $produto = new Produto;

        $produto->nome = $request->frm_nome;
        $produto->descricao = $request->frm_descricao;
        $produto->qtd = $request->frm_quantidade;
        $produto->observacao = $request->frm_observacao;

        //Carregando a imagem
        if($request->hasFile('frm_imagem') && $request->file('frm_imagem')->isValid()){

            $requestImage = $request->frm_imagem;

            $extension = $requestImage->extension();

            $nomeArquivo = md5($requestImage->getClientOriginalName() . strtotime("now"));
            
            //Salvando arquivo no servidor

            $requestImage->move(public_path('img/produtos'),$nomeArquivo);

            $produto->anexo_foto = $nomeArquivo;
        }

        $produto->save();

        return redirect('/')->with('msg','Produto cadastrado com sucesso!');

    }

    public function exibir($id){

        $produto = Produto::findOrFail($id);

        return view('produtos.exibir', ['produto' => $produto]);
    }



    
}
