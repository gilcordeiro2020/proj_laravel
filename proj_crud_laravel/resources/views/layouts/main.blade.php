<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts do google -->
        
         <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS do Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!--CSS da aplicação -->

        <!-- Styles -->
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/scripts.js">  </script>
    </head>
    <header>
        <nav class="navbar navbar-expand-lg navbar-lighit"></nav>
        <div class="collapse nav collapse" id="navb"></div>
            <a href="/" class="navbar-brand">
                <img src="/img/hdcevents_logo.svg" alt="HDC Events">
            </a>
            <ul class="navbar-nav">
                <li class="itens">
                    <a href="/" class="li">Eventos</a>
                </li>
                <li class="itens">
                    <a href="/events/create" class="li">Criar eventos</a>
                </li>
                <li class="itens">
                    <a href="/" class="li">Entrar</a>
                </li>
                <li class="itens">
                    <a href="/" class="li">Cadastrar</a>
                </li>
            </ul>
        
    </header>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <body>
    @yield('content')


     
    </body>
</html>
HCD Events &copy; 2021