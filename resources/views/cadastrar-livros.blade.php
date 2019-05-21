@extends('layouts.app')
@section('content')
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

@endsection