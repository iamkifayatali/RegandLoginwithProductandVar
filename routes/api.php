<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\VarietiesController;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('/user/index', [UserController::class, 'index']);
Route::Post('/user/reg', [UserController::class, 'store']);
Route::put('/user/update/{id}', [UserController::class, 'userUpdate']);
Route::delete('/del/{id}', [UserController::class, 'deleteUser']);
Route::post('/user/login',[AuthController::class,'login']);
Route::any('/user/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::any('/user/log', [AuthController::class, 'log'])->middleware('auth:sanctum');
// these routes for products

Route::post('/create', [ProductsController::class, 'create']);
Route::get('/read', [ProductsController::class, 'read']);
Route::put('/update/{id}', [ProductsController::class, 'update']);
Route::delete('/delete/{id}', [ProductsController::class, 'delete']);


// these routes for varitites

Route::post('/createV', [VarietiesController::class, 'create']);
Route::get('/readV', [VarietiesController::class, 'read']);
Route::get('/readV/{id}', [VarietiesController::class, 'viewV']);
Route::put('/updateV/{id}', [VarietiesController::class, 'update']);
Route::delete('/deleteV/{id}', [VarietiesController::class, 'delete']);