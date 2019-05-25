@extends('layouts.app')

@section('content')
    <?php
    $dia = date('d');
    $mes = date('m');
    $ano = date('y');

    if($mes == 2){
        $rLivros[0] = $dia;
        for ($i = 1; $i <= 7; $i++) {
            if(($dia + $i)>=29){
                $rLivros[$i]= 1;
                $rLivros[$i+1]= 2;
                $rLivros[$i+2]= 3;
                $rLivros[$i+3]= 4;
                $rLivros[$i+4]= 5;
                $rLivros[$i+5]= 6;
                $rLivros[$i+6]= 7;
                break;
            }
            else {
                $rLivros[$i] = $dia + $i;
            }
        }
    }
    if(($mes == 1)||($mes == 3)||($mes == 5)||($mes == 7)||($mes == 8)||($mes == 10)||($mes == 12)){
        $rLivros[0] = $dia;
        for ($i = 1; $i <= 7; $i++) {
            if(($dia + $i)>=32){
                $rLivros[$i]= 1;
                $rLivros[$i+1]= 2;
                $rLivros[$i+2]= 3;
                $rLivros[$i+3]= 4;
                $rLivros[$i+4]= 5;
                $rLivros[$i+5]= 6;
                $rLivros[$i+6]= 7;
                break;
            }
            else {
                $rLivros[$i] = $dia + $i;
            }
        }
    }
    if(($mes == 4)||($mes == 6)||($mes == 9)||($mes == 11)){
        $rLivros[0] = $dia;
        for ($i = 1; $i <= 7; $i++) {
            if(($dia + $i)>=31){
                $rLivros[$i]= 1;
                $rLivros[$i+1]= 2;
                $rLivros[$i+2]= 3;
                $rLivros[$i+3]= 4;
                $rLivros[$i+4]= 5;
                $rLivros[$i+5]= 6;
                $rLivros[$i+6]= 7;
                break;
            }
            else {
                $rLivros[$i] = $dia + $i;
            }
        }
    }
    ?>
    <div class="container">

        @forelse($reserva as $r)
            <?php
                if($ano == $r->ano){
                    if(($mes == $r->mês)||($mes == ($r->mês)+1)){

                            if($rLivros[0] == $r->dia){
                                $rLivros[0] = 0;
                            }
                        

                    }

                }
                if($ano == $r->ano){
                    if(($mes == $r->mês)||($mes == ($r->mês)+1)){

                            if($rLivros[1] == $r->dia){
                                $rLivros[1] = 0;
                            }

                    }

                }
                if($ano == $r->ano){
                    if(($mes == $r->mês)||($mes == ($r->mês)+1)){

                            if($rLivros[2] == $r->dia){
                                $rLivros[2] = 0;
                            }

                    }

                }
                if($ano == $r->ano){
                    if(($mes == $r->mês)||($mes == ($r->mês)+1)){

                            if($rLivros[3] == $r->dia){
                                $rLivros[3] = 0;
                            }

                    }

                }
                if($ano == $r->ano){
                    if(($mes == $r->mês)||($mes == ($r->mês)+1)){

                            if($rLivros[4] == $r->dia){
                                $rLivros[4] = 0;
                            }

                    }

                }
                if($ano == $r->ano){
                    if(($mes == $r->mês)||($mes == ($r->mês)+1)){

                            if($rLivros[5] == $r->dia){
                                $rLivros[5] = 0;
                            }

                    }

                }
                if($ano == $r->ano){
                    if(($mes == $r->mês)||($mes == ($r->mês)+1)){

                            if($rLivros[6] == $r->dia){
                                $rLivros[6] = 0;
                            }

                    }

                }
                if($ano == $r->ano){
                    if(($mes == $r->mês)||(($mes + 1) == (($r->mês)+1))){

                            if($rLivros[7] == $r->dia){
                                $rLivros[7] = 0;
                            }

                    }

                }
            ?>




        @empty

        @endforelse

            <div class="row">
                <div class="col-sm-3">

                </div>
                <div class="col-sm-5">
                    <h3>Escolha um dia para reservar seu livro!</h3>
                    <p>Se não houver dias disponíveis volte amanhã</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">

                </div>
                <div class="col-sm-7">
                    <?php

                        if($rLivros[0] == 0){
                            $displaynone = "display: none;";
                        }
                        else{
                            $displaynone = "";
                        }
                        if($rLivros[1] == 0){
                            $displaynone1 = "display: none;";
                        }
                        else{
                            $displaynone1 = "";
                        }
                        if($rLivros[2] == 0){
                            $displaynone2 = "display: none;";
                        }
                        else{
                            $displaynone2 = "";
                        }
                        if($rLivros[3] == 0){
                            $displaynone3 = "display: none;";
                        }
                        else{
                            $displaynone3 = "";
                        }
                        if($rLivros[4] == 0){
                            $displaynone4 = "display: none;";
                        }
                        else{
                            $displaynone4 = "";
                        }
                        if($rLivros[5] == 0){
                            $displaynone5 = "display: none;";
                        }
                        else{
                            $displaynone5 = "";
                        }
                        if($rLivros[6] == 0){
                            $displaynone6 = "display: none;";
                        }
                        else{
                            $displaynone6 = "";
                        }
                        if($rLivros[7] == 0){
                            $displaynone7 = "display: none;";
                        }
                        else{
                            $displaynone7 = "";
                        }
                    ?>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col" colspan="8" align="center">Dias disponíveis</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="{{url("/livros/$idLivro/alugar/$rLivros[0]")}}" class="btn btn-secondary" style="{{$displaynone}}">Dia {{$rLivros[0]}}</a></td>
                                <td><a href="{{url("/livros/$idLivro/alugar/$rLivros[1]")}}" class="btn btn-secondary" style="{{$displaynone1}}">Dia {{$rLivros[1]}}</a></td>
                                <td><a href="{{url("/livros/$idLivro/alugar/$rLivros[2]")}}" class="btn btn-secondary" style="{{$displaynone2}}">Dia {{$rLivros[2]}}</a></td>
                                <td><a href="{{url("/livros/$idLivro/alugar/$rLivros[3]")}}" class="btn btn-secondary" style="{{$displaynone3}}">Dia {{$rLivros[3]}}</a></td>
                            </tr>
                            <tr>
                                <td><a href="{{url("/livros/$idLivro/alugar/$rLivros[4]")}}" class="btn btn-secondary" style="{{$displaynone4}}">Dia {{$rLivros[4]}}</a></td>
                                <td><a href="{{url("/livros/$idLivro/alugar/$rLivros[5]")}}" class="btn btn-secondary" style="{{$displaynone5}}">Dia {{$rLivros[5]}}</a></td>
                                <td><a href="{{url("/livros/$idLivro/alugar/$rLivros[6]")}}" class="btn btn-secondary" style="{{$displaynone6}}">Dia {{$rLivros[6]}}</a></td>
                                <td><a href="{{url("/livros/$idLivro/alugar/$rLivros[7]")}}" class="btn btn-secondary" style="{{$displaynone7}}">Dia {{$rLivros[7]}}</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-3">

                </div>

            </div>

    </div>

@endsection
