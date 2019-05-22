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

        $this->authorize('cadastrar-livros');

        $data_form = $request->only(['nome','estado','autor','categoria','isbn']);

        $insert = $this->livro->insert([
            'nome' => $data_form['nome'],
            'estado' => $data_form['estado'],
            'autor' => $data_form['autor'],
            'categoria' => $data_form['categoria'],
            'isbn' => $data_form['isbn']
        ]);
        if ($insert) {
            return redirect('/home');
        }
        else {
            return redirect()->back();
        }

    }

    public function excluirLivro($idlivro){

        $delete = DB::table('livros')->where('id', '=', $idlivro)->delete();

        if($delete){
            return redirect('/home');
        }
        else{
            return redirect()->back();
        }
    }


    public function atualizarLivro(Request $request){


        $data_form = $request->only(['id','nome','estado','autor','categoria','isbn']);

        $idlivro = (int)$data_form['id'];
        $livro = $this->livro->find($idlivro);

        $update = $livro->update([
            'nome' => $data_form['nome'],
            'estado' => $data_form['estado'],
            'autor' => $data_form['autor'],
            'categoria' => $data_form['categoria'],
            'isbn' => $data_form['isbn']
        ]);
        if ($update) {
            return redirect('/home');
        }
        else {
            return redirect()->back();
        }

    }

    //
}
