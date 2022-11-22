<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/request', function(\Illuminate\Http\Request $request) {
    
    $r = $request->query('pesquisar');

    dd($r);

    return $request;
})->name('request');


Route::get('user/{user}', [UserController::class, 'show'])->name('user.get');

Route::get('user/email/{user:email}', function(\App\Models\User $user) {
    return dd($user);
})->name('user.get.email');


Route::prefix('usuarios')->group(function(){
    Route::get('/', function(){
        return 'Usuários';
    })->name('usuarios.listagem');
    Route::get('{id}', function(){
        return 'Mostrar Detalhes';
    })->name('usuarios.detalhes');
    Route::get('{id}/tags', function(){
        return 'Tags do Usuário';
    })->name('usuarios.tags');
});

Route::get('/a-empresa/{string?}', function ($string = null) {

    return $string;

    //return view('welcome');
})->name('a-empresa');

Route::get('/users/{paramA}/{paramB}', function ($paramA, $paramB) {

    return $paramA . ' - ' . $paramB;

    //return view('welcome');
});


// Configuração Inicial