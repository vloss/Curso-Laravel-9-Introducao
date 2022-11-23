<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Titulo Padrão')</title>
</head>
<body>
    <h1>@yield('descricao', 'Descrição Padrão')</h1>

    @section('sidebar')
        <div>
            <nav>
                sidebar padrão
            </nav>
        </div>
    
    @show

    @yield('content')

    <footer>
        <p>Curso de Laravel 9 Introdução - {{date('Y')}}</p>
    </footer>
</body>
</html>