<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\livros;
use App\User;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(Gate $gate)
    {
        $this->registerPolicies($gate);

        $gate::define('update-livros', function (User $user, livros $livros){
            return $user->id_adm == $livros->adm_id;
        });

        $gate::define('del-livros', function (User $user, livros $livros){
            return $user->id_adm == $livros->adm_id;
        });

        $gate::define('alugar-livros', function (User $user, livros $livros){
            return $user->id_adm != $livros->adm_id;
        });

        $gate::define('cadastrar-livros', function (User $user){
            return $user->id_adm == 'adm';
        });

        //
    }
}
