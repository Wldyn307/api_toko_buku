<?php

namespace App\Http\Controllers;

use App\Models\transactionsM;
use Illuminate\Http\Request;
use App\Http\Resources\transactionsR;

class transactionsC extends Controller
{
    public function index(){
        $transactions = transactionsM::all();
        // return response()-> json($transaction);
        return transactionsR::collection($transactions);
    }

    public function detail($id){
        $transactions = transactionsM::findOrFail($id);
    return new transactionsR($transactions);
    }
}
