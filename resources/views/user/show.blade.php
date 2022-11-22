<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testes com Blade</title>
</head>
<body>
    <h1>Teste</h1>

    {{ route('user.show' , 1) }} <br />
    {{ date('d/m/y') }} <br />

    {{ $user->name }} <br />

    @php
        $total = null;
    @endphp

    @if ($total > 50)
        <p>Ta caro</p>
    @elseif($total < 50)
        <p>Ta barato</p>
    @elseif($total >= 100)
        <p>Ta muito caro</p>
    @endif


@empty($total)
    <p>Compra vazia!</p>
@endempty


    @if ($user->name == "Ana Satterfield II")
        <p>Nome igual a condição!</p>
    @else
        <p>Nome diferente a condição!</p>
    @endif
</body>
</html>