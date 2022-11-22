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

        $data['user'] = $user;

        return view('user/show', $data);
    }
}
