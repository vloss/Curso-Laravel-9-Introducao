<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller
{
    public function index(){

        $businesses = Business::create([
            'name'  => 'Jon Snow',
            'email' => 'jon@snow.com',
            'address' => 'Rua A quadra B'
        ]);

        dd($businesses);
        
        //$businesses = Business::all();

        // $business = Business::find(1);

        // $business_where = Business::where('name', 'Hoppe, Johns and Langosh')->get();

        // $business_where = Business::where('name', 'Hoppe, Johns and Langosh')
        //     ->where('', '')
        //     ->orwhere('', '')
        //     ->get();
        
        // $business_where_first = Business::where('name', 'Hoppe, Johns and Langosh')->first();

        // dd($business_where_first, $business_where, $business, $businesses);
    }
}
