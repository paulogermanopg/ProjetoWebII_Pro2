<?php

use Illuminate\Database\Seeder;
use App\livros;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        livros::create([
            'nome' => 'O Paradoxo',
            'estado' => 'Novo',
            'autor' =>'Paulo Germano',
            'categoria' =>'Literaturas',
            'isbn' => '123456789-9',
        ]);
        //
    }
}
