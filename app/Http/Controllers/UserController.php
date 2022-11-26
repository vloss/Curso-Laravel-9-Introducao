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

        $data['user'] = $user;

        return view('user/show', $data);
    }
}
