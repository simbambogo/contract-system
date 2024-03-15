<?php

use App\Http\Controllers\contracts\ContractsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContractController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/login', [App\Http\Controllers\ContractController::class, 'login'])->name('contract.login');

//contract
Route::get('/contract',[ContractsController::class,'index'])->name('contract');
Route::get('/contract/create',[ContractsController::class,'create'])->name('contract.create');
Route::post('/contract/save',[ContractsController::class,'save'])->name('contract.save');
Route::post('/contract/delete/{id}',[ContractsController::class,'destroy'])->name('contract.destroy');
