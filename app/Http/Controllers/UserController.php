<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show(User $user){

        //dd($id);

        //return $user ;

        $data['user'] = $user;

        return view('user/show', $data);
    }
}
