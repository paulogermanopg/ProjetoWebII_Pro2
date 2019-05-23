<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class reservas extends Model
{
    use Notifiable;
    protected $fillable=['id_livro','email','livro','isbn','dia','mês','ano'];
    //
}
