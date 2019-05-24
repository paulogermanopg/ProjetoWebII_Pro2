<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\livros;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(livros $livros)
    {
      $livros_livros = $livros -> all();

        return view('_alugar-livros_',compact('livros_livros'));
    }

    public function update($idlivro)
    {
        $livro = livros::find($idlivro);

        $this->authorize('update-livros', $livro);

        return view('editar',compact('livro'));
    }

}
