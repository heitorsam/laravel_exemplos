@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

    <h1>Essa é a página de cadastrar produtos!</h1>
    <br>

    <div id="produtos-create-container" class="col-md-6 offset-md-3">
        <h3>Cadastro de produto</h3>
        <form action="{{asset('cadastrar_produtos')}}" method="POST" enctype="multipart/form-data">
            <!-- Necessário @csrf para habilitar o POST -->
            @csrf
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" class="form-control" name="frm_nome" placeholder="Nome">
                <label>Descrição:</label>
                <input type="text" class="form-control" name="frm_descricao" placeholder="Descrição">
                <label>Quantidade:</label>
                <input type="number" class="form-control" name="frm_quantidade" placeholder="0">
                <label>Observação:</label>
                <input type="text" class="form-control" name="frm_observacao" placeholder="Observação">
                <label>Imagem:</label><br>
                <input type="file" name="frm_imagem" class="form-control-file">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

@endsection