
@extends('layouts.main')

@section('title', 'Exemplo Laravel')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busque um Produto</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Buscar um produto">
        </form>
    </div>

    <br>

    <div id="produtos-container" class="col-md-12">
        <br>
        <h2>Produtos Recentes</h2>
        <p>Veja os produtos mais recentes</p>
        <div id="cards-container" class="row">        
            @foreach($all_prod as $row_prod)
                <div class="card col-md-3" style="text-align: center;">
                    <img style="margin: 0 auto; margin-top: 20px;" width="140px" height="140px" src="img/produtos/{{ $row_prod->anexo_foto }}" alt="{{ $row_prod->nome }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $row_prod->nome }}</h5>
                        <p class="card-participants">Quantidade: {{ $row_prod->qtd }}</p>
                        <a href="{{asset('produtos')}}/{{ $row_prod->id }}" class="btn btn-primary"><i class="far fa-eye"></i> Visualizar</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection