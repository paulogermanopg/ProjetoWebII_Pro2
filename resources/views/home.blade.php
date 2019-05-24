@extends('layouts.app')

@section('content')
<div class="row container">
        <div class="col-sm-1">

        </div>
        <div class="col-sm-11">
            <H3 align="center">Acervo da Livraria da Tecnologia da Informação</H3>
            @can('cadastrar-livros')
                <table>
                    <tr>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Cadastrarmodal">
                                Cadastrar novo livro
                            </button>
                            <br/>
                        </td>
                        <br/>
                        <td>
                            <a href="{{url("/livros/reservas/listar")}}" class="btn btn-primary">Listar reservas</a>
                            <br/>
                        </td>
                        <td>
                            <a href="{{url("/livros/user/listar")}}" class="btn btn-primary">Visalizar/Editar usuários</a>
                            <br/>
                        </td>
                    </tr>
                </table>
                <br/>
        
                <div class="modal fade" id="Cadastrarmodal" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="Cadastrarmodal">CADASTRAR LIVRO</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-1">

                                    </div>
                                    <div class="col-sm-10">
                                        <form method="GET" action="{{ route('cadastroEnviar') }}">
                                            <div class="form-group">
                                                <label for="nome">Nome do Livro</label>
                                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome do livro">
                                            </div>
                                            <div class="form-group">
                                                <label for="estado">Estado do Livro</label>
                                                <input type="text" class="form-control" id="estado" name="estado" placeholder="Novo, velho, desgastado etc.">
                                            </div>
                                            <div class="form-group">
                                                <label for="autor">Autor</label>
                                                <input type="text" class="form-control" id="autor" name="autor" placeholder="Quem é o autor do livro?">
                                            </div>
                                            <div class="form-group">
                                                <label for="categoria">Categoria</label>
                                                <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Programação, Redes, Administração...">
                                            </div>
                                            <div class="form-group">
                                                <label for="isbn">ISBN</label>
                                                <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Digite apenas números">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <th scope="row" colspan="3"><a href="{{url("/livros/$livros->id/update")}}" class="btn btn-secondary">Editar</a></th>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ED{{$livros->id}}">
                        Excluir
                    </button></td>
                    <td scope="row" colspan="2"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#EX{{$livros->id}}">
                        Excluir
                        </button></td>
                    <div class="modal fade" id="EX{{$livros->id}}" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="EX{{$livros->id}}">EXCLUIR LIVRO</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-1">

                                        </div>
                                        <div class="col-sm-10">
                                            <h3>Deseja realmente excluir este livro?</h3>
                                        </div>
                                    </div>
                                    <a href="{{url("/livros/$livros->id/del")}}" class="btn btn-danger">Excluir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="ED{{$livros->id}}" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ED{{$livros->id}}">EDITAR LIVRO</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">

                                        <div class="col-sm-3">

                                        </div>
                                        <div class="col-sm-6">
                                            <form method="GET" action="{{ route('home') }}">
                                                <div class="form-group" style="display: none;">
                                                    <label for="id">Id</label>
                                                    <input type="text" class="form-control" id="id" name="id" value="{{$livros->id}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nome">Nome do Livro</label>
                                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome do livro" value="{{$livros->nome}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="estado">Estado do Livro</label>
                                                    <input type="text" class="form-control" id="estado" name="estado" placeholder="Novo, velho, desgastado etc." value="{{$livros->estado}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="autor">Autor</label>
                                                    <input type="text" class="form-control" id="autor" name="autor" placeholder="Quem é o autor do livro?" value="{{$livros->autor}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="categoria">Categoria</label>
                                                    <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Programação, Redes, Administração..." value="{{$livros->categoria}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="isbn">ISBN</label>
                                                    <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Digite apenas números" value="{{$livros->isbn}}">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Atualizar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
                @endcan
                @can('alugar-livros',$livros)
                    <?php
                            $null = 'null';
                    ?>
                    <tr>
                        <th scope="row" colspan="5"><a href="{{url("/livros/$livros->id/alugar/$null")}}" class="btn btn-secondary">Reservar Livro</a></th>
                    </tr>
                @endcan
                </tbody>
            </table>

       @empty
            <p>Nenhum Livro Cadastrado</p>
       @endforelse
    </div>
@endsection
