@extends ('layouts.main')

@section('title', 'Página de Produtos')

@section('content')
    <p>Tela de produtos:</p>

    @if($busca != '')
        <p>O usuário está buscando por: {{ $busca }}</p>
    @endif



@endsection