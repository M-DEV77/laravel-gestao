<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">

    <style>
        body{
            padding: 0;
            margin: 0;
            border: 0;
            font-family: Arial, Helvetica, sans-serif;
            box-sizing: border-box;
            background-color: rgb(63, 63, 63);
            color: aliceblue;
        }
        nav{
            height:8vh;
            width: 100vw;
            background-color: azure;
            display: flex;
            flex-direction: row;
            align-items: center;

        }
        a, h3{
            color: rgb(87, 87, 87);
            text-decoration: none;
            padding: 2px
        }
        a:hover{
            color: blue;
        }
        main{
            height:84vh;
            width: 100vw;
            background-color: rgb(66, 66, 66);
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        footer{
            height:8vh;
            width: 100vw;
            background-color: azure;
            display: flex;
            flex-direction: row;
            align-items: center;
            color: brown;

        }
    </style>
</head>
<body>
 <nav>
    <h3>
        Gestão-
    </h3>
    <div class="menus">
        <a href="{{route('site.home')}}">home</a>
        <a href="{{route('site.sobre')}}">About</a>
        <a href="{{route('site.contato')}}">contato</a>
        <a href="{{route('app.login')}}">login</a>
        <a href="{{route('app.clientes')}}">clientes</a>
        <a href="{{route('app.fornecedores')}}">fornecedores</a>
    </div>

</nav>
<main>
    @yield('conteudo')
</main>


<footer>
    por: Marcelo olimpio
</footer>
</body>
</html>
