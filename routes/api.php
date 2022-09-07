<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('customer',App\Http\Controllers\CustomerController::class);
//
//Route::get('getCustomer', [\App\Http\Controllers\CustomerController::class, 'index'])->name('api-getAll');
//Route::get('getCustomer/{id}', [\App\Http\Controllers\CustomerController::class, 'getCustomer1'])->name('api-getAllid');
//
//Route::delete('deleteCustomer/{id}', [\App\Http\Controllers\CustomerController::class, 'deleteCustomer'])->name('api-delete');
//Route::post('saveCustomer', [App\Http\Controllers\CustomerController::class, 'store'])->name('api-saveProduct');
//Route::put('editCustomer/{id}', [App\Http\Controllers\CustomerController::class, 'editCustomer'])->name('api-editCustomer');
