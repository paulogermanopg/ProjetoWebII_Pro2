@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>{{$livro->nome}}</h3>
        <p>{{$livro->estado}}</p>
        <p>{{$livro->autor}}</p>
        <p>{{$livro->categoria}}</p>
        <p>{{$livro->isbn}}</p>
        <hr>
    </div>
@endsection

