<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class livros extends Model
{
    use Notifiable;
    protected $fillable=['nome','estado','autor','categoria','isbn'];
    //
}
