<?php

namespace App\Http\Controllers;

use App\Models\productM;
use Illuminate\Http\Request;
use App\Http\Resources\productR;

class productC extends Controller
{
    public function index(){
        $product = productM::all();
        // return response()-> json($product);
        return productR::collection($product);
    }

    public function detail($id){
        $product = productM::findOrFail($id);
    return new productR($product);
    }
}
