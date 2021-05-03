@extends('layouts.main')

@section('title', 'HDC Events')
@section('content')
    <h1>Sistema de CRUD de alunos</h1>
    <img src="/img/banner.jpg" alt="Banner">


        <h1>Exemplo</h1>
        @if(10>5)
            <p>A condição é true</p>
        @endif

            <p>{{$nome}}</p>
            @if ($nome == 'pedro')
            <p>Seu nome é Pedro </p>
            @elseif ($nome == 'Matheus')
            <p>Vc se chama {{$nome}} e sua {{$idade}}
             anos é formado em {{$formacao}} no mês de {{$mes}}</p>
            @else
            <p>Seu nome não é Pedro</p>
            @endif
                <h1>Exemplo do for em um sitema!</h1>
            @for($i = 0; $i < count($arr); $i++)
                <p>{{$i}}- {{ $arr[$i] }}</p>

            @endfor

            @foreach($nomes as $nome)
                <p>{{ $nome }}</p>
            @endforeach

@endsection