<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\livros;
use App\User;
use App\reservas;

class reservasController extends Controller
{

    private $livro;

    public function __construct(livros $livro,reservas $reserva){

        $this->livro = $livro;
        $this->reserva = $reserva;

    }

    public function agendarReservas02($idLivro, $rLivro, reservas $reservas, livros $Livro){
        if($rLivro == 'null'){
            $reserva = DB::table('reservas')->select('*')->where('id_livro', '=', $idLivro)->get();
            //$reserva = $reservas -> all();
            return view('_alugar-livros_',compact('reserva'),compact('idLivro'));
        }
        else {
            $livro = $this->livro::find($idLivro);
            $data_form[0] = $idLivro;
            $data_form[1] = Auth::user()->email;;
            $data_form[2] = $livro->nome;
            $data_form[3] = $livro->isbn;
            $data_form[4] = $rLivro;
            if (date('d') > $rLivro) {
                $data_form[5] = date('m') + 1;
            } else {
                $data_form[5] = date('m');
            }
            $data_form[6] = date('y');


            $insert = $this->reserva->insert([
                'id_livro' => $data_form[0],
                'email' => $data_form[1],
                'livro' => $data_form[2],
                'isbn' => $data_form[3],
                'dia' => $data_form[4],
                'mês' => $data_form[5],
                'ano' => $data_form[6]
            ]);
            if ($insert) {
                return redirect('/home');
            } else {
                return redirect()->back();
            }
        }
    }


    public function listarReservas(reservas $reserva)
    {
        $Reserva = $reserva -> all();

        $this->authorize('user-mudar');

        return view('listar-reservas',compact('Reserva'));
    }

    public function excluirReserva($id){

        $delete = DB::table('reservas')->where('id', '=', $id)->delete();

        if($delete){
            return redirect('/livros/reservas/listar');
        }
        else{
            return redirect()->back();
        }
    }
    //
}
