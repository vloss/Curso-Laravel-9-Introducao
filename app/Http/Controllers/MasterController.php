<?php

namespace App\Http\Controllers;

use App\Models\Master;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index(){

        $masters = Master::all();

        return $masters;

        //$master = Master::find(3);

    }   
    
    public function show(Master $master){

        return $master->load(['hasMasterDetail']);

        dd($master->hasMasterDetail());

        //$master = Master::find($id_master);

        return $master;

        //$master = Master::find(3);

    }
}
