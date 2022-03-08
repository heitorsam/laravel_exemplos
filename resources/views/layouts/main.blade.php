<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>  

        <!-- CSS -->
        <link rel="stylesheet" href="css/styles.css">

        <!-- JS -->
        <script src="js/scripts.js"></script>

        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-light">

            <div class="collapse navbar-collapse" id="navbar">

                <a href="./" class="navbar-brand">
                    <img src="img/logo_laravel.png" alt="Logo site">
                </a>

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a href="./produtos" class="nav-link">Produtos</a>
                    </li>

                    <li class="nav-item">
                        <a href="./cadastrar_produtos" class="nav-link">Cadastrar Produtos</a>
                    </li>

                    <li class="nav-item">
                        <a href="./contato" class="nav-link">Contato</a>
                    </li>

                    <li class="nav-item">
                        <a href="./entrar" class="nav-link">Entrar</a>
                    </li>

                    <li class="nav-item">
                        <a href="./cadastra" class="nav-link">Cadastrar</a>
                    </li>

                </ul>

            </div>
            
        </nav>

        @yield('content')

    </body>

    <footer>

        ---
        <br>
        Exemplos Laravel Heitor &copy; 2022

    </footer>

</html>