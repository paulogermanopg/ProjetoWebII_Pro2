<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class usereditController extends Controller
{
    private $user;

    public function __construct(User $user){

        $this->user = $user;

    }

    public function listarUser(User $user)
    {
        $User = $user -> all();

        $this->authorize('user-mudar');

        return view('usereditar',compact('User'));
    }

    public function mudarUser($id){

        $this->authorize('user-mudar');
        $useraqui = $this->user->find($id);

        if ($useraqui->id_adm == 'user' ){
            $userteste = $useraqui->update([
                'id_adm' => 'adm'
            ]);
        }
        else{
            $userteste = $useraqui->update([
                'id_adm' => 'user'
            ]);
        }

        if ($userteste) {
            return redirect('/livros/user/listar');
        }
        else {
            return redirect()->back();
        }

    }

    //
}
