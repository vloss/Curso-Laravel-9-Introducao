<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        
        $users = User::all();

        $data['listagem'] = $users;

        return view('user/index', $data);
    }

    public function show(User $user){

        //dd($id);

        //return $user ;

        // ****************************************
        //      Criando Posts para um usuário
        // ****************************************
        // $user->hasPosts()->create([
        //     'title'     => 'Meu Post',
        //     'content'   => 'Conteudo do post'
        // ]);

        // ****************************************
        //      Deletando Posts de um usuário
        // ****************************************
        // $user->hasPosts()->delete();

        // ****************************************
        //      Colocando metodo pega relação
        // ****************************************
        // dd($user->hasPosts());

        // ****************************************
        //      pega dados
        // ****************************************
        // dd($user->hasPosts->toArray());


        // ****************************************
        //      Relacionamento N to N
        // ****************************************

        // Insere o relacionamento do usuário atual com o Team passado no parametro do attach
        //$user->hasTeams()->attach(2);

        // Carrega todo o relacionamento do usuario
        // $user->load(['hasTeams', 'hasPosts']);
        
        // Sincroniza o relacionamento do usuário atual com o Team passado no parametro do sync (Exclui tudo e insere o que é passado no parametro.)
        // $user->hasTeams()->sync([3,2,1]);

        // Sincroniza o relacionamento do usuário atual com o Team passado no parametro do syncWithoutDetaching (Não Exclui os antigos e insere o que é passado no parametro.)
        // $user->hasTeams()->syncWithoutDetaching([3,2]);
        
        // Remove o relacionamento do usuário atual com o Team passado no parametro do detach
        //$user->hasTeams()->detach([3,2]);


        return $user->load(['hasTeams']);

        $data['user'] = $user;

        return view('user/show', $data);
    }
}
