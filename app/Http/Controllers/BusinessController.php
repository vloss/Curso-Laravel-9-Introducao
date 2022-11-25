<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller
{
    public function index(){
        $businesses = Business::all();

        // dd($businesses);

        $business = Business::find(1);

        $business_where = Business::where('name', 'Hoppe, Johns and Langosh')->get();
        
        $business_where_first = Business::where('name', 'Hoppe, Johns and Langosh')->first();

        dd($business_where_first, $business_where, $business, $businesses);
    }
}
