<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\PostController;

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


Route::get('masters/', [MasterController::class, 'index']);
Route::get('masters/{master}', [MasterController::class, 'show']);

Route::get('posts/', [PostController::class, 'index'])->name('post.index');
Route::get('posts/{post}', [PostController::class, 'show'])->name('post.show');

Route::get('user/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('users', [UserController::class, 'index'])->name('user.index');

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/business', [BusinessController::class, 'index']);