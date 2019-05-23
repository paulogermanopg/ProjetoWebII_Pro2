@extends('layouts.app')

@section('content')
    <div class="container">
        @forelse($User as $u)
            <div class="row">
                <div class="col-sm-2">

                </div>
                <div class="col-sm-7">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Mudar Categoria</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">{{$u->id}}</th>
                            <td>{{$u->name}}</td>
                            <td>{{$u->email}}</td>
                            <td>{{$u->id_adm}}</td>
                            <td><a href="{{url("/livros/user/$u->id/mudar")}}" class="btn btn-primary">Alterar Status</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>


        @empty
            <p>Nenhum Livro Cadastrado</p>
        @endforelse
    </div>
@endsection