<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\livros;


class livrosController extends Controller
{
    private $livro;

    public function __construct(livros $livro){

        $this->livro = $livro;

    }

    public function create()
    {
        $this->authorize('cadastrar-livros');

        return view('cadastrar-livros');
    }

    public function novoLivro(Request $request){

        $data_form = $request->only(['nome','estado','autor','categoria','isbn']);

      //  $insert = $this->livro->insert($data_form);
        //dd($data_form['nome']);
        $insert = $this->livro->insert([
            'nome' => $data_form['nome'],
            'estado' => $data_form['estado'],
            'autor' => $data_form['autor'],
            'categoria' => $data_form['categoria'],
            'isbn' => $data_form['isbn']
        ]);
        if ($insert) {
            return redirect('/livros/cadastrar');
        }
        else {
            return redirect()->back();
        }

    }
    //
}
