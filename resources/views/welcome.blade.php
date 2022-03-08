
@extends('layouts.main')

@section('title', 'Exemplo Laravel')

@section('content')

    <h1>Hello World Laravel</h1>

    @if(10 > 5)
            <p>Verdadeiro<p>
    @endif 

    <p>Nome: {{ $nome }}, Idade: {{ $idade }}, Profissão: {{ $profissao}}</p>

    @if($nome == "Pedro")

        <p>O nome é Pedro</p>

    @else

        <p>O nome não é Pedro</p>

    @endif


    @for($i = 0; $i < count($lista_num); $i++)

        <p>Laço: {{ $i }} Valor: {{ $lista_num[$i] }}</p>        

    @endfor

    @php

        $nome = "Heitor";
        echo $nome;

    @endphp

    {{-- Comentário do Blade --}}

    @foreach($lista_nomes as $row)

        <p>Laço foreach: {{ $loop->index }} Valor: {{ $row }}</p>  

    @endforeach

    <img src="img/amarelo.jpg" alt="Vista com flores amarelas">

@endsection