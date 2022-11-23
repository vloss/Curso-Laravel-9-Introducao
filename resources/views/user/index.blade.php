@extends('layouts.layout_sistema')

@section('content')
    @foreach ($listagem as $item)
        <p>{{$item->name}}</p><br />
    @endforeach    
@endsection

