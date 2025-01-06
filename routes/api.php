<?php


use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::match(['get', 'post'], function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




Route::match(['get', 'post'],'/users', [UserController::class, 'index']);
Route::match(['get', 'post'],'/users/{id}', [UserController::class, 'findOne']);

Route::match(['get', 'post'],'/users', [UserController::class, 'insert']);


Route::match(['get', 'post'],'/addresses', [AddressController::class, 'index']);
Route::match(['get', 'post'],'/addresses/{id}', [AddressController::class, 'findOne']);
// Route::post('/addresses', [AddressController::class, 'insert']);





