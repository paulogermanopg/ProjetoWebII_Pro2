@extends('layouts.app')

@section('content')
<div class="container">
    @forelse($Reserva as $r)
    <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-7">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id_Livro</th>
                    <th scope="col">Email</th>
                    <th scope="col">Livro</th>
                    <th scope="col">Isbn</th>
                    <th scope="col">Data</th>
                    <th scope="col">Excluir</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">{{$r->id_livro}}</th>
                    <td>{{$r->email}}</td>
                    <td>{{$r->livro}}</td>
                    <td>{{$r->isbn}}</td>
                    <td>{{$r->dia}}/{{$r->mês}}/{{$r->ano}}</td>
                    <td><a href="{{url("/livros/reservas/$r->id/excluir")}}" class="btn btn-danger">Excluir Reserva</a></td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>


    @empty
    <p>Nenhuma Reserva Cadastrada</p>
    @endforelse
</div>
@endsection