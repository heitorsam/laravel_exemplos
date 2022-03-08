@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

    <h1>Essa é a página de produtos!</h1>

    @if($id != null)

        <p>Exibindo o produto id: {{ $id }}</p>

    @endif    

    @if($res_busca != null)

        <p>Exibindo o valor da busca: {{ $res_busca }}</p>

    @endif    

    <a href="/">Voltar para a Home</a>

@endsection