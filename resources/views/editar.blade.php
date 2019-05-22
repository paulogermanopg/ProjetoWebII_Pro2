@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-sm-3">

        </div>
        <div class="col-sm-6">
            <form method="GET" action="{{ route('enviarupdateLivro') }}">
                <div class="form-group" style="display: none;">
                    <label for="id">Id</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{$livro->id}}">
                </div>
                <div class="form-group">
                    <label for="nome">Nome do Livro</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome do livro" value="{{$livro->nome}}">
                </div>
                <div class="form-group">
                    <label for="estado">Estado do Livro</label>
                    <input type="text" class="form-control" id="estado" name="estado" placeholder="Novo, velho, desgastado etc." value="{{$livro->estado}}">
                </div>
                <div class="form-group">
                    <label for="autor">Autor</label>
                    <input type="text" class="form-control" id="autor" name="autor" placeholder="Quem é o autor do livro?" value="{{$livro->autor}}">
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Programação, Redes, Administração..." value="{{$livro->categoria}}">
                </div>
                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Digite apenas números" value="{{$livro->isbn}}">
                </div>
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </form>
        </div>
    </div>

@endsection
