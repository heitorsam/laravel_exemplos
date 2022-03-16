@extends('layouts.main')

@section('title', $produto->nome)

@section('content')

    <div class="col-md-12">

        <div class="row">

            <div id="image-container" class="col-md-12" style="text-align: center;">
                
                <img style="border: solid 1px #cccccc;" width="200px" height="200px" class="img-fluid" src="{{asset('img/produtos')}}/{{ $produto->anexo_foto }}" alt="{{ $produto->nome }}">

                <div id="info-container" class="col-md-12">

                    <br>
                    <h3>{{ $produto->nome }}</h3>
                    <p>Descrição: {{ $produto->descricao }}</p>
                    <p>Estoque: {{ $produto->qtd }}</p>
                    <p>Observação: {{ $produto->observacao }}</p>
                    <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Comprar</a>


                </div>

            </div>

        </div>

    </div>

@endsection