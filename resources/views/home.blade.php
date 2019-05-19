@extends('layouts.app')

@section('content')
<div class="container">
   @forelse($livros_livros as $livros)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Estado</th>
                <th scope="col">Autor</th>
                <th scope="col">Categoria</th>
                <th scope="col">ISBN</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{$livros->nome}}</th>
                <td>{{$livros->estado}}</td>
                <td>{{$livros->autor}}</td>
                <td>{{$livros->categoria}}</td>
                <td>{{$livros->isbn}}</td>
            </tr>
            @can('update-livros',$livros)
            <tr>
                <th scope="row" colspan="3"><a href="{{url("/livros/$livros->id/update")}}">Editar</a></th>
                <th scope="row" colspan="2"><a href="{{url("/livros/$livros->id/del")}}">Excluir</a></th>
            </tr>
            @endcan
            </tbody>
        </table>

   @empty
        <p>Nenhum Livro Cadastrado</p>
   @endforelse
</div>
@endsection
