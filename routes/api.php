<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthC;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logC;
use App\Http\Controllers\usersC;
use App\Http\Controllers\productC;
use App\Http\Controllers\transactionsC;

route::get('/', function(){
    return 'Hello World API !';
});
route::get('/product',[productC::class,'index'])->middleware(['auth:sanctum']);
route::get('/product/{id}',[productC::class,'detail'])->middleware(['auth:sanctum']);

route::get('/transactions',[transactionsC::class,'index'])->middleware(['auth:sanctum']);
route::get('/transactions/{id}',[transactionsC::class,'detail'])->middleware(['auth:sanctum']);

route::post('/login',[AuthC::class,'login']);

route::get('/admin',function(){
    return Hash::make('admin');
});

route::get('/log',[logC::class,'index']);
route::get('/log/{id}',[logC::class,'detail']);

route::get('/users',[usersC::class,'index']);
route::get('/users/{id}',[usersC::class,'detail']);

route::get('/owner',function(){
    return Hash::make('owner');

});
    route::get('/admin',function(){
    return Hash::make('kasir');
});