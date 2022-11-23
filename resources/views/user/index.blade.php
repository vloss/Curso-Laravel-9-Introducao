@extends('layouts.layout_sistema')

@push('styles')
<link rel="stylesheet" href="{{ asset('/css/user/user.css') }}">    
@endpush


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

@push('scripts')
<script src="{{ asset('/js/user/user.js') }}"></script>
<script>
    var user = 'vinicius';
</script>
@endpush
