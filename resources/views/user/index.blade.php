@extends('layouts.layout_sistema')

@section('title', 'Listagem de Usuários')
@section('descricao', 'Listagem de Usuários')

@section('sidebar')
    <div>
        <nav>
            sidebar
        </nav>
    </div>
@endsection

@section('content')
    @foreach ($listagem as $item)
        <p>{{$item->name}}</p><br />
    @endforeach    
@endsection

