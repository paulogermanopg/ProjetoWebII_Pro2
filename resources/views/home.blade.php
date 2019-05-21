@extends('layouts.app')

@section('content')
    <div class="row container">
        <div class="col-sm-12">
            <H3 align="center">Acervo da Livraria da Tecnologia da Informação</H3>
            @can('cadastrar-livros')
            <a href="{{url("/livros/cadastrar")}}" style="font-size: 15pt;" class="btn">Cadastrar novo Livro</a>
            @endcan
        </div>
    </div>
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
                    <th scope="row" colspan="3"><a href="{{url("/livros/$livros->id/update")}}" class="btn">Editar</a></th>
                    <th scope="row" colspan="2"><a href="{{url("/livros/$livros->id/del")}}" class="btn">Excluir</a></th>
                </tr>
                @endcan
                @can('alugar-livros',$livros)
                    <tr>
                        <th scope="row" colspan="5"><a href="{{url("/livros/$livros->id/alugar")}}" class="btn">Alugar</a></th>
                    </tr>
                @endcan
                </tbody>
            </table>

       @empty
            <p>Nenhum Livro Cadastrado</p>
       @endforelse
    </div>
@endsection
