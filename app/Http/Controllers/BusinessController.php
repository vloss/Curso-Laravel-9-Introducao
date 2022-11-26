<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller
{
    public function index(){

        // ****************************************
        // Inserir Registro no Banco de Dados
        // ****************************************
        // $businesses = Business::create([
        //     'name'  => 'Jon Snow',
        //     'email' => 'jon@snow.com',
        //     'address' => 'Rua A quadra B'
        // ]);

        // dd($businesses);



        // ****************************************
        // Bucar Todos Registros do Banco
        // ****************************************
        //$businesses = Business::all();



        // ****************************************
        // Deletar Registro
        // ****************************************
        $business = Business::find(3);
        $business->delete();

        dd($business);


        // ****************************************
        // 01 Atualizar Registro
        // ****************************************
        // $business = Business::find(3);

        // $business->name     = 'Vinicius';
        // $business->email    = 'vinicius@vloss.com.br';
        // $business->address  = 'Quadra A Rua B';
        // $business->save();

        // dd($business);



        // ****************************************
        // 02 Atualizar Registro
        // ****************************************
        // $business = Business::find(3)->update([
        //     'name'     => 'Vinicius Loss',
        //     'email'    => 'viniciusloss@vloss.com.br',
        //     'address'  => 'Quadra A Rua B'
        // ]);

        // dd($business);



        // ****************************************
        // 03 Atualizar Registro
        // ****************************************
        // $input = [
        //     'name' => 'Loss',
        //     'email' => 'loss@loss.com',
        //     'address' => 'Rua AAA'
        // ];

        // $business = Business::find(3);
        // $business->fill($input);
        // $business->save();

        // dd($business);


        // ****************************************
        // Buscar Registro
        // ****************************************
        // $business_where = Business::where('name', 'Hoppe, Johns and Langosh')->get();

        // $business_where = Business::where('name', 'Hoppe, Johns and Langosh')
        //     ->where('', '')
        //     ->orwhere('', '')
        //     ->get();
        
        // $business_where_first = Business::where('name', 'Hoppe, Johns and Langosh')->first();

        // dd($business_where_first, $business_where, $business, $businesses);
    }
}
