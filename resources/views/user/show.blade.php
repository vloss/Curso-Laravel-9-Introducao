

@extends('layouts/layout_sistema')

@section('descricao', 'Show Usuário')

@section('content')
    


{{-- {{ route('user.show' , 1) }} <br /> --}}
{{-- {{ date('d/m/y') }} <br /> --}}

{{ $user->name }} <br />
{{-- 
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
@endif --}}

@endsection