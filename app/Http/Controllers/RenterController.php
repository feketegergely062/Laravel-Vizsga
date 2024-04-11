<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Renter;

class RenterController extends Controller
{

    public function getRenters(){

        $renters = Renter::with("renting")->get();

        return response()->json(["message" => "OK", "data" => $renters], 200);
    }

    public function getRenter($id){

        $renter= Renter::with("renting")->find($id);
        
        return response()->json(["message" => "OK", "data" => $renter], 200);
    }
}
